@extends('layouts.admin.main')


@section('title_page','Thêm mới khu trọ')

@section('content')
<style>
    iframe {
        width: 100%;
    }
</style>

<form action="" method="POST" id="formAddArea">
    <div class="bg-white shadow-lg p-4">
        <div class="row">
            @csrf
            <div class="col-6">
                <div class="my-2">
                    <label for="">Tên khu trọ</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="my-2">
                    <label for="">Địa chỉ khu trọ</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="my-2">
                    <label for="">Link google map</label>
                    <input type="text" class="form-control" name="link_gg_map" id="link_gg_map">
                </div>
                <div class="my-2">
                    <label for="">Ảnh mô tả</label>
                    <div>
                        <img id="preview2" src="https://xaydungthuanphuoc.com/wp-content/uploads/2022/09/mau-phong-tro-co-gac-lung-dep2020-5.jpg" style="width: 100px;height: 100px" class="img-thumbnail my-1" alt="">
                    </div>
                    <input type="hidden" id="imgReal" name="imgReal">
                    <input type="file" name="img" class="form-control">
                </div>
            </div>
            <div class="col-6" id="preview">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814587!2d105.74459841533215!3d21.038132792833157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1665843530176!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <button class="btn btn-primary my-4">Thêm mới</button>
    <a class="btn btn-success my-4" href="{{route('backend_get_list_area')}}">Quay lại</a>
</form>
<script !src="">
    document.getElementById('link_gg_map').addEventListener('change', (e) => {
        document.getElementById('preview').innerHTML = e.target.value;
    })
    document.getElementsByName('img')[0].addEventListener('change', (e) => {
        const file = e.target.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('preview2').src = reader.result;
            document.getElementById('imgReal').value = reader.result;
        }
        reader.readAsDataURL(file);
    })

    $(document).ready(function() {

        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formAddArea").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 6
                },
                address: {
                    required: true,
                    minlength: 15
                },
                link_gg_map: {
                    required: true,
                },

                img: "required"
            },
            messages: {
                name: {
                    required: "Vui lòng nhập tên khu trọ",
                    minlength: "Tên khu trọ phải có ít nhất 6 kí tự"
                },
                address: {
                    required: "Vui lòng nhập địa chỉ cụ thể của khu trọ",
                    minlength: "Địa chỉ khu trọ phải có ít nhất 15 kí tự"
                },
                link_gg_map: "Vui lòng thêm link Google map cho khu trọ",
                img: {
                    required: "Vui lòng thêm ảnh mô tả"
                }
            }
        });
    });
</script>
@endsection