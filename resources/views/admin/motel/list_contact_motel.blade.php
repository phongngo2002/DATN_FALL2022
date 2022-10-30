@extends('layouts.admin.main')

@section('title_page', 'Danh sách người đăng ký ở ghép - Phòng 301')
@section('content')
    <div class="bg-white p-4 shadow-lg rounded-4 my-4">
        <table class="table text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Ngày đăng ký</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
               <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->phone_number}}</td>
                   <td>{{\Carbon\Carbon::parse($item->tg)->format('H:i d/m/Y')}}</td>
                   <td>
                       @if($item->tt == 0)
                           <span class="text-secondary font-weight-bold">Chờ xác nhận</span>
                       @elseif($item->tt == 1)
                           <span class="text-success font-weight-bold">Đồng ý</span>
                       @else
                           <span class="text-danger font-weight-bold">Không chấp nhận</span>
                       @endif
                   </td>
               </tr>
            @endforeach
            </tbody>
        </table>
        {{$list->links()}}
    </div>

@endsection
