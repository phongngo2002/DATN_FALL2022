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

<form id="plans_form" action="{{route('saveEdit_role')}}" method="POST">

    <div class="container-fluid p-0">
        
        @csrf
        <div class="row shadow p-3 mb-5 bg-white rounded ">
              
            <div class="col-12 col-lg-6">
                @foreach($roleDetail as $key)
                 <input type="hidden" name="id" value="{{$key->id}}">
                <div class="">
                    {{-- input name role --}}
                    <div class="header m-2 p-2">
                        <h5 class="card-title mb-0">
                            <label style="color: red" >*</label>
                            Tên quyền
                            @error('name')
                                <a class="  text-danger small ms-2">
                                    <i data-feather="alert-circle" class="mb-1"></i>
                                    {{ $message }} </a>
                            @enderror
                        </h5>

                    </div>
                    <div class="body m-2 p-2">
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nhập tên của quyền" value="{{ old('name') ?? $key->name }}">
                    </div>
                    {{-- input name roles  --}}
                    {{-- ////// --}}
                    {{-- input description roles --}}
                    <div class="header m-2 p-2">
                        <h5 class="card-title mb-0">
                            <label style="color: red" >*</label>
                            Mô tả của quyền
                            @error('desc')
                                <a class="text-danger small ms-2">
                                    <i data-feather="alert-circle" class="mb-1"></i>
                                    {{ $message }}
                                </a>
                            @enderror
                        </h5>
                    </div>
                    <div class="body m-2 p-2">
                        <textarea id="desc" name="desc" class="form-control" rows="2" placeholder="Mô tả của quyền">{{$key->desc}}</textarea>
                    </div>
                    {{-- input description plans  --}}
                    <div class="header m-2 p-2">
                        <h5 class="card-title mb-0">
                            Trạng thái
                        </h5>
                    </div>
                    <div class="body m-2 p-2">
                       <select name="status" id="" class="form-control">
                        <option value="0" {{old('status')==0|| $key->status==0?'selected':false}}>Chưa kích hoạt</option>
                        <option value="1" {{old('status')==1|| $key->status==1?'selected':false}}>Kích hoạt</option>
                       </select>
                    </div>
                </div>
               @endforeach
               
            </div>
           
        </div>
        <div class=" shadow p-3 mb-5 bg-white rounded ">
           {{-- checkbox permissions --}}
           <div class="m-2">
            <input id="selectAll" class="form-check-input " type="checkbox">&nbsp; <label class="form-check-label" for='selectAll'>  Chọn tất cả</label>
           </div>
           
          @foreach($all as $key) 
         <h3>{{$key['name']}}</h3>
          @foreach($key['permission'] as $item)
        <div class="m-2 mb-5 form-check form-check-inline ">
            <input class="form-check-input" type="checkbox" name="permission[]"  {{ in_array($item['id'],$permission_role) ? 'checked':"" }} id="" value="{{$item['id']}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$item['name']}}</label>  
        </div>
        @endforeach
        @endforeach
        
        <div class=" d-flex bd-highlight col-md-7 m-2 p-2">
            <button type="submit" class="btn btn-primary btn-block m-2"> Cập nhật </button>
            <a href="{{route('list_role')}}" class="btn btn-warning btn-block m-2"> Quay lại </a>
        </div>
 
        </div>
</form>
@include('layouts.admin._js')
{{-- validate jquery form plans --}}
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
    $("#plans_form").validate({
        rules: {
            "name": {
                required: true,
                minlength: 6
            },
            "desc": {
                required: true,
                min: 20
            }
        },
        messages: {
            "name": {
                required: 'Bắt buộc nhập tên quyền',
                minlength: 'Tối thiểu 6 ký tự',
            },
            "desc": {
                required: 'Bắt buộc nhập mô tả của quyền',
                min: 'nhập tối thiểu 20 ký tự'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>


@endsection