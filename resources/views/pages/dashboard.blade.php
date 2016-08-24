@extends('template.index')
@section('content')
<script type="text/javascript" src="js/Chart.min.js"></script>

<div id="widget" class="row">
    <div class="col-xs-6 col-md-3">
        <div class="widget widget-green">
            <div class="widget-header">
                {{"week income" | uppercase}}
            </div>
            <div class="widget-content">
                <div class="widget-icon left">
                    <i class="fa fa-money fa-2x"></i>

                </div>
                <div class="widget-value left">
                    <i class="fa fa-caret-up"></i>
                    {{1900 | currency}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="widget widget-red">
            <div class="widget-header">
                {{"week expend" | uppercase}}
            </div>
            <div class="widget-content">
                <div class="widget-icon left">
                    <i class="fa fa-money fa-2x"></i>
                </div>
                <div class="widget-value left">
                    <i class="fa fa-caret-down"></i>
                    {{900 | currency}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="widget widget-blue">
            <div class="widget-header">
                {{"Top Income Month" | uppercase}}
            </div>
            <div class="widget-content">
                <div class="widget-icon left">
                    <p>{{"Aug"}}</p>
                </div>
                <div class="widget-value left">
                    <i class="fa fa-caret-up"></i>
                    {{1900 | currency}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="widget widget-blue">
            <div class="widget-header">
                {{"Top Expend Month" | uppercase}}
            </div>
            <div class="widget-content">
                <div class="widget-icon left">
                    <p>{{"Aug"}}</p>
                </div>
                <div class="widget-value left">
                    <i class="fa fa-caret-down"></i>
                    {{900 | currency}}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="graph">
    <div class="row">
        <div class="col-xs-9 col-md-6">
            <div class="income-graph graph-box">
                <div class="graph-header">
                    {{"Monthly Income" | uppercase}}
                </div>
                <div class="graph-content">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>          
            </div>
        </div>
        <div class="col-xs-9 col-md-6">
            <div class="expend-graph graph-box">
                <div class="graph-header">
                    {{"Monthly Expend" | uppercase}}
                </div>
                <div class="graph-content">
                    <canvas id="myChart2" width="400" height="400"></canvas>
                </div>  
            </div>  
        </div>
    </div>
</div>

<script type="text/javascript" src="js/myChart.js"></script>  
@stop