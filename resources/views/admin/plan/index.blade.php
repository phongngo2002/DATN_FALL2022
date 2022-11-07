@extends('layouts.admin.main')

@section('title_page', 'Quản lý các gói dịch vụ')

@section('content')
    <div class="bg-white shadow-lg p-4 rounded-4">
        <a href="{{ route('backend_admin_create_plans') }}" class="btn btn-primary my-2"><i
                class="fa-solid fa-folder-plus"></i> Thêm mới</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên gói</th>
                    <th>Độ ưu tiên</th>
                    <th>Loại gói</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $plan->name }}</td>
                        <td class="text-danger font-weight-bold">{{ $plan->priority_level }}</td>
                        <td>
                            @if ($plan->type)
                                <span class="badge bg-success p-2 text-xl">Gói đăng bài</span>
                            @else
                                <span class="badge bg-dange p-2 text-xl">Gói tìm ngưởi ờ ghép</span>
                            @endif
                        </td>
                        <td><span class="text-success mx-1">{{ $plan->price }}</span><i
                                class="fa-brands fa-bitcoin text-warning"></i></td>
                        <td>
                            @if ($plan->status)
                                <span class="text-success font-weight-bold">Hoạt động</span>
                            @else
                                <span class="text-warning font-weight-bold">Tạm dừng</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('backend_admin_edit_plans', ['id' => $plan->id]) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{ route('backend_admin_delete_plans', ['id' => $plan->id]) }}"
                                onclick="return confirm('Bạn có chăc muốn xóa gói dịch vụ này này')"
                                class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $plans->links() }}
    </div>
@endsection
