@extends('layouts.admin.main')


@section('title_page','Cập nhật phòng'.$motel->room_number)

@section('content')
<script>
    tinymce.init({
        selector: 'textarea#desc',
        height: 400
    });
    tinymce.init({
        selector: 'textarea#transfer_infor',
        height: 250
    });
</script>
<form action="{{route('saveUpdate_motel',['id' => $motel->motel_id,'area_id' => $motel->area_id])}}" method="POST" enctype="multipart/form-data" id="content">
    <div class="row">
        <div class="bg-white p-4 shadow-lg rounded-4 col-6">
            <div class="mt-4">
                <div class="row">
                    <div class="col-6">
                        <label for="">Mã phòng</label>
                        <input type="text" name="room_number" id="room_number" class="form-control" value="{{$motel->room_number}}">
                    </div>
                    <div class="col-6">
                        <label for="">Giá cho thuê</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{$motel->price}}">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <label for="">Diện tích</label>
                        <input type="number" name="area" id="area" class="form-control" value="{{$motel->area}}">
                    </div>
                    <div class="col-4">
                        <label for="">Đối tượng thuê</label>
                        <select name="actor" id="actor" class="form-control">
                            <option value="">Chọn đối tượng thuê</option>
                            <option value="Nam" {{json_decode($motel->services)->actor == 'Nam' ? 'selected' : ''}}>
                                Nam
                            </option>
                            <option value="Nữ" {{json_decode($motel->services)->actor == 'Nữ' ? 'selected' : ''}}>
                                Nữ
                            </option>
                            <option value="Tất cả" {{json_decode($motel->services)->actor == 'Tất cả' ? 'selected' : ''}}>
                                Tất cả
                            </option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="">Số người ở tối đa</label>
                        <input type="number" name="max_people" value="{{$motel->max_people}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <label for="">Tiền điện (số)</label>
                        <input type="number" value="{{$motel->electric_money}}" name="electric_money" id="electric_money" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Tiền nước</label>
                        <input type="number" value="{{$motel->warter_money}}" name="warter_money" id="warter_money" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Tiền mạng</label>
                        <input type="number" value="{{$motel->wifi}}" name="wifi" id="wifi" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label for="">Dịch vụ phòng</label>
                <div class="row">
                    <div class="col-6">
                        <input type="number" value="{{json_decode($motel->services)->bedroom}}" name="bedroom" id="bedroom" placeholder="Số phòng ngủ" class="form-control">
                    </div>
                    <div class="col-6">
                        <input type="number" value="{{json_decode($motel->services)->toilet}}" name="toilet" id="toilet" placeholder="Nhà vệ sinh" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="d-flex flex-row">
                    <div class="ml-2 mr-5">
                        <div class="form-check mb-3">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[cho_de_xe]" id="flexCheckDefault" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('cho_de_xe',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckDefault">
                                Chỗ để xe
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[dieu_hoa]" id="flexCheckChecked" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('dieu_hoa',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckChecked">
                                Điều hoà
                            </label>
                        </div>
                    </div>
                    <div class="mx-5">
                        <div class="form-check mb-3">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[thang_may]" id="flexCheckDefault" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('thang_may',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckDefault">
                                Thang máy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[may_giat]" id="flexCheckChecked" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('may_giat',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckChecked">
                                Máy giặt
                            </label>
                        </div>
                    </div>
                    <div class="mx-5">
                        <div class="form-check mb-3">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[nong_lanh]" id="flexCheckDefault" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('nong_lanh',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckDefault">
                                Nóng lạnh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[tu_lanh]" id="flexCheckChecked" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('tu_lanh',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckChecked">
                                Tủ lạnh
                            </label>
                        </div>
                    </div>
                    <div class="mx-5">
                        <div class="form-check mb-3">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[giuong_ngu]" id="flexCheckDefault" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('giuong_ngu',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckDefault">
                                Giường ngủ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" style="padding: 9px" type="checkbox" name="service[tu_quan_ao]" id="flexCheckChecked" @php if(isset(json_decode($motel->services)->service_checkbox) && in_array('tu_quan_ao',json_decode($motel->services)->service_checkbox)){
                            echo 'checked';
                            }
                            @endphp>
                            <label class="form-check-label" for="flexCheckChecked">
                                Tủ quần áo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label>Khác</label>
                <input type="text" name="service_more" value="{{json_decode($motel->services)->more}}" placeholder="Gần trường học,chợ..." class="form-control">
            </div>
            <div class="mt-4">
                <label for="">Loại phòng</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Chọn loại phòng</option>
                    @foreach ($categories as $category)
                    @if ($motel->category_id == $category->id)
                    <option selected value="{{$motel->category_id}}">{{$motel->category_name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <label for="">Mô tả</label>
                <textarea name="description" id="desc" cols="30" rows="20" class="form-control">
                {{$motel->description}}
                </textarea>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white p-4 shadow-lg rounded-4">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-7">
                            <label>Thông tin liên hệ</label>
                            <input type="text" placeholder="Ngô Văn Phong" class="form-control" disabled>
                        </div>
                        <div class="col-5">
                            <label>Số điện thoại</label>
                            <input type="text" placeholder="0325500080" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="" class="">Video</label>
                    <input type="text" value="{{$motel->video}}" class="form-control" name="video" id="video" placeholder="Video link(youtube)">
                </div>
                <div class="mt-4">
                    <label for="">Ảnh 360</label>
                    <input type="text" value="{{$motel->image_360}}" name="image_360" id="image_360" class="form-control" placeholder="Đoạn code nhúng ảnh 360">
                    <p class="mt-2 ms-2 text-danger">Nếu bạn chưa biết cách sửa dụng ảnh 360.click vào <a href="http://help.web60.vn/bai-viet/huong-dan-nhung-anh-360-do-len-website" target="_blank">đây</a></p>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-7">
                            <label>Số tiền đặt cọc giữ phòng</label>
                            <input type="number" name="money_deposit" value="{{$motel->money_deposit}}" class="form-control">
                        </div>
                        <div class="col-5">
                            <label>Số ngày giữ phòng tối đa</label>
                            <input type="number" name="day_deposit" value="{{$motel->day_deposit}}" class="form-control">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="">Thông tin chuyển khoản</label>
                        <textarea name="transfer_infor" id="transfer_infor" cols="30" rows="20" class="form-control">
                        {{$motel->transfer_infor}}
                        </textarea>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="photo" class="">Ảnh phòng trọ</label>
                    <input type="hidden" name="img" value="{{$motel->photo_gallery}}">
                    <input type="file" multiple class="form-control" name="photo_gallery" id="photo_gallery">
                    <div class="preview mt-2" style="display: grid;grid-template-columns: repeat(4,1fr);gap: 8px;">

                    </div>
                </div>
            </div>
            @csrf
        </div>
    </div>
    <button class="btn btn-primary mt-4">Lưu</button>
    <a href="{{route('admin.motel.list',['id' => $motel->area_id])}}" class="btn btn-success mt-4">Quay lại</a>
</form>
<script>
    let arr = JSON.parse(document.getElementsByName('img')[0].value);
    render(arr);
    document.getElementById('photo_gallery').addEventListener('change', (e) => {
        const file = e.target.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            arr.push(reader.result);
            document.getElementsByName('img')[0].value = JSON.stringify(arr);
            render(arr);
        }
        reader.readAsDataURL(file);
    });

    function render(data) {
        document.querySelector('.preview').innerHTML = '';
        data.forEach((item, index) => {
            document.querySelector('.preview').innerHTML += `<div style="position: relative;">
<img  src="${item}" class="img-thumbnail"/>
<i  data-index="${index}" class="fa-solid fa-circle-xmark delete" style="position: absolute;top: 0;right: 2px;color: white;cursor: pointer;"></i> </div>`;
        })


        document.querySelectorAll('.delete').forEach(item => {
            const {
                index
            } = item.dataset;

            item.addEventListener('click', () => {
                const confirm = window.confirm('Bạn có chắc muốn xóa ảnh này');
                if (confirm) {
                    data = data.filter((item, index1) => index1 !== +index);
                    arr = data;
                    document.getElementsByName('img')[0].value = JSON.stringify(data);
                    render(data);
                }
            })
        })

    }
</script>
@include('layouts.admin._js')
<script>
    $("#content").validate({
        rules: {
            room_number: {
                required: true,
            },
            price: {
                required: true,
                digits: true
            },
            area: {
                digits: true,
                required: true,
            },
            "actor": {
                required: true,
            },
            "max_people": {
                digits: true,
                required: true,
            },
            "electric_money": {
                digits: true,
                required: true
            },
            "warter_money": {
                digits: true,
                required: true
            },
            "wifi": {
                digits: true,
                required: true
            },
            "toilet": {
                digits: true,
                required: true,
            },
            "bedroom": {
                digits: true,
                required: true,
            },
            "category_id": {
                required: true
            },
            "money_deposit": {
                digits: true,
                required: true
            },
            "day_deposit": {
                digits: true,
                required: true
            },
            "video": {
                required: true,
            },
            "image_360": {
                required: true,
            },
            "photo_gallery": {
                required: true,
            }
        },
        messages: {
            room_number: {
                required: "Nhập mã phòng",
            },
            price: {
                required: "Nhập giá phòng",
                digits: "Là số nguyên dương hoặc số 0"
            },
            area: {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập diện tích",
            },
            "actor": {
                required: "Chọn đối tượng thuê nhà",
            },
            "max_people": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập số lượng người",
            },
            "electric_money": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập giá tiền điện"
            },
            "warter_money": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập giá tiền nước"
            },
            "wifi": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập giá wifi"
            },
            "toilet": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập số lượng nhà vệ sinh",
            },
            "bedroom": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập số lượng phòng ngủ",
            },
            "category_id": {
                required: "Chọn loại phòng"
            },
            "money_deposit": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập tiền đặt cọc giữ phòng"
            },
            "day_deposit": {
                digits: "Là số nguyên dương hoặc số 0",
                required: "Nhập số lượng ngày giữ phòng"
            },
            "video": {
                required: "Nhập video",
            },
            "image_360": {
                required: "Nhập ảnh 360",
            },
            "photo_gallery": {
                required: "Nhập ảnh phòng trọ",
            }
        },
        submitHandler: function(form) {

            form.submit();

        }

    });
</script>
@endsection