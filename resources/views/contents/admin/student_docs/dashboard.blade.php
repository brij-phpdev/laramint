@extends('layouts.admin')


@section("content")


<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<div>
    <div class="card">
        <div class="card-header">
            <h3>@lang('Student Documents')</h3>
        </div>
    </div>
    <div class="row mt-4 mb-4">

        <div class="col-6">
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    
                    <div class="card">
                        <div class="col-12">
                            <div class="chart-container">
                                <div class="pie-chart-container">
                                    <canvas id="pie-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @if($total_applications > 0)
                    <div class="m-1">
                        <span class="badge badge-pill badge-default"> Total number of applicants {{ $total_applications }}</span>
                    </div>
                    @endif
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('department.index') }}" class="font-weight-bold text-gray-800 text-uppercase">
                        {{ __('Total Applications') }}
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    
                    <div class="card">

                            <div class="chart-container">
                                <div class="pie-chart-container">
                                    <canvas id="pie-chart-source"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    
                    <div class="card-footer text-center">
                    <a href="#" class="font-weight-bold text-gray-800 text-uppercase">
                        {{ __('Sources of the application') }}
                    </a>
                </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>




    </div>



</div>
</div>





<script>
$(function () {
    //get the pie chart canvas
    var cData = JSON.parse(`<?php echo $data['chart_data']; ?>`);
    var ctx = $("#pie-chart");

    //pie chart data
    var data = {
        labels: cData.label,
        datasets: [
            {
                label: "Users Count",
                data: cData.data,
                backgroundColor: [
                    "#A9A9A9",
                    "#DC143C",
                    "#2E8B57",
                    "#F4A460",
                    "#1D7A46",
                    "#CDA776",
                    "#DEB887",
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46",
                    "#F4A460",
                    "#CDA776",
                ],
                borderWidth: [1, 1, 1, 1, 1, 1, 1]
            }
        ]
    };

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Mobile/Email Registered",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Pie Chart class object
    var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
    });
});
</script>
<script>
$(function () {
        //get the pie chart canvas
        var csData = JSON.parse(`<?php echo $source_data['chart_data']; ?>`);
        var cstx = $("#pie-chart-source");

        //pie chart data
        var csdata = {
            labels: csData.label,
            datasets: [
                {
                    label: "Source Count",
                    data: csData.data,
                    backgroundColor: [

                        "#2E8B57",
                        "#F4A460",
                        "#1D7A46",
                        "#CDA776",
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                    ],
                    borderColor: [

                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                    ],
                    borderWidth: [1, 1, 1, 1, 1, 1, 1]
                }
            ]
        };

        //options
        var csoptions = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Registration Source",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create Pie Chart class object
        var chart2 = new Chart(cstx, {
            type: "pie",
            data: csdata,
            options: csoptions
        });

    });
</script>
@endsection