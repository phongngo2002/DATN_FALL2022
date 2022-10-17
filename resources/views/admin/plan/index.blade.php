@extends('layouts.admin.main')

@section('title_page', 'Quản lý các gói dịch vụ')

@section('content')
    <table class="table text-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên gói</th>
            <th>Độ ưu tiên</th>
            <th>Loại gói</th>
            <th>Thời hạn</th>
            <th>Giá</th>
            <th>Trạng thái</th>
            <th><a href="{{route('backend_admin_create_plans')}}" class="btn-link">Thêm mới</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($plans as $plan)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$plan->name}}</td>
                <td class="text-danger font-weight-bold">{{$plan->priority_level ? 'Cao nhất' : 'Bình thường'}}</td>
                <td>
                    @if($plan->type)
                        <span class="badge bg-success p-2 text-xl">Gói đăng bài</span>
                    @else
                        <span class="badge bg-dange p-2 text-xl">Gói tìm ngưởi ờ ghép</span>
                    @endif
                </td>
                <td>{{$plan->time}}</td>
                <td>{{$plan->price}}</td>
                <td>
                    @if($plan->status)
                        <span class="text-success font-weight-bold">Hoạt động</span>
                    @else
                        <span class="text-warning font-weight-bold">Tạm dừng</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('backend_admin_edit_plans',['id' => $plan->id])}}" class="btn btn-warning">Sửa</a>
                    <a href="{{route('backend_admin_delete_plans',['id' => $plan->id])}}"
                       onclick="return confirm('Bạn có chăc muốn xóa gói dịch vụ này này')"
                       class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$plans->links()}}
@endsection
