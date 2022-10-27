@extends('layouts.client.main')

@section('content')
    <section class="pricing-table bg-white-2">
        <div class="container">
            <div class="section-title">
                <h2>Các gói dịch vụ</h2>
            </div>
            <div class="row">
                <!-- plan start -->
                @foreach ($plans as $item)
                    <div class="col-lg-3 col-md-6 col-xs-12 mt-5 ">
                        <div class="plan text-center {{ $item->price > 3500 ? 'featured no-mgb yes-mgb' : '' }}">
                            <span class="plan-name"> {{ $item->name }} <small> gói tháng</small></span>
                            <p class="plan-price">
                                <sup class="currency"></sup><strong>{{ $item->price }}</strong>
                                <sub>.<i class="fa-brands fa-bitcoin"></i></sub>
                            </p>
                            <ul class="list-unstyled">


                                <li>
                                    @if ($item->type)
                                        <span class="">Gói đăng bài</span>
                                    @else
                                        <span class="">Gói tìm ngưởi ờ ghép</span>
                                    @endif
                                </li>

                                <li>
                                    <span class="text-danger font-weight-bold"> Level: {{ $item->priority_level }}</span>
                                </li>

                                <li>
                                    @if ($item->status)
                                        <span class="text-success font-weight-bold">Hoạt động</span>
                                    @else
                                        <span class="text-warning font-weight-bold">Tạm dừng</span>
                                    @endif
                                </li>
                                <li>
                                    <span class="">{!! $item->desc !!}</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                @endforeach


                <!-- plan end -->

            </div>
            <div class="mt-4">
                {{ $plans->links() }}
            </div>
        </div>
    </section>
@endsection
