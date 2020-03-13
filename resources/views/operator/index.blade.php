@extends('layouts.base')

@section('contentHere')
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-info">
                        <div class="custom-title">Statistik Penduduk Desa Sumerta Kaja</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <span class="text-muted mb-5 d-inline-block"><i class="fa fa-male"></i> Jumlah Penduduk Laki-laki sebanyak :</span>
                            <strong>5</strong> Orang
                            <span class="text-muted mb-5 d-inline-block"><i class="fa fa-female"></i> Jumlah Penduduk Perempuan sebanyak :</span>
                            <strong>5</strong> Orang
                            <h4 class="mb-0">Total Penduduk :</h4>
                            <h2 class="text-muted">{{ (int)round($sumCount[4]->jumlahPenduduk) }} Orang</h2>
                            <ul class="list-unstyled mt-5">
                                <li class="text-muted">
                                    <i class="fa fa-clock-o pr-2"></i> Data from January
                                </li>
                                <li class="text-muted">
                                    <i class="fa fa-clock-o pr-2"></i> Last active in 12.01.2018
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-9">
                            <canvas id="dash3_sales_chart" height="250"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-danger">
                        <div class="custom-title">
                            Statistik Penduduk Setiap Banjar
                        </div>
                        <div class="custom-post-title">Jumlah Penduduk Setiap Banjar</div>
                    </div>
                </div>
                <div class="card-body pt-5 pb-4">
                    <div class="tab-content" id="pills-tabContent2">
                        <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel"
                            aria-labelledby="pills-today-tab">
                            <div class="row">
                                <div class="col-12 col-xl-7 col-md-6 text-center">
                                    <canvas id="doughnut_chart" class="mb-3 mt-5"></canvas>

                                </div>
                                <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                    <ul class="list-unstyled f12">
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2" style="color: #acf5fe"></i> {{ (int)round($sumCount[0]->jumlahPenduduk / $sumCount[4]->jumlahPenduduk * 100) }} %
                                            <span class="float-right">{{ $banjarObject[0] }}</span>
                                        </li>
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2" style="color: #f79490"></i> {{ (int)round($sumCount[1]->jumlahPenduduk / $sumCount[4]->jumlahPenduduk * 100) }} %
                                            <span class="float-right">{{ $banjarObject[1] }}</span>
                                        </li>
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2 " style="color: #f79490"></i> {{ (int)round($sumCount[2]->jumlahPenduduk / $sumCount[4]->jumlahPenduduk * 100) }}%
                                            <span class="float-right">{{ $banjarObject[2] }}</span>
                                        </li>
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> {{ (int)round($sumCount[3]->jumlahPenduduk / $sumCount[4]->jumlahPenduduk * 100) }}%
                                            <span class="float-right">{{ $banjarObject[3] }}</span>
                                        </li>
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2 " style="color: #5283C3"></i> -%
                                            <span class="float-right">{{ $banjarObject[4] }}</span>
                                        </li>
                                        <li class="list-widget-border mb-3 pb-3">
                                            <i class="fa fa-circle pr-2 " style="color: #8E62A9"></i> -%
                                            <span class="float-right">{{ $banjarObject[5] }}</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scriptPlace')
    <!-- Chart JS Init Statistik Penduduk Perempuan dan Laki laki -->
    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";

            var ctx = document.getElementById('dash3_sales_chart').getContext('2d');

            var myBarChart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: {!! $labelMale !!},
                    datasets: [{
                        label: "Penduduk Laki-Laki",
                        data: {!! $valueMale !!},
                        backgroundColor: '#18b9d4',
                        borderColor: '#18b9d4',
                        pointBorderColor: '#ffffff',
                        pointBackgroundColor: '#18b9d4',
                        pointBorderWidth: 2,
                        pointRadius: 4

                    }, {
                        label: "Penduduk Perempuan",
                        data: {!! $valueFemale !!},
                        backgroundColor: '#3d74f1',
                        borderColor: '#3d74f1',
                        pointBorderColor: '#ffffff',
                        pointBackgroundColor: '#3d74f1',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }]
                },

                // Configuration options go here
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },

                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                zeroLineColor: '#e7ecf0',
                                color: '#e7ecf0',
                                borderDash: [5,5,5],
                                zeroLineBorderDash: [5,5,5],
                                drawBorder: false
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                zeroLineColor: '#e7ecf0',
                                color: '#e7ecf0',
                                borderDash: [5,5,5],
                                zeroLineBorderDash: [5,5,5],
                                drawBorder: false
                            }
                        }]

                    },
                    elements: {
                        line: {
                            tension: 0.00001,
        //              tension: 0.4,
                            borderWidth: 1
                        },
                        point: {
                            radius: 2,
                            hitRadius: 10,
                            hoverRadius: 6,
                            borderWidth: 4
                        }
                    }
                }
            });
        });
    </script>
    <!-- ChartJS init statistik penduduk masing masing banjar -->
    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";

            // doughnut_chart
            var ctx = document.getElementById("doughnut_chart");
            var data = {
                labels: {!! $labelPendudukBanjar !!},
                datasets: [{
                    data: {!! $valuePendudukBanjar !!},
                    backgroundColor: [
                        "#acf5fe",
                        "#f79490",
                        "#fcdd82",
                        "#cae59b",
                        "#5283C3",
                        "#8E62A9"
                    ],
                    borderWidth: [
                        "0px",
                        "0px",
                        "0px",
                        "0px",
                        "0px",
                        "0px"
                    ],
                    borderColor: [
                        "#acf5fe",
                        "#f79490",
                        "#fcdd82",
                        "#cae59b",
                        "#5283C3",
                        "#8E62A9"
                    ]
                }]
            };

            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    legend: {
                        display: false
                    }
                }
            });

        });
    </script>

@endsection
