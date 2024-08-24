@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Line chart</h4>
            <canvas id="lineChart"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Bar chart</h4>
            <canvas id="barChart"></canvas>
            </div>
        </div>
        </div>
    </div>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Area chart</h4>
          <canvas id="areaChart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Doughnut chart</h4>
          <div class="doughnutjs-wrapper d-flex justify-content-center">
            <canvas id="doughnutChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Pie chart</h4>
          <div class="doughnutjs-wrapper d-flex justify-content-center">
            <canvas id="pieChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Scatter chart</h4>
          <canvas id="scatterChart"></canvas>
        </div>
      </div>
    </div>
  </div>
@endsection       

