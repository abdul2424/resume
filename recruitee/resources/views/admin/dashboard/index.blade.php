@extends('admin.dashboard.layout')
@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title"> Dashboard </h2>
                </div>
            </div>
        </div>

        <div class="ecommerce-widget">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">Total Employers</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$totalEmployers}}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">Total Users</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$totalUsers}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">User vs Employer Ratio</h5>
                        <div class="card-body">
                            <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                            <div class="text-center m-t-40">
                                <span class="legend-item mr-3">
                                    <span class="fa-xs text-primary mr-1 legend-tile">
                                        <i class="fa fa-fw fa-square-full"></i>
                                    </span>
                                    <span class="legend-text">Users</span>
                                </span>
                                <span class="legend-item mr-3">
                                    <span class="fa-xs text-secondary mr-1 legend-tile">
                                        <i class="fa fa-fw fa-square-full"></i>
                                    </span>
                                    <span class="legend-text">Employers</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Daily Registrations</h5>
                        </div>
                        <div class="card-body">
                            <div class="ct-chart-product ct-golden-section"></div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-barlabels@1.0.0/dist/chartist-plugin-barlabels.min.js"></script>

<script>
    new Chartist.Pie('.ct-chart-category', {
        labels: ['Users', 'Employers'],
        series: [{{ $totalUsers }}, {{ $totalEmployers }}]
    }, {
        donut: true,
        donutWidth: 40,
        showLabel: true,
        labelInterpolationFnc: function(value, index) {
            const series = [{{ $totalUsers }}, {{ $totalEmployers }}];
            return value + ' (' + series[index] + ')';
        }
    });

    const userDates = {!! json_encode($userStats->pluck('date')->toArray()) !!};
    const employerDates = {!! json_encode($employerStats->pluck('date')->toArray()) !!};
    const allDates = [...new Set([...userDates, ...employerDates])].sort();
    const userStatsMap = {!! json_encode($userStats->keyBy('date')) !!};
    const employerStatsMap = {!! json_encode($employerStats->keyBy('date')) !!};

    const userSeries = allDates.map(date => userStatsMap[date]?.total || 0);
    const employerSeries = allDates.map(date => employerStatsMap[date]?.total || 0);

    new Chartist.Bar('.ct-chart-product', {
        labels: allDates,
        series: [userSeries, employerSeries]
    }, {
        seriesBarDistance: 10,
        axisY: {
            onlyInteger: true,
            offset: 20
        },
        height: '315px',
        plugins: [
            Chartist.plugins.ctBarLabels({
                position: {
                    x: (data) => data.x1 + 10,
                    y: (data) => data.y1 - 10
                },
                labelInterpolationFnc: function (value) {
                    return value;
                }
            })
        ]
    });
</script>
@endsection
