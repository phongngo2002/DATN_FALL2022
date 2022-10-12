@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
   <div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">Email</th>
                        <th>Avatar</th>
                        <th class="d-none d-md-table-cell">Roles</th>
                        <th class="text-center col-2">Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Apollo</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Fireball</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Hades</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Nitro</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-warning">In progress</span></td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Phoenix</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project X</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Romeo</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Christina Mason</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Wombat</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-warning">In progress</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded mx-1">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
