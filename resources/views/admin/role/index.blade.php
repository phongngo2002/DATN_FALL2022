@extends('layouts.admin.main')

@section('title_page', 'Quản lý quyền')

@section('content')

    <div class="row">
        <div class="col-12  d-flex">
            <div class="card flex-fill row">
                <div class="card-header">

                    <h5 class="card-title mb-0"> <a class="badge bg-success text-white ms-2"
                            href="{{ route('create_role') }}">Thêm mới </a></h5>

                </div>
                <table class="table table-hover my-0">
                    <thead>

                        <tr class="text-center">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th class="d-none d-md-table-cell" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody id="plans-table" style="text-align: center">
                        @foreach ($Role as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->desc}}</td>
                            <td><?php if ($item->status == 0) {echo 'Chưa kích hoạt';} else{ echo 'Đã kích hoạt';} ?></td>
                            <td class="d-none d-md-table-cell" colspan="2">
                                <a class="btn btn-info" href="{{route('edit_role',$item->id)}}">Cập nhật</a>
                                <a class="btn btn-danger" onclick="myFunction()" href="{{route('del_role',$item->id)}}">Xóa</a>
                            </td>
                          </tr>
                        @endforeach 



                     </tbody> 
                </table>
            </div>
        </div>
        
    </div>
    <script>
        function myFunction() {
          confirm("Bạn có chắc muốn xóa!");
        }
        </script>
@endsection