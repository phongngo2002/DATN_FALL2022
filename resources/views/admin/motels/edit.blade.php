@extends('layouts.admin.main')


@section('title_page','Cập nhật phòng '.$motel->room_number)

@section('content')
<script>
    tinymce.init({
        selector: 'textarea#desc',
    });
    tinymce.init({
        selector: 'textarea#transfer_infor',
        height: 250
    });
</script>
<form id="form_Edit_Motel" action="{{route('saveUpdate_motel',['id' => $motel->motel_id,'area_id' => $motel->area_id])}}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="price" id="price" class="form-control" value="{{$motel->price}}">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <label for="">Diện tích</label>
                        <input type="text" name="area" id="area" class="form-control" value="{{$motel->area}}">
                    </div>
                    <div class="col-4">
                        <label for="">Đối tượng thuê</label>
                        <select name="actor" id="actor" class="form-control">
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
                        <input type="text" name="max_people" value="{{$motel->max_people}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label for="">Dịch vụ phòng</label>
                <div class="row">
                    <div class="col-4">
                        <input type="text" value="{{json_decode($motel->services)->bedroom}}" name="bedroom" placeholder="Số phòng ngủ" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="text" value="{{json_decode($motel->services)->bed}}" name="bed" placeholder="Số giường" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="text" value="{{json_decode($motel->services)->toilet}}" name="toilet" id="toilet" placeholder="Nhà vệ sinh" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label>Khác</label>
                <input type="text" name="service_more" value="{{json_decode($motel->services)->more}}" placeholder="Gần trường học,chợ..." class="form-control">
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
            </div>
            <div class="bg-white p-4 shadow-lg rounded-4">
                <div class="row">
                    <div class="col-7">
                        <label>Số tiền đặt cọc giữ phòng</label>
                        <input type="text" name="money_deposit" value="{{$motel->money_deposit}}" class="form-control">
                    </div>
                    <div class="col-5">
                        <label>Số ngày giữ phòng tối đa</label>
                        <input type="text" name="day_deposit" value="{{$motel->day_deposit}}" class="form-control">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="">Thông tin chuyển khoản</label>
                    <textarea name="transfer_infor" id="transfer_infor" cols="30" rows="20" class="form-control">
                    {{$motel->transfer_infor}}
                    </textarea>
                </div>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-4">
                <label for="photo" class="">Ảnh phòng trọ</label>
                <input type="hidden" name="img" value="{{$motel->photo_gallery}}">
                <input type="file" multiple class="form-control" name="photo_gallery" id="photo_gallery">
                <div class="preview mt-2" style="display: grid;grid-template-columns: repeat(4,1fr);gap: 8px;">

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




    $(document).ready(function() {

        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#form_Edit_Motel").validate({
            rules: {
                room_number: "required",
                price: {
                    required: true,
                    max: 999999999,
                    number: true
                },
                area: {
                    required: true,
                    number: true,
                    min: 1,
                },
                max_people: {
                    required: true,
                    number: true,
                    min: 1,
                    max: 9,
                },
                bedroom: {
                    required: true,
                    min: 1,
                    max: 4,
                },
                bed: {
                    required: true,
                    min: 1,
                    max: 4,
                },
                toilet: {
                    required: true,
                    min: 1,
                    max: 3,
                },
                service_more: {
                    required: true,
                    minlength: 10
                },
                description: {
                    required: true,
                    minlength: 15
                },
                money_deposit: {
                    required: true,
                    min: 50000,
                    max: 10000000,
                    number: true
                },
                day_deposit: {
                    required: true,
                    min: 1,
                    max: 10,
                    number: true
                },
                // transfer_infor: {
                //     required: true,
                //     minlength: 15
                // },
                photo_gallery: "required"
            },
            messages: {
                room_number: {
                    required: "Vui lòng nhập mã phòng trọ",
                },
                price: {
                    required: "Vui lòng nhập giá cho thuê",
                    max: "Gía thuê không thể lớn hơn 999.999.999 vnđ",
                    number: "Sai định dạng, vui lòng nhập lại giá thuê"
                },
                area: {
                    required: "Vui lòng nhập diện tích phòng trọ",
                    number: "Sai định dạng, vui lòng nhập lại diện tích ",
                    min: "Diện tích phòng không thể nhỏ hơn 1m2",
                },
                max_people: {
                    required: "Vui lòng nhập số lượng người ở tối đa",
                    number: "Sai định dạng, vui lòng nhập lại",
                    min: "Số lượng người tối thiểu không thể nhỏ hơn 1",
                    max: "Số lượng người tối đa không thể vượt quá 9"
                },
                bedroom: {
                    required: "Vui lòng nhập số lượng phòng ngủ",
                    min: "Số lượng phòng ngủ không thể nhỏ hơn 1",
                    max: "Số lượng phòng ngủ không thể vượt quá 4",
                    // number: "Sai định dạng, vui lòng nhập lại"
                },
                bed: {
                    required: "Vui lòng nhập số lượng giường ngủ",
                    min: "Số lượng phòng ngủ không thể nhỏ hơn 1",
                    max: "Số lượng giường ngủ không thể vượt quá 4",
                },
                toilet: {
                    required: "Vui lòng nhập số lượng nhà vệ sinh",
                    min: "Số lượng phòng ngủ không thể nhỏ hơn 1",
                    max: "Số lượng nhà vệ sinh không thể vượt quá 3",
                },
                service_more: {
                    required: "Vui lòng nhập những tiện ích quanh phòng trọ",
                    minlength: "Tối thiểu 10 kí tự"
                },
                description: {
                    required: "Vui lòng nhập mô tả cho phòng trọ",
                    minlength: "Tối thiểu 15 kí tự"
                },
                money_deposit: {
                    required: "Vui lòng nhập số tiền cọc giữ phòng",
                    min: "Số tiền cọc giữ phòng tối thiểu là 50.000 vnđ",
                    max: "Số tiền cọc giữ phòng tối đa là 10.000.000 vnđ",
                    number: "Sai định dạng, vui lòng nhập lại giá cọc",

                },
                day_deposit: {
                    required: "Nhập số ngày giữ phòng",
                    min: "Số ngày giữ phòng tối thiểu là 1 ",
                    max: "Số ngày giữ phòng tối đa là 10",
                    number: "Sai định dạng, vui lòng nhập lại giá cọc",

                },
                // transfer_infor: {
                //     required: "Vui lòng nhập thông tin chuyển chuyển khoản",
                //     minlength: "Tối thiểu 15 kí tự"
                // },
                photo_gallery: {
                    required: "Vui lòng thêm ảnh mô tả phòng trọ"
                }
            },
        });
    });
</script>
@endsection