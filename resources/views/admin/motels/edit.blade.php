@extends('layouts.admin.main')


@section('title_page','Cập nhật phòng trọ')

@section('content')
    <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">

    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
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
                            <input type="hidden" name="idArea" value="{{$motel->area_id}}">
                            <input type="hidden" name="id" value="{{ $motel->motel_id }}" id="id">
                            <label for="">Mã phòng</label>
                            <input type="text" name="room_number" id="room_number" value="{{ $motel->room_number }}"
                                   class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="">Giá cho thuê</label>
                            <input type="text" name="price" value="{{ $motel->price }}" id="price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <label for="">Diện tích</label>
                            <input type="text" name="area" value="{{ $motel->area }} " id="area" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Đối tượng thuê</label>

                            <select name="actor" id="actor" class="form-control">
                                <option
                                    {{old('actor')=='Nam'|| $services['actor']=='Nam'?'selected':false}} value="Nam">Nam
                                </option>
                                <option {{old('actor')=='Nữ'|| $services['actor']=='Nữ'?'selected':false}} value="Nữ">
                                    Nữ
                                </option>
                                <option
                                    {{old('actor')=='Tất cả'|| $services['actor']=='Tất cả'?'selected':false}}   value="Tất cả">
                                    Tất cả
                                </option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="">Số người ở tối đa</label>
                            <input type="text" name="max_people" value="{{ $motel->max_people }} " class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="">Dịch vụ phòng</label>
                    <div class="row">

                        <div class="col-4">
                            <input type="text" value="{{ $services['bedroom'] }}" name="bedroom"
                                   placeholder="Số phòng ngủ" class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="number" value="{{$services['bed']}}" name="bed" placeholder="Số giường"
                                   class="form-control">
                        </div>
                        <div class="col-4">
                            <input type="number" value="{{$services['toilet']}}" name="toilet" id="toilet"
                                   placeholder="Nhà vệ sinh"
                                   class="form-control">
                        </div>

                    </div>
                </div>
                <div class="mt-4">
                    <label>Khác</label>
                    <input type="text" name="service_more" value="{{$services['more']}}"
                           placeholder="Gần trường học,chợ..." class="form-control">
                </div>
                <div class="myt-4">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" readonly name="areaName" id="areaName"
                           value="{{ $motel->areaName }}">
                </div>
                <div class="mt-4">
                    <label for="">Loại phòng</label>

                    <select name="category_id" id="" class="form-control">
                        @forEach($categories as $key )
                            <option
                                {{old('category_id')==$key->id|| $key->id==$motel->category_id?'selected':false}}  value="{{$key->id}}">{{$key->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mt-4">
                    <label for="">Mô tả</label>
                    <textarea name="description" id="desc" cols="30" rows="20"
                              class="form-control">{{$motel->description}}</textarea>
                </div>
                <div class="mt-4">
                    <label for="">Thư viện ảnh</label>
                    <div class="row" id="photo_preview">
                        @foreach (json_decode($photo_gallery) as $key => $value)
                            <div class="col-4 mt-1" style="position: relative;">
                                <a href="{{ $value }}" class="image-popup">
                                    <img src="{{ $value }}" class="img-thumbnail"/></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4">
                    <label for="">Thời gian bắt đầu</label>
                    <input type="datetime-local" class="form-control" name="start_time" id="start_time"
                           value="{{ $motel->start_time }}" readonly>
                </div>
                <div class="m4-4">
                    <label for="">Thời gian kết thúc</label>
                    <input type="datetime-local" class="form-control" name="end_time" id="end_time"
                           value="{{ $motel->end_time}}" readonly>
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
                        <input type="hidden" id="img" name="img">
                        <label for="">Link video Youtebe</label>
                        <input type="text" class="form-control" name="video" value="{{$motel->video}}" id="video"
                               placeholder="Video link(youtube)">
                    </div>

                    <div class="mt-4">
                        <label for="">Ảnh 360</label>
                        <input type="text" name="image360" value="{{$motel->image_360}}" id="image360"
                               class="form-control"
                               placeholder="Đoạn code nhúng ảnh 360">
                        <p class="mt-2 ms-2 text-danger">Nếu bạn chưa biết cách sửa dụng ảnh 360.click vào <a
                                href="http://help.web60.vn/bai-viet/huong-dan-nhung-anh-360-do-len-website"
                                target="_blank">đây</a></p>
                    </div>
                </div>

                <div class="bg-white p-4 shadow-lg rounded-4">
                    <label for="photo" class="">Ảnh phòng trọ</label>
                    <div id="drag-drop-area"></div>
                </div>

                @csrf
            </div>
        </div>

        <a href="" class="btn btn-success mt-4">Quay lại</a>
        <button class="btn btn-primary mt-4">Cập nhật</button>
    </form>
    <script>
        var uppy = Uppy.Core()
            .use(Uppy.Dashboard, {
                inline: true,
                target: '#drag-drop-area'
            })
            .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'}) //you can put upload URL here, where you want to upload images
        uppy.on('complete', (result) => {
            let data = [];
            result.successful.forEach(item => {
                data.push(item.response.uploadURL);
            })
            document.getElementById('img').value = JSON.stringify(data);
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
        })
    </script>
@endsection
