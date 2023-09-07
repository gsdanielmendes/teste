@extends('layouts.app')
 
@section('title', 'homepage')
 9
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <div id="container" style="width:100%; height:400px;">

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares in May, 2020',
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Chrome',
                        y: 70.67,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Edge',
                        y: 14.77
                    },  {
                        name: 'Firefox',
                        y: 4.86
                    }, {
                        name: 'Safari',
                        y: 2.63
                    }, {
                        name: 'Internet Explorer',
                        y: 1.53
                    },  {
                        name: 'Opera',
                        y: 1.40
                    }, {
                        name: 'Sogou Explorer',
                        y: 0.84
                    }, {
                        name: 'QQ',
                        y: 0.51
                    }, {
                        name: 'Other',
                        y: 2.6
                    }]
                }]
            });
        })
    </script>
@endsection
