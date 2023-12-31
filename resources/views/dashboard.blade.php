@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <!-- top tiles -->
    <div class="row m-auto" style="display: inline-block;" >
        <div class="tile_count">
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> Total Students</span>
            <div class="count green">{{$totalStudents}}</div>
          </div>
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> Absent Today</span>
            <div class="count red">{{$totalAbsent}}</div>
          </div>
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> On Leave Today</span>
            <div class="count blue">{{$totalLeave}}</div>
          </div>
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> Late Commers</span>
            <div class="count red">{{$totalLate}}</div>
          </div>
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> Incomplete Uniform</span>
            <div class="count red">{{$totalIncompleteUniform}}</div>
          </div>
          <div class="col-md-4 col-sm-4 tile_stats_count" style="width: 385px">
            <span class="count_top"> Late + Incomplete Uniform</span>
            <div class="count red">{{$totalLateIncompleteUniform}}</div>
          </div>
        </div>
    </div>
      <!-- /top tiles -->

    {{-- <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>App Versions</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h4>App Usage across versions</h4>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.2</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>123k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.3</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>53k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.4</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>23k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.5</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>3k</span>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget_summary">
                <div class="w_left w_25">
                  <span>0.1.5.6</span>
                </div>
                <div class="w_center w_55">
                  <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="w_right w_20">
                  <span>1k</span>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}
@stop