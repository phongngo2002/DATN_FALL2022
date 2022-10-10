@extends('layouts.admin.main')

@section('title_page','Quản lý các gói dịch vụ')

@section('content')
    
    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects <a class="badge bg-success text-white ms-2" href="{{route('admin.plans.create')}}">Thêm mới </a></h5> 
                   
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        
                    <tr>
                        <th>Tên</th>
                        <th class="d-none d-xl-table-cell">Mô tả</th>
                        <th class="d-none d-xl-table-cell">Mức ưu tiên</th>
                        <th>Loại</th>
                        <th class="d-none d-md-table-cell">Thời gian</th>
                        <th class="d-none d-md-table-cell">Giá cả</th>
                        <th class="d-none d-md-table-cell" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        {{-- tên của dịch vụ --}}
                        <td>Project Apollo</td>
                        {{-- tên của dịch vụ --}}

                        {{-- mô tả dịch vụ  --}}
                         <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        {{-- mô tả dịch vụ  --}}

                        {{-- mực độ ưu tiên của gói  --}}
                        <td><span class="badge bg-success">lever 1 </span></td>
                        {{-- mực độ ưu tiên của gói  --}}

                           {{-- phân loại gói dich vụ --}}
                        <td><span class="badge bg-success">Vip 1</span></td>
                        {{-- phân loại gói dich vụ --}}

                        {{-- thời gian hiệu lực --}}
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        {{--end thời gian--}}

                        {{-- giá của dịch vụ --}}
                        <td class="d-none d-md-table-cell">90.000 vnđ</td>
                        {{--  end giá của dịch vụ --}}

                        
                        {{-- button action --}}
                        <td>
                        <a href="#" class="badge bg-success">cập nhật</a>
                        <a href="#" class="badge bg-danger">Xóa</a>
                       </td>
                       {{--  end button action --}}

                    </tr>

                    
                    <tr>
                        {{-- tên của dịch vụ --}}
                        <td>Project Apollo</td>
                        {{-- tên của dịch vụ --}}

                        {{-- mô tả dịch vụ  --}}
                         <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        {{-- mô tả dịch vụ  --}}

                        {{-- mực độ ưu tiên của gói  --}}
                        <td><span class="badge bg-warning">lever 2 </span></td>
                        {{-- mực độ ưu tiên của gói  --}}

                           {{-- phân loại gói dich vụ --}}
                        <td><span class="badge bg-warning">Vip 2</span></td>
                        {{-- phân loại gói dich vụ --}}

                        {{-- thời gian hiệu lực --}}
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        {{--end thời gian--}}

                        {{-- giá của dịch vụ --}}
                        <td class="d-none d-md-table-cell">100.000 vnđ</td>
                        {{--  end giá của dịch vụ --}}

                        
                        {{-- button action --}}
                        <td>
                        <a href="#" class="badge bg-success">cập nhật</a>
                        <a href="#" class="badge bg-danger">Xóa</a>
                       </td>
                       {{--  end button action --}}

                    </tr>
                  
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Monthly Sales</h5>
                </div>
                <div class="card-body d-flex w-100">
                    <div class="align-self-center chart chart-lg">
                        <canvas id="chartjs-dashboard-bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection