@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
    <form action="" method="" enctype="multipart/form-data">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Name</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" placeholder="Input">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Email</h5>
                </div>
                <div class="card-body">
                    <input type="email" class="form-control" placeholder="Input">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Phone number</h5>
                </div>
                <div class="card-body">
                    <input type="number" class="form-control" placeholder="Input">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Avatar</h5>
                </div>
                <div class="card-body">
                    <input type="file" class="form-control" placeholder="Input">
                </div>
            </div>


            
        </div>
    </form>
@endsection
