@extends('layouts.admin.main')


@section('title_page','Cập nhật khu trọ')

@section('content')
    <style>
        iframe {
            width: 100%;
        }
    </style>

    <form action="" method="POST">
        <div class="bg-white shadow-lg p-4">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="my-2">
                        <label for="">Tên khu trọ</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$area->name}}">
                    </div>
                    <div class="my-2">
                        <label for="">Địa chỉ khu trọ</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$area->address}}">
                    </div>
                    <div class="my-2">
                        <label for="">Link google map</label>
                        <input type="text" class="form-control" name="link_gg_map" id="link_gg_map"
                               value="{{$area->link_gg_map}}">
                    </div>
                    <div class="my-2">
                        <label for="">Ảnh mô tả</label>
                        <div>
                            <img id="preview2"
                                 src="https://xaydungthuanphuoc.com/wp-content/uploads/2022/09/mau-phong-tro-co-gac-lung-dep2020-5.jpg"
                                 style="width: 100px;height: 100px" class="img-thumbnail my-1" alt="">
                        </div>
                        <input type="hidden" id="imgReal" name="imgReal" value="{{$area->img}}">
                        <input type="file" name="img" class="form-control">
                    </div>
                </div>
                <div class="col-6" id="preview">
                    {!! $area->link_gg_map !!}
                </div>
            </div>
        </div>

        <button class="btn btn-primary my-4">Lưu</button>
        <a class="btn btn-success my-4" href="{{route('backend_get_list_area')}}">Quay lại</a>
    </form>
    <script !src="">
        document.getElementById('link_gg_map').addEventListener('change', (e) => {
            document.getElementById('preview').innerHTML = e.target.value;
        })

        document.getElementsByName('img')[0].addEventListener('change', (e) => {
            const file = e.target.files[0];
            var reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('preview2').src = reader.result;
                document.getElementById('imgReal').value = reader.result;
            }
            reader.readAsDataURL(file);
        })
    </script>
@endsection
