@extends('layouts.admin.main')


@section('title_page','Thêm mới khu trọ')

@section('content')

    <style>
        iframe {
            width: 100%;
        }
    </style>

    <form action="" method="POST" id="add_area">
        <div class="bg-white shadow-lg p-4">
            <div class="row">
                @csrf
                <div class="col-8">
                    <div class="my-2">
                        <label for="">Tên khu trọ</label>
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <label for="">Địa chỉ khu trọ</label>
                    <div class="form-group row">
                        <div class="col-4">
                            <select class="form-control" id="select_city"
                                    name="city_id">
                                <option value="">Lựa chọn thành phố</option>
                            </select>
                            @error('select_city')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-4">

                            <select class="form-control" id="district_id" name="district_id"
                            >
                                <option value="">Lựa chọn huyện</option>
                            </select>
                            @error('district_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-4">

                            <select class="form-control" name="ward_id" id="ward_id"
                            >
                                <option value="">Lựa chọn phường, xã</option>
                            </select>
                            @error('ward_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="">Địa chỉ chính xác</label>
                        <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address">
                        @error('address')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="my-2 row">
                        <div class="col-6">
                            <label for="">Latitude</label>
                            <input type="text" class="form-control" value="{{old('latitude')}}" name="latitude"
                                   id="latitude">
                            @error('latitude')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="">Longitude</label>
                            <input type="text" class="form-control" value="{{old('longitude')}}" name="longitude"
                                   id="longitude">
                            @error('longitude')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <p>Nếu bạn chưa biết lấy latitude và longitude.
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Tại dây</a></p>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hướng dẫn cách lấy latitude và
                                        longitude</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>B1. Truy cập vào địa chỉ: <a href="https://www.latlong.net/" target="_blank">www.latlong.net</a>
                                    </p>
                                    <p>B2. Thao tác như hình.</p>
                                    <img width="100%" src="https://hwp.com.vn/wp-content/uploads/2017/10/huong-dan-lay-toa-google-map.jpg" alt="">
                                    <p>Copy 2 thông số Latitude (Vĩ độ) & Longitude (Kinh độ) vào cấu hình bản đồ của website. Chúc bạn thực hiện thành công.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="">Link google map</label>
                        <input type="text" class="form-control" value="{{old('link_gg_map')}}" name="link_gg_map"
                               id="link_gg_map">
                        @error('link_gg_map')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="">Ảnh mô tả</label>
                        <div>
                            <img id="preview2"
                                 src="https://xaydungthuanphuoc.com/wp-content/uploads/2022/09/mau-phong-tro-co-gac-lung-dep2020-5.jpg"
                                 style="width: 100px;height: 100px" class="img-thumbnail my-1" alt="">
                        </div>
                        <input type="hidden" id="imgReal" name="imgReal">
                        <input type="file" name="img" class="form-control">
                        @error('imgReal')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-4" id="preview">

                </div>
            </div>
        </div>
        {{--        <div class="col-4" id="preview">--}}
        {{--            <iframe--}}
        {{--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814587!2d105.74459841533215!3d21.038132792833157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1665843530176!5m2!1svi!2s"--}}
        {{--                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"--}}
        {{--                referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
        {{--        </div>--}}
        <button class="btn btn-primary my-4">Thêm mới</button>
        <a class="btn btn-success my-4" href="{{route('backend_get_list_area')}}">Quay lại</a>
    </form>
    @section('custom_js')
        <script>
            $("#add_area").validate({
                rules: {
                    "name": {
                        required: true,
                    },
                    "city_id": {
                        required: true,
                    },
                    "district_id": {
                        required: true,
                    },
                    "ward_id": {
                        required: true,
                    },
                    "address": {
                        required: true,
                    },
                    "latitude": {
                        required: true,
                    },
                    "longitude": {
                        required: true,
                    },
                    "link_gg_map": {
                        required: true,
                    },
                    "imgReal": {
                        required: true,
                    },
                },
                messages: {
                    "name": {
                        required: 'Tên khu trọ bắt buộc nhập',
                    },
                    "city_id": {
                        required: 'Thành phố bắt buộc chọn',
                    },
                    "district_id": {
                        required: 'Quận huyện bắt buộc chọn',
                    },
                    "ward_id": {
                        required: 'Phường xã bắt buộc chọn',
                    },
                    "address": {
                        required: 'Địa chỉ chính xác bắt buộc nhập',
                    },
                    "latitude": {
                        required: 'Latitude bắt buộc nhập',
                    },
                    "longitude": {
                        required: 'Longitude bắt buộc nhập',
                    },
                    "link_gg_map": {
                        required: 'Link nhúng gg map bắt buộc nhập',
                    },
                    "imgReal": {
                        required: 'Ảnh đại diện khu trọ bắt buộc chọn',
                    },
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        </script>
        <script !src="">
            const divCity = document.getElementById('select_city');
            const divDistrict = document.getElementById('district_id');
            const divWard = document.getElementById('ward_id');
            $(function () {
                // $('select').selectpicker();

                // document.getElementById('link_gg_map').addEventListener('change', (e) => {
                //     document.getElementById('preview').innerHTML = e.target.value;
                // })
                document.getElementsByName('img')[0].addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    var reader = new FileReader();
                    reader.onloadend = function () {
                        document.getElementById('preview2').src = reader.result;
                        document.getElementById('imgReal').value = reader.result;
                    }
                    reader.readAsDataURL(file);
                })


                $.ajax({
                    url: "https://provinces.open-api.vn/api/p",
                    type: 'GET',
                    success: function (result) {
                        divCity.innerHTML +=
                            `${
                                result.map(item => `<option value="${item.code}">${item.name}</option>`).join('')
                            }`;
                    }
                });
                divCity.addEventListener('change', (e) => {
                    const id = e.target.value;
                    if (+id !== 0) {
                        $.ajax({
                            url: `https://provinces.open-api.vn/api/p/${id}/?depth=2`,
                            type: 'GET',
                            success: function (result) {
                                divDistrict.innerHTML = '<option value="">Lựa chọn huyện</option>' + result.districts.map(districtitem => `<option value="${districtitem.code}">${districtitem.name}</option>`).join('');

                            }
                        });
                    } else {
                        divDistrict.innerHTML = '<option value="">Bạn chưa chọn thành phố</option>';
                    }

                })
                divDistrict.addEventListener('change', (e) => {
                    const id = e.target.value;
                    if (+id !== 0) {
                        $.ajax({
                            url: `https://provinces.open-api.vn/api/d/${id}?depth=2`,
                            type: 'GET',
                            success: function (result) {
                                divWard.innerHTML = '<option value="">Lựa chọn phường xã</option>' + result.wards.map(wardItem => `<option value="${wardItem.code}">${wardItem.name}</option>`).join('');
                            }
                        });
                    } else {
                        divWard.innerHTML = '<option value="">Bạn chưa chọn quận huyện</option>';
                    }
                })
            });

        </script>
    @endsection

@endsection
