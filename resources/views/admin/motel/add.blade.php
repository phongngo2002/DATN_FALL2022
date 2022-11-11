@extends('layouts.admin.main')


@section('title_page','Thêm mới phòng trọ')

@section('content')
    <script>
        tinymce.init({
            selector: 'textarea#desc',
        });
    </script>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="bg-white p-4 shadow-lg rounded-4 col-6">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-6">
                            <label for="">Mã phòng</label>
                            <input type="text" name="room_number" id="room_number" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="">Giá cho thuê</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <label for="">Diện tích</label>
                            <input type="text" name="area" id="area" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Đối tượng thuê</label>
                            <select name="actor" id="actor" class="form-control">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Tất cả">Tất cả</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="">Số người ở tối đa</label>
                            <input type="text" name="max_people" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <label for="">Tiền điện (số)</label>
                            <input type="text" name="electric_money" id="electric_money" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Tiền nước</label>
                            <input type="text" name="electric_money" id="warter_money" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Tiền mạng</label>
                            <input type="text" name="wifi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="">Dịch vụ phòng</label>
                    <div class="row">
                        <div class="col-4">
                            <input type="number" name="bedroom" placeholder="Số phòng ngủ" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="number" name="bed" placeholder="Số giường" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="number" name="toilet" id="toilet" placeholder="Nhà vệ sinh"
                                   class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label>Khác</label>
                    <input type="text" name="service_more" placeholder="Gần trường học,chợ..." class="form-control">
                </div>
                <div class="mt-4">
                    <label for="">Mô tả</label>
                    <textarea name="description" id="desc" cols="30" rows="20" class="form-control"></textarea>
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
                        <input type="text" class="form-control" name="video" id="video"
                               placeholder="Video link(youtube)">
                    </div>
                    <div class="mt-4">
                        <label for="">Ảnh 360</label>
                        <input type="text" name="image_360" id="image_360" class="form-control"
                               placeholder="Đoạn code nhúng ảnh 360">
                        <p class="mt-2 ms-2 text-danger">Nếu bạn chưa biết cách sửa dụng ảnh 360.click vào <a
                                href="http://help.web60.vn/bai-viet/huong-dan-nhung-anh-360-do-len-website"
                                target="_blank">đây</a></p>
                    </div>
                </div>
                <div class="bg-white p-4 shadow-lg rounded-4">
                    <label for="photo" class="">Ảnh phòng trọ</label>
                    <input type="hidden" name="img">
                    <input type="file" multiple class="form-control" name="photo_gallery" id="photo_gallery">
                    <div class="preview mt-2" style="display: grid;grid-template-columns: repeat(4,1fr);gap: 8px;">

                    </div>
                </div>
                @csrf
            </div>
        </div>
        <button class="btn btn-primary mt-4">Thêm mới</button>
        <a href="{{route('admin.motel.list',['id' => $area_id])}}"
           class="btn btn-success mt-4">Quay lại</a>
    </form>
    <script>
        let arr = [];
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
@endsection

