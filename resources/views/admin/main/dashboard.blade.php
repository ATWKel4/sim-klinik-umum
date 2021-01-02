@extends('admin.main.layout')
@section('content')
@include('admin.main.header')
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Pasien</h6>
                    <h5 class="h3 mb-0">Data Total Pasien Dalam 7 Hari Terakhir</h5>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <!-- Chart -->
                            <div style="width: 100%">
                                {!! $usersChart->container() !!}
                            </div>
                            {!! $usersChart->script() !!}
                        </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Pendapatan</h6>
                    <h5 class="h3 mb-0">Pedapatan Dalam 7 Hari Terakhir</h5>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <!-- Chart -->
                            <div style="width: 100%">
                                {!! $pendapatanChart->container() !!}
                            </div>
                            {!! $pendapatanChart->script() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.main.footer')
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
@endsection