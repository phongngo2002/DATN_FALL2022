@extends('layouts.admin.main')

@section('title_page', 'Thành viên phòng')
@section('content')
    <style>
        .select-box {
            position: relative;
            display: flex;
            width: 400px;
            flex-direction: column;
        }

        .select-box .options-container {
            background: #2f3640;
            color: #f5f6fa;
            max-height: 0;
            width: 100%;
            opacity: 0;
            transition: all 0.4s;
            border-radius: 8px;
            overflow: hidden;

            order: 1;
        }

        .selected {
            background: #2f3640;
            border-radius: 8px;
            margin-bottom: 8px;
            color: #f5f6fa;
            position: relative;

            order: 0;
        }

        .selected::after {
            content: "";
            background: url("img/arrow-down.svg");
            background-size: contain;
            background-repeat: no-repeat;

            position: absolute;
            height: 100%;
            width: 32px;
            right: 10px;
            top: 5px;

            transition: all 0.4s;
        }

        .select-box .options-container.active {
            max-height: 240px;
            opacity: 1;
            overflow-y: scroll;
            margin-top: 54px;
        }

        .select-box .options-container.active + .selected::after {
            transform: rotateX(180deg);
            top: -6px;
        }

        .select-box .options-container::-webkit-scrollbar {
            width: 8px;
            background: #0d141f;
            border-radius: 0 8px 8px 0;
        }

        .select-box .options-container::-webkit-scrollbar-thumb {
            background: #525861;
            border-radius: 0 8px 8px 0;
        }

        .select-box .option,
        .selected {
            padding: 12px 24px;
            cursor: pointer;
        }

        .select-box .option:hover {
            background: #414b57;
        }

        .select-box label {
            cursor: pointer;
        }

        .select-box .option .radio {
            display: none;
        }

        /* Searchbox */

        .search-box input {
            width: 100%;
            padding: 12px 16px;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            position: absolute;
            border-radius: 8px 8px 0 0;
            z-index: 100;
            border: 8px solid #2f3640;

            opacity: 0;
            pointer-events: none;
            transition: all 0.4s;
        }

        .search-box input:focus {
            outline: none;
        }

        .select-box .options-container.active ~ .search-box input {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Đóng</span>
            </button>
        </div>
    @endif
    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Đóng</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    <div class="bg-white p-4 shadow-lg rounded-4">
        <div class="mb-4">
            <button class="btn btn-success my-2" data-toggle="modal" data-target="#exampleModal">Thêm thành viên
            </button>
            @if(isset($info[0]->status) && $info[0]->status== 2)
                <button class="btn btn-primary" disabled>Đăng tin</button>
            @else
                <a href="{{route('admin.motel.post',['id' => $params['area_id'],'idMotel' => $params['motel_id']])}}"
                   class="btn btn-primary my-2">Đăng tin</a>
            @endif

            <a href="{{route('admin.motel.contact',['id' => $params['area_id'],'idMotel' => $params['motel_id']])}}"
               class="btn btn-info my-2">Danh sách người đăng ký ở ghép</a>
            <a href="{{route('admin.motel.history',['id' => $params['area_id'],'idMotel' => $params['motel_id']])}}"
               class="btn btn-secondary my-2">Lịch sử thuê phòng</a>
            @if(!\Illuminate\Support\Facades\DB::table('motels')->select('start_time')->where('id',$params['motel_id'])->first()->start_time)
                <button data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="btn btn-dark my-2">Xuất hóa đơn
                </button>
            @endif
            <a href="{{route('admin.motel.list_out_motel',['id' => $params['area_id'],'idMotel' => $params['motel_id']])}}"
               class="btn btn-danger position-relative">Yều cầu rời phòng
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
            </a>
        </div>
        <input type="hidden" value="{{$data}}" id="data">
        <table class="table text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Ngày bắt đầu thuê</th>
            </tr>
            </thead>
            <tbody>
            @foreach($info as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->phone_number}}</td>
                    <td>{{$a->start_time}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm mới thành viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="">Họ tên</label>
                        <input type="text" class="form-control" disabled id="name">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" class="form-control" disabled id="email">
                    </div>
                    <div>
                        <label for="">Số điện thoại</label>
                        <input type="text" class="form-control" disabled id="phone_number">
                    </div>
                    <div class="select-box my-4">
                        <div class="options-container">

                            @foreach($user as $i)
                                <div class="option">
                                    <input type="radio" class="radio" id="radio"
                                           value="{{$i->id}}"/>
                                    <label for="tutorials">{{$i->email}}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="selected">
                            Lựa chọn thành viên muốn thêm
                        </div>

                        <div class="search-box">
                            <input type="text" placeholder="Tìm kiếm..."/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <form
                        action="{{route('admin.motel.add_people',['id' => $params['area_id'] ,'idMotel' => $params['motel_id']])}}"
                        method="">
                        @csrf
                        <button class="btn btn-primary" name="user_id" id="user_id">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{route('admin.print.motel',['motelId' => $params['motel_id']])}}" method="POST" id="content">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xuất hóa hơn</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div>
                            <label>Thời gian bắt đầu thuê</label>
                            <input type="date" name="start_time" id="start_time"
                                   class="form-control">
                        </div>
                        <div class="my-4">
                            <label>Thời gian kết thúc hợp đồng</label>
                            <input type="date" name="end_time" id="end_time"
                                   class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Xuất hóa đơn</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const data = JSON.parse(document.getElementById('data').value);
        const selected = document.querySelector(".selected");
        const optionsContainer = document.querySelector(".options-container");
        const searchBox = document.querySelector(".search-box input");

        const optionsList = document.querySelectorAll(".option");

        selected.addEventListener("click", (e) => {
            optionsContainer.classList.toggle("active");

            searchBox.value = "";
            filterList("");

            if (optionsContainer.classList.contains("active")) {
                searchBox.focus();
            }
        });

        optionsList.forEach(o => {
            o.addEventListener("click", (e) => {
                const id = o.querySelector('input').value;

                const obj = data.find(item => item.id === +id);
                document.getElementById('user_id').value = id;
                document.getElementById('email').value = obj.email;
                document.getElementById('name').value = obj.name;
                document.getElementById('phone_number').value = obj.phone_number;
                selected.innerHTML = o.querySelector("label").innerHTML;
                optionsContainer.classList.remove("active");
            });
        });

        searchBox.addEventListener("keyup", function () {
            filterList(e.target.value);
        });

        const filterList = searchTerm => {
            searchTerm = searchTerm.toLowerCase();
            optionsList.forEach(option => {
                let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
                if (label.indexOf(searchTerm) != -1) {
                    option.style.display = "block";
                } else {
                    option.style.display = "none";
                }
            });
        };

        function handleChange(id) {
            console.log(id);
        }
    </script>
    <script>
        // $("#member").validate({
        //     rules:{
        //         radio:{
        //             required: true
        //         }
        //     },
        //     messages: {
        //         "radio": "Vui lòng chọn thành viên"
        //     }
        // })
        $("#content").validate({
            rules: {
                start_time: {
                    date: true,
                    required: true,
                },
                end_time: {
                    date: true,
                    required: true,
                },
            },
            messages: {
                "start_time": {
                    required: "Vui lòng chọn ngày bắt đầu",
                },
                "end_time": {
                    required: "Vui lòng chọn ngày kết thúc",
                },
            },
            submitHandler: function(form) {

                form.submit();

            }

        });
    </script>
@endsection
