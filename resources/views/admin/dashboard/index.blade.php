@extends('layouts.admin.main')

@section('title_page', 'Thống kê')

@section('content')
    <div class="row">
        @if (\Illuminate\Support\Facades\Auth::user()->is_admin)
            <div class="col-xl-12 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng số người dùng</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $AdminCountUser }}</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            {{ $AdminCountUserIsOwnMotel }} </span>
                                        <span class="text-muted">Chủ trọ</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            {{ $AdminCountUserIsAdmin }} </span>
                                        <span class="text-muted">Quản trị viên</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng số khu trọ</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-house"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $AdminCountArea }}</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i></span>
                                        <span class="text-muted"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng phòng trọ</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-hotel"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $AdminCountMotel }}</h1>
                                    <div class="mb-0">
                                        <span class="text-success">{{ $AdminCountMotelActive }}</span>
                                        <span class="text-muted"> Phòng trọ đang hoạt động</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng gói dịch vụ</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mt-1 mb-3">{{ $AdminCountPlan }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-xl-12 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng số người dùng</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $AdminCountUser }}</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            {{ $OwnMotelCountUser }} </span>
                                        <span class="text-muted">Chủ trọ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng số khu trọ</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-house"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $OwnMotelCountArea }}</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i></span>
                                        <span class="text-muted"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng phòng trọ</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-hotel"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $OwnMotelCountMotel }}</h1>
                                    <div class="mb-0">
                                        <span class="text-success">{{ $AdminCountMotelActive }}</span>
                                        <span class="text-muted"> Phòng trọ đang hoạt động</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Tổng gói dịch vụ đã mua</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mt-1 mb-3">{{ $OwnMoteCountPlanBuyed }}</h4>
                                    <div class="mb-0">
                                        <span class="text-success">{{ $OwnMoteCountPlanBuyedActive }}</span>
                                        <span class="text-muted"> gói dịch vụ đang hoạt động</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <div id="chartContainer" class="col-6" style="height: 370px; width: 100%">
            <?php
            $dataPoints = [
                ['label' => 'Chưa thanh toán', 'y' => $OwnMotelCountNotBill/$OwnMotelCountBillSum * 100],
                ['label' => 'Đã thanh toán', 'y' => $OwnMotelCountBilled/$OwnMotelCountBillSum * 100],
                // array("label"=>"Residential", "y"=>13.9),
                // array("label"=>"Commercial", "y"=>7.8)
            ];
            ?>
        </div>
    </div>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2",
                animationEnabled: true,
                title: {
                    text: "Tổng tiền phòng trong tháng"
                },
                data: [{
                    type: "pie",
                    indexLabel: "{y}",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabelPlacement: "inside",
                    indexLabelFontColor: "#36454F",
                    indexLabelFontSize: 18,
                    indexLabelFontWeight: "bolder",
                    showInLegend: true,
                    legendText: "{label}",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
@endsection
@section('custom_js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Chrome", "Firefox", "IE"],
                    datasets: [{
                        data: [4306, 3801, 1689],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger
                        ],
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var markers = [{
                    coords: [31.230391, 121.473701],
                    name: "Shanghai"
                },
                {
                    coords: [28.704060, 77.102493],
                    name: "Delhi"
                },
                {
                    coords: [6.524379, 3.379206],
                    name: "Lagos"
                },
                {
                    coords: [35.689487, 139.691711],
                    name: "Tokyo"
                },
                {
                    coords: [23.129110, 113.264381],
                    name: "Guangzhou"
                },
                {
                    coords: [40.7127837, -74.0059413],
                    name: "New York"
                },
                {
                    coords: [34.052235, -118.243683],
                    name: "Los Angeles"
                },
                {
                    coords: [41.878113, -87.629799],
                    name: "Chicago"
                },
                {
                    coords: [51.507351, -0.127758],
                    name: "London"
                },
                {
                    coords: [40.416775, -3.703790],
                    name: "Madrid "
                }
            ];
            var map = new jsVectorMap({
                map: "world",
                selector: "#world_map",
                zoomButtons: true,
                markers: markers,
                markerStyle: {
                    initial: {
                        r: 9,
                        strokeWidth: 7,
                        stokeOpacity: .4,
                        fill: window.theme.primary
                    },
                    hover: {
                        fill: window.theme.primary,
                        stroke: window.theme.primary
                    }
                },
                zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>
    <script>
        window.history.pushState("", "", 'http://phong.ngo/admin/dashboard');
    </script>
@endsection
