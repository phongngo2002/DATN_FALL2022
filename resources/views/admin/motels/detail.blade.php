@extends('layouts.admin.main')


@section('title_page', 'Chi tiết phòng trọ')

@section('content')
    <form action="" method="POST">
        <div class="bg-white shadow-lg p-4">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="my-2">
                        <label for="">Số phòng</label>
                        <input type="text" class="form-control" name="room_number" id="room_number"
                            value="{{ $motel->room_number }}">
                    </div>
                    <div class="my-2">
                        <label for="">Giá</label>
                        <input type="text" class="form-control" name="price" id="price"
                            value="{{ $motel->price }}">
                    </div>
                    <div class="my-2">
                        <label for="">Diện tích</label>
                        <input type="text" class="form-control" name="area" id="area"
                            value="{{ $motel->area }}">
                    </div>
                    <div class="my-2">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" name="area" id="area"
                            value="{{ $motel->areaName }}">
                    </div>
                    <div class="my-2">
                        <label for="">Mô tả</label>
                        <textarea type="text" class="form-control" rows="20" name="description" id="description">{{ $motel->description }}</textarea>
                    </div>


                </div>
                <div class="col-6" id="preview">
                    <div class="my-2">
                        <label for="">Ảnh 360</label><br>
                        <a href="{{ $motel->image_360 }}" class="image-popup">
                            <img src="{{ $motel->image_360 }}"width="400px" alt="">
                        </a>
                    </div>
                    <div class="my-2">
                        <label for="">Thư viện ảnh</label>
                        <div class="row" id="photo_preview">
                            @foreach (json_decode($motel->photo_gallery) as $key => $value)
                                <div class="col-4 mt-1" style="position: relative;">
                                    <a href="{{ $value }}" class="image-popup">
                                        <img src="{{ $value }}" class="img-thumbnail" /></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="">Khu trọ</label>
                        <input type="text" class="form-control" name="area" id="area"
                            value="{{ $motel->categoryName }}">
                    </div>
                    <div class="my-2">
                        <label for="">Dịch vụ</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $motel->services }}">
                    </div>
                    <div class="my-2">
                        <label for="">Tình trạng</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $motel->status }}">
                    </div>
                    <div class="my-2">
                        <label for="">Số người</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $motel->max_people }}">
                    </div>
                    <div class="my-2">
                        <label for="">Thời gian bắt đầu</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $motel->start_time }}">
                    </div>
                    <div class="my-2">
                        <label for="">Thời gian kết thúc</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $motel->end_time }}">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-success my-4" href="{{ route("admin.motel.list", $motel->area_id) }}">Quay lại</a>
    </form>
    <script>
        var siteMagnificPopup = function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    fixedContentPos: true,
                    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        verticalFit: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300 // don't foget to change the duration also in CSS
                    }
                });
    </script>
@endsection
