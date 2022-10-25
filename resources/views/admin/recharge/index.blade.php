@extends('layouts.admin.main')


@section('title_page', 'Lịch sử nạp tiền')

@section('content')
    <form action="" class="my-4">
        <div class="row">
            <div class="col-4">
                <input class="form-control" name="name"
                    value="{{ isset($params['email']) && $params['email'] ? $params['email'] : '' }}"
                    placeholder="Tìm kiếm theo email">

            </div>
            <div class="col-2">
                <select class="form-control" name="order_by">
                    <option value="desc"
                        {{ isset($params['order_by']) && $params['order_by'] == 'desc' ? 'selected' : '' }}>
                        Sắp xếp mới nhất
                    </option>
                    <option value="asc"
                        {{ isset($params['order_by']) && $params['order_by'] == 'asc' ? 'selected' : '' }}>Sắp
                        xếp cũ nhất
                    </option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-control" name="limit">
                    <option value="" {{ !isset($params['limit']) ? 'selected' : '' }}>Số lượng bản ghi hiển thị
                    </option>
                    <option value="10" {{ isset($params['limit']) && $params['limit'] == '10' ? 'selected' : '' }}>10
                    </option>

                    <option value="25" {{ isset($params['limit']) && $params['limit'] == '25' ? 'selected' : '' }}>25
                    </option>
                    <option value="50" {{ isset($params['limit']) && $params['limit'] == '50' ? 'selected' : '' }}>50
                    </option>
                    <option value="100" {{ isset($params['limit']) && $params['limit'] == '100' ? 'selected' : '' }}>
                        100
                    </option>
                </select>
            </div>
            <div class="col-3 d-flex">
                <button class="btn btn-primary mr-2">Tìm kiếm</button>
                <a class="btn btn-danger" href="{{ route('backend_get_list_recharge') }}">Bỏ chọn</a>
            </div>
        </div>
    </form>
    <table class="table text-center">

        <tbody>
            <tr>
                <th>Mã giao dịch</th>
                <th>Email</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Phương thức</th>
                <th>Số tiền</th>
                <th>Trạng thái</th>
                <th>Ghi chú</th>
                <th>Thời gian</th>
            </tr>
            </thead>
        <tbody>
            @foreach ($recharges as $item)
                <tr>
                    <td>#{{ $item->recharge_code }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone_number ? $item->phone_number : 'Chưa cập nhật' }}</td>
                    <td>
                        @if ($item->payment_type)
                            <span class="text-success font-weight-bold">Chuyển khoán</span>
                        @elseif($item->payment_type == 2)
                            <span class="text-info font-weight-bold">Tiền mặt</span>
                        @endif
                    </td>
                    <td>{{ $item->value }}</td>
                    <td>
                        @if ($item->tt)
                            <span class="badge text-bg-success text-light p-2">Thành công</span>
                        @elseif($item->tt == 2)
                            <span class="badge text-bg-warning text-light p-2">Chờ xử lý</span>
                        @elseif($item->tt == 3)
                            <span class="badge text-bg-danger text-light p-2">Hoàn tiền</span>
                        @endif
                    </td>
                    <td>{{ $item->note }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach
            <<<<<<< HEAD>>>>>>> 0221aad (index)
                =======
                >>>>>>> 10fa816 (first commit)
        </tbody>
    </table>
    {{ $recharges->links() }}
@endsection
