@extends('layouts.admin.main')


@section('title_page','Cập nhật phòng  '.$motel->room_number)

@section('content')
    <script>
        tinymce.init({
            selector: 'textarea#desc',
        });
    </script>
    <form action="{{route('saveUpdate_motel',['id' => $motel->motel_id,'area_id' => $motel->area_id])}}" method="POST"
          enctype="multipart/form-data" id="content">
        <div class="row">
            <div class="bg-white p-4 shadow-lg rounded-4 col-6">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-6">
                            <label for="">Mã phòng</label>
                            <input type="text" name="room_number" id="room_number" class="form-control"
                                   value="{{$motel->room_number}}">
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
                                <option
                                    value="Tất cả" {{json_decode($motel->services)->actor == 'Tất cả' ? 'selected' : ''}}>
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
                            <input type="text" value="{{json_decode($motel->services)->bedroom}}" name="bedroom"
                                   placeholder="Số phòng ngủ" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{json_decode($motel->services)->bed}}" name="bed"
                                   placeholder="Số giường" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{json_decode($motel->services)->toilet}}" name="toilet"
                                   id="toilet"
                                   placeholder="Nhà vệ sinh"
                                   class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label>Khác</label>
                    <input type="text" name="service_more"
                           value="{{json_decode($motel->services)->more}}" placeholder="Gần trường học,chợ..."
                           class="form-control">
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
                        <input type="text" value="{{$motel->video}}" class="form-control" name="video" id="video"
                               placeholder="Video link(youtube)">
                    </div>
                    <div class="mt-4">
                        <label for="">Ảnh 360</label>
                        <input type="text" value="{{$motel->image_360}}" name="image_360" id="image_360"
                               class="form-control"
                               placeholder="Đoạn code nhúng ảnh 360">
                        <p class="mt-2 ms-2 text-danger">Nếu bạn chưa biết cách sửa dụng ảnh 360.click vào <a
                                href="http://help.web60.vn/bai-viet/huong-dan-nhung-anh-360-do-len-website"
                                target="_blank">đây</a></p>
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
            reader.onloadend = function () {
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
                const {index} = item.dataset;

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
    <script>
    $("#content").validate({
        rules: {
            room_number: {
                required: true,
            },
            price: {
                required: true,
            },
            category_id: {
                required: true
            },
            area: {
                required: true,
            },
            "actor": {
                required: true,
            },
            "max_people": {
                required: true,
            },
            "toilet": {
                required: true,
            },
            "bedroom": {
                required: true,
            },
            "bed": {
                required: true,
            },
            "desc": {
                required: true,
                minlength: 20,
            },
            "video": {
                required: true,
            },
            "image360": {
                required: true,
            },
            "drag-drop-area": {
                required: true,
            }
        },
        messages: {
            "room_number": {
                required: 'Vui lòng chọn mã phòng !',
            },
            "price": {
                required: 'Vui lòng chọn giá !',
            },
            "category_id": {
                required: "Vui lòng chọn loại phòng !"
            },
            "area": {
                required: 'Vui lòng chọn diện tích !',
            },
            "actor": {
                required: 'Vui lòng chọn đối tượng thuê nhà !',
            },
            "max_people": {
                required: "Vui lòng chọn số người ở !"
            },
            video: {
                required: "Vui lòng chọn video !"
            },
            "bedroom": {
                required: "Vui lòng chọn số phòng ngủ !",
            },
            "toilet": {
                required: "Vui lòng chọn số nhà vệ sinh !",
            },
            "bed": {
                required: "Vui lòng chọn số giường !",
            },
            "desc": {
                required: "Vui lòng chọn mô tả !",
                minlength: "Mô tả phải trên 20 kí tự !"
            },
            "image360": {
                required: "Vui lòng nhúng ảnh !"
            },
            "drag-drop-area": {
                required: "Vui lòng chọn ảnh",
            }
        },
        submitHandler: function(form) {

            form.submit();

        }

    });
</script>
@endsection

