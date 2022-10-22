@extends('layouts.admin.main')

@section('title_page', 'Quản lý quyền')

@section('content')

   <a class="btn btn-primary my-2 text-white ms-2" href="{{ route('create_role') }}">Thêm
            mới </a>
    <table class="table table-hover my-0">
        <thead>

        <tr class="text-center">
            <th>ID</th>
            <th>Tên</th>
            <th>Trạng thái</th>
            <th class="d-none d-md-table-cell" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody id="plans-table" style="text-align: center">
        @foreach ($Role as $item)
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>
                    @if(!$item->status)
                    <span class="text-danger font-weight-bold">Vô hiệu hóa</span>
                    @else
                      <span class="text-success font-weight-bold">Đã kích hoạt</span>
                    @endif</td>
                <td class="d-none d-md-table-cell" colspan="2">
                    <a class="btn btn-info" href="{{route('edit_role',$item->id)}}">Sửa</a>
                    <a class="btn btn-danger" onclick="myFunction()" href="{{route('del_role',$item->id)}}">Xóa</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
    <script>
        function myFunction() {
            confirm("Bạn có chắc muốn xóa!");
        }
    </script>
@endsection
