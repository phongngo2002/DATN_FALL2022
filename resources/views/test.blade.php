@extends('layouts.admin.main')


@section('title_page','Thêm mới phòng trọ')

@section('content')
    <style>
        .img-thumbnail {
            width: 100%;
            height: 100px;
            object-fit: cover;
            object-position: center;
            margin: 10px;
        }

        @media (max-width: 480px) {
            .img-thumbnail {
                height: 50px;
            }
        }

        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow: auto;
        }

        .preview-images-zone > .preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }

        .preview-images-zone > .preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }

        .preview-images-zone > .preview-image > .image-zone {
            width: 100%;
            height: 100%;
        }

        .preview-images-zone > .preview-image > .image-zone > img {
            width: 100%;
            height: 100%;
        }

        .preview-images-zone > .preview-image > .tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }

        .preview-images-zone > .preview-image > .image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }

        .preview-image:hover > .image-zone {
            cursor: move;
            opacity: .5;
        }

        .preview-image:hover > .tools-edit-image,
        .preview-image:hover > .image-cancel {
            display: block;
        }

        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }

        .container {
            padding-top: 50px;
        }

        .image-cancel:hover {
            color: red;
        }
    </style>
    <form action="">
        <div class=" bg-white p-4 shadow-lg">
            <div>
                <label for="">Loại phòng trọ</label>
                <select name="" id="" class="form-control">
                    <option value="">Chọn loại phòng trọ</option>
                    <option value="">Căn hộ mini</option>
                    <option value="">Nhà trọ homestay</option>
                    <option value="">Nhà trọ tự quản lý</option>
                    <option value="">Nhà trọ chung chủ</option>
                </select>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-6">
                        <label for="">Mã phòng</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Giá cho thuê</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <label for="">Diện tích</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Đối tượng thuê</label>
                        <select name="" id="" class="form-control">
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                            <option value="">Tất cả</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="">Số người ở tối đa</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label for="">Mô tả ngắn</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mt-4">
                <label for="">Dịch vụ phòng</label>
                <div class="row">
                    <div class="col-4">
                        <input type="text" placeholder="Số phòng ngủ" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="text" placeholder="Số giường" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="text" placeholder="Nhà vệ sinh" class="form-control">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <label>Khác</label>
                <input type="text" placeholder="Gần trường học,chợ..." class="form-control">
            </div>
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

                <label for="photo" class="">Ảnh phòng trọ</label>
                {{--                        <input type="file" class="form-control" name="photo" id="photo" accept=".png, .jpg, .jpeg"--}}
                {{--                               onchange="readFile(this);" multiple>--}}
                {{--                        <div id="status"></div>--}}
                {{--                        <div id="photos" class="row mt-2"></div>--}}
                <fieldset class="form-group mt-2">
                    <a href="javascript:void(0)" onclick="$('#pro-image').click()">Tải ảnh lên</a>
                    <input type="file" id="pro-image" name="pro-image" style="display: none;"
                           class="form-control" multiple>
                </fieldset>
                <div class="preview-images-zone">
                </div>
            </div>
            <div class="mt-4">
                <label for="" class="">Video</label>
                <input type="text" class="form-control" placeholder="Video link(youtube)">
            </div>
            <div class="mt-4">
                <label for="">Ảnh 360</label>
                <input type="text" class="form-control" placeholder="Đoạn code nhúng ảnh 360">
                <p class="mt-2 ms-2 text-danger">Nếu bạn chưa biết cách sửa dụng ảnh 360.click vào <a
                        href="http://help.web60.vn/bai-viet/huong-dan-nhung-anh-360-do-len-website"
                        target="_blank">đây</a></p>
            </div>
        </div>

        <button class="btn btn-primary mt-4">Thêm mới</button>
        <a href="" class="btn btn-success mt-4">Quay lại</a>
    </form>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {
            document.getElementById('pro-image').addEventListener('change', readImage, false);

            $(".preview-images-zone").sortable();

            $(document).on('click', '.image-cancel', function () {
                let no = $(this).data('no');
                $(".preview-image.preview-show-" + no).remove();
            });
        });


        var num = 4;

        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;

                    var picReader = new FileReader();

                    picReader.addEventListener('load', function (event) {
                        var picFile = event.target;
                        var html = '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
                $("#pro-image").val('');
            } else {
                console.log('Browser not support');
            }
        }
    </script>
@endsection
