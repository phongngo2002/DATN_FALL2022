@extends('layouts.admin.main')

@section('title_page', 'Quản lý các gói dịch vụ')

@section('content')

    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects <a class="badge bg-success text-white ms-2"
                            href="{{ route('admin.plans.create') }}">Thêm mới </a></h5>

                </div>
                <table class="table table-hover my-0">
                    <thead>

                        <tr class="text-center">
                            <th>Tên</th>
                            <th class="d-none d-xl-table-cell">Mô tả</th>
                            <th class="d-none d-xl-table-cell">Mức ưu tiên</th>
                            <th>Loại</th>
                            <th class="d-none d-md-table-cell">Thời gian</th>
                            <th class="d-none d-md-table-cell">Giá cả</th>
                            <th class="d-none d-md-table-cell" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center display-block">
                        @foreach ($plans as $item)
                            <tr>
                                {{-- tên của dịch vụ --}}
                                <td>{{ $item->name }}</td>
                                {{-- tên của dịch vụ --}}

                                {{-- mô tả dịch vụ  --}}
                                <td>
                                    {!! $item->desc !!}
                                </td>
                                {{-- mô tả dịch vụ  --}}

                                {{-- mực độ ưu tiên của gói  --}}
                                <td>
                                    @if ($item->priority_level == 1)
                                        <span class="badge bg-success">lever 1</span>
                                    @elseif($item->priority_level == 2)
                                        <span class="badge bg-warning">lever 2</span>
                                    @elseif($item->priority_level == 3)
                                        <span class="badge bg-danger">lever 3 </span>
                                    @endif

                                </td>
                                {{-- mực độ ưu tiên của gói  --}}

                                {{-- phân loại gói dich vụ --}}
                                <td>
                                    @if ($item->type == 1)
                                        <span class="badge bg-secondary">thuê trọ</span>
                                    @elseif($item->type == 2)
                                        <span class="badge bg-secondary">tim ở ghép</span>
                                    @endif
                                </td>
                                {{-- phân loại gói dich vụ --}}

                                {{-- thời gian hiệu lực --}}
                                <td class="d-none d-xl-table-cell">{{ $item->time }} ngày</td>
                                {{-- end thời gian --}}

                                {{-- giá của dịch vụ --}}
                                <td class="d-none d-md-table-cell"> {{ number_format($item->price) }} vnđ</td>
                                {{--  end giá của dịch vụ --}}


                                {{-- button action --}}
                                <td>
                                    <a href="{{ route('admin.plans.edit', $item->id) }}"
                                        class=" text-white badge bg-success">
                                        cập nhật</a>
                                    <a type="submit" data-url="{{ route('admin.plans.destroy', $item->id) }}"
                                        class="text-white badge bg-danger delete_plans">xóa</a>


                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                                    {{-- sweet alert --}}
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.0/dist/sweetalert2.all.min.js"></script>
                                    {{-- sweet alert --}}

                                    <script>
                                        function delete_plans(event) {
                                            event.preventDefault();
                                            let url = $(this).data('url');

                                            swal.fire({
                                                title: 'Bạn có muốn xóa ?',
                                                text: "Bạn sẽ không thể khôi phục lại dữ liệu",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Tôi đồng ý!'
                                            }).then(function(result) {

                                                if (result.value) {
                                                    $.ajax({
                                                        type: "POST",
                                                        url: url,
                                                        data: {
                                                            _token: '{!! csrf_token() !!}',
                                                        },
                                                        dataType: "json",
                                                        success: function(data) {
                                                            Swal.fire({
                                                                title: 'Bạn có muốn xóa ?',
                                                                text: "Bạn sẽ không thể khôi phục lại dữ liệu",
                                                                icon: 'success',
                                                            }).then(function(result) {
                                                                window.location.reload();
                                                            })
                                                        },
                                                        error: function() {

                                                        }
                                                    })
                                                }
                                            });

                                        };


                                        $(function() {
                                            $('.delete_plans').on('click', delete_plans)
                                        })
                                    </script>
                                </td>

                                <script></script>
                                {{--  end button action --}}


                            </tr>
                        @endforeach



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
