@extends('layouts.app')

@section('content')
    <div id="report-cards" class="row p-4">
        <div class="col-md-12 ">
            <div class="css-1anid1y css-rtmhpw css-1se56n7">
                <div class="data-component-container">                            
                    <ul class="nav data-component nav-pills d-flex justify-content-between" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="day-tab" data-bs-toggle="tab" data-bs-target="#day" type="button" role="tab" aria-controls="day" aria-selected="true">Day</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week" type="button" role="tab" aria-controls="week" aria-selected="false">Week</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab" aria-controls="month" aria-selected="false">Month</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="year-tab" data-bs-toggle="tab" data-bs-target="#year" type="button" role="tab" aria-controls="year" aria-selected="false">Year</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content p-4" id="myTabContent">
                <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab">
                    
                    <div class="row">
                        <div class="col-lg-6"></div>

                        
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Total Appointments</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Booked Online</p>
                                            <p class="fs-30 mb-2">61344</p>
                                            <p>22.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">No-shows</p>
                                            <p class="fs-30 mb-2">34040</p>
                                            <p>2.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Cancellations</p>
                                            <p class="fs-30 mb-2">47033</p>
                                            <p>0.22% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab">...</div>
                <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab">...</div>
                <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab">...</div>
            </div>    
        </div>
    </div>
@endsection       
