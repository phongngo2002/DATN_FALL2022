@extends('layouts.admin.main')

@section('title_page',$_title)

@section('content')

<script>
    tinymce.init({
        selector: 'textarea#desc',
    });
</script>
<style>
    .error {
        color: red !important;
        margin-top: 4px;
        padding: 3px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<form id="plans_form" action="{{route('saveAdd_role')}}" method="POST">
    @csrf
    <div class="bg-white shadow-lg rounded-4 p-4">
        {{-- input name role --}}
        <div class="header m-2 p-2">
            <h5 class="card-title mb-0">
                <label style="color: red">*</label>
                Tên quyền
            </h5>

        </div>
        <div class="body m-2 p-2">
            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên của quyền" value="{{ old('name') }}">
        </div>
        {{-- input name roles  --}}
        {{-- ////// --}}
        {{-- input description roles --}}
        <div class="header m-2 p-2">
            <h5 class="card-title mb-0">
            <label style="color: red">*</label>
                Mô tả quyền
                @error('desc')
                <a class="text-danger small ms-2">
                    <i data-feather="alert-circle" class="mb-1"></i>
                    {{ $message }} </a>
                @enderror
            </h5>
        </div>
        <div class="body m-2 p-2">
            <textarea id="desc" name="desc" class="form-control" rows="2" placeholder="Mô tả của quyền"></textarea>
        </div>
        {{-- input description plans  --}}
        <div class="header m-2 p-2">
            <h5 class="card-title mb-0">
                <label style="color: red">*</label>
                Trạng thái
                @error('status')
                <a class="  text-danger small ms-2">
                    <i data-feather="alert-circle" class="mb-1"></i>
                    {{ $message }} </a>
                @enderror
            </h5>
        </div>
        <div class="body m-2 p-2">
            <select name="status" class="form-control">
                <option value="">Chọn</option>
                <option value="0">Chưa kích hoạt</option>
                <option value="1">Kích hoạt</option>
            </select>
        </div>
        <div class="ms-4 my-4">
            <input id="selectAll" class="form-check-input " type="checkbox">&nbsp; <label class="form-check-label" name="selectAll" for='selectAll'> Chọn tất cả</label>
        </div>
        <div id="error-message" style="color: red;"></div> <br> {{-- nhớ style cho thẻ thông báo lỗi  --}}
        @foreach($all as $key)
        <p class="font-weight-bold">{{$key['name']}}</p>
        @foreach($key['permission'] as $item)
        <div class="m-2 mb-5 form-check form-check-inline ">
            <input class="form-check-input" type="checkbox" name="permission[]" id="" value="{{$item['id']}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$item['name']}}</label>
        </div>
        @endforeach
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary my-2" onclick="onHandleAddNew()">Thêm mới</button>
    <a href="{{route('list_role')}}" class="btn btn-warning my-2">Quay lại</a>
</form>

@include('layouts.admin._js')
{{-- validate jquery form plans --}}
<script>
    $("#plans_form").validate({
        rules: {
            "name": {
                required: true,
                minlength: 6
            },
            "desc": {
                required: true,
                min: 20
            },
            "status": {
                required: true,
            },
        },
        messages: {
            "name": {
                required: 'Bắt buộc nhập tên quyền',
                minlength: 'Tối thiểu 6 ký tự',
            },
            "desc": {
                required: 'Bắt buộc nhập mô tả của quyền',
                min: 'nhập tối thiểu 20 ký tự'
            },
            "status": {
                required: "Chọn trạng thái"
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    function onHandleAddNew() {
        const errorMessage = document.getElementById('error-message')
        const checkboxInput = document.getElementsByClassName('form-check-input')

        for (let i = 0; i < checkboxInput.length; i++) {
            if (checkboxInput[i].checked) {
                errorMessage.innerText = ''
                break
            }
            errorMessage.innerText = 'Vui lòng chọn tất cả hoặc chọn một trong các ô'
        }
    }
</script>
<script>
    $("#selectAll").click(function() {
        $("input[type=checkbox]").prop("checked", $(this).prop("checked"));
    });

    $("input[type=checkbox]").click(function() {
        if (!$(this).prop("checked")) {
            $("#selectAll").prop("checked", false);
        }
    });

    jackHarnerSig();
</script>

@endsection