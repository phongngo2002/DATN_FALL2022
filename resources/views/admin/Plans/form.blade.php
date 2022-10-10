@extends('layouts.admin.main')

@section('title_page', 'Thêm mới gói dịch vụ')

@section('content')
    <script>
        tinymce.init({
            selector: 'textarea#editor',
        });
    </script>
    <form action="{{ route('admin.plans.store') }}" method="POST">
        <div class="container-fluid p-0">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        {{-- input name plans  --}}
                        <div class="header m-2">
                            <h5 class="card-title mb-0"> Tên gói dịch vụ (Name Plan)</h5>
                        </div>
                        <div class="body m-2">
                            <input type="text" name="name" class="form-control" placeholder="nhập tên của gói dịch vụ">
                        </div>
                        {{-- input name plans  --}}
                        {{-- ////// --}}
                        {{-- input description plans  --}}
                        <div class="header m-2">
                            <h5 class="card-title mb-0">Mô tả của gói dịch vụ (Description)</h5>
                        </div>
                        <div class="body m-2">
                            <textarea id="editor" name="desc" class="form-control" rows="2" placeholder="Mô tả của gói dịch vụ"></textarea>
                        </div>
                        {{-- input description plans  --}}

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        {{-- input priority lever plans  --}}
                        <div class="header m-2">
                            <h5 class="card-title mb-0"> Mức độ ưu tiên (Priority Level)</h5>
                        </div>
                        <div class="body m-2">
                            <select name="priority_level" class="form-select mb-1">
                                <option value="0" selected>Chọn mức ưu tiên cho gói dịch vụ</option>
                                <option value="1">lever 1</option>
                                <option value="2">lever 2</option>
                                <option value="3">lever 3</option>
                            </select>
                        </div>
                        {{-- input priority lever plans  --}}
                        {{-- ////// --}}
                        {{-- input type plans  --}}
                        <div class="header m-2">
                            <h5 class="card-title mb-0"> Loại của gói dịch vụ (type)</h5>
                        </div>

                        <div class="body m-2">
                            <select name="type" class="form-select mb-1">
                                <option selected value="0">Chọn loại dùng cho gói</option>
                                <option value="1">Tìm người thuê trọ</option>
                                <option value="2">Tìm người ở ghép</option>
                            </select>
                        </div>
                        {{-- input type plans  --}}
                        {{-- ////// --}}
                        {{-- input price plans  --}}
                        <div class="header m-2">
                            <h5 class="card-title mb-0">Giá của gói dịch vụ (Price)</h5>
                        </div>
                        <div class="body m-2">
                            <input name="price" type="text" class="form-control"
                                placeholder="Nhập giá của gói dịch vụ">
                        </div>
                        {{-- input price plans  --}}

                    </div>

                    <button ty class="btn btn-primary btn-block"> thêm </button>
                    <button class="btn btn-warning btn-block"> quay lại </button>
                </div>




    </form>

@endsection
