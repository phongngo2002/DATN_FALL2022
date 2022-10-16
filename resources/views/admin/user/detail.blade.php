@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Id :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->id ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Name :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->name ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Email :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->email ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Phone number :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->phone_number ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Avatar :
            </h5>
            <div class="col-sm-8 word_break">
                @if ($user->avatar == null)
                    {{"-"}}
                @else    
                    <img src="{{$user->avatar}}" alt="" width="100px">
                @endif
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Money :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->money ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Address :
            </h5>
            <div class="col-sm-8 word_break">
                {{$user->address ?? '-'}}
            </div>
        </div>
        <div class="form-group row" id="">
            <h5 for="" class="col-2 fw-bold" style="padding-top: 0px">
                Roles :
            </h5>
            <div class="col-sm-8 word_break">
                @if ($user->role_id)
                    @if ($user->role_id == 1)
                        {{"Admin"}}
                    @endif
                @else
                    {{'-'}}
                @endif
            </div>
        </div>
@endsection
