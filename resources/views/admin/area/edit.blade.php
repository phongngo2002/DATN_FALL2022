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
    </script>
@endsection
