@extends('layouts.admin.main')


@section('title_page','Danh sách khu trọ')

@section('content')
    <div class="bg-white p-4 shadow-md rounded-4">
        <table class="table text-center user_datatable">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên khu trọ</th>
                <th>Địa chỉ</th>
                <th><a href="{{route('backend_get_create_area')}}" class="btn-link">Thêm mới</a></th>
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
                ajax: "{{ route('backend_get_list_area') }}",
                columns: [
                    {data: 'DT_RowIndex', searchable: false},
                    {data: 'name', name: 'name'},
                    {data: 'address', name: 'address'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            });
        });
    </script>
    {{--    {{$areas->links()}}--}}
@endsection
