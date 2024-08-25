@extends('layouts.app')

@section('content')
    <div id="staff-cards" class="row p-4">
        <div class="col-12">
            <h1 class="MuiTypography-root text-center pb-2 MuiTypography-h1 ">Enable clients to book appointments on your website </h1>
        </div>
        <div class="col-md-12 d-flex justify-content-between p-4">

            
            <div class="col-lg-3 ">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Grow your business</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Let clients book 24/7 and turn your social media followers into customers.</span>
                </div>
            </div>

            <div class="col-lg-3 ">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Be in control of your calendar</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Decide how you want to accept appointment requests, manually or automatically.</span>
                </div>
            </div>

            <div class="col-lg-3 ">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Prevent no-shows</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Automatically collect deposits from clients when they book an appointment.</span>
                </div>
            </div>
            
        </div>
        <div class="col-lg-12 m-4 d-flex justify-content-center">
            <button class="btn btn-primary">Activate Online Booking</button>
           
        
        </div>
    </div>
@endsection       