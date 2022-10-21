@extends('layouts.admin.main')

@section('title_page', 'Danh sách phòng trọ')

@section('content')
    <a href="{{route('admin.motel.create',['id' => $id])}}" class="btn btn-success my-2">Thêm mới</a>
    <div class="bg-white p-4 shadow-md rounded-4">
        <table class="table text-center user_datatable">
            <thead>
            <tr>
                <th>#</th>
                <th>Mã phòng</th>
                <th>Giá</th>
                <th>Số người ở tối đa</th>
                <th>Trạng thái</th>
                <th class="">Chức năng</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    @include('custom.datatable')
    <script type="text/javascript">
        $(function () {
            var table = $('.user_datatable').DataTable({
                serverSide: true,
                ajax: "{{ route('admin.motel.list',['id' => $id]) }}",
                columns: [
                    {data: 'DT_RowIndex', searchable: false},
                    {data: 'room_number', name: 'room_number'},
                    {data: 'price', name: 'price'},
                    {data: 'max_people', name: 'max_people'},
                    {data: 'tt_phong', name: 'tt_phong'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            });
        });
    </script>
@endsection
