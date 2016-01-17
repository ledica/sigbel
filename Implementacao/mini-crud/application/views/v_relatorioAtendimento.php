<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- LINE CHART -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Peso</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
            </div>
            
        </div>
       
    </div><!-- /.box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Braços</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="lineChart2" style="height:250px"></canvas>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Coxas</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="lineChart3" style="height:250px"></canvas>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Pernas</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="lineChart4" style="height:250px"></canvas>
            </div>
             <div id="lineLegend">
            </div><!-- /.box-body -->
        </div><!-- /.box-body -->
    </div><!-- /.box -->
