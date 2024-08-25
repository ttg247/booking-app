@extends('layouts.app')

@section('content')
    <div id="staff-cards" class="row p-4">
        <div class="col-12">
            <h1 class="MuiTypography-root text-center pb-2 MuiTypography-h1 ">Staff management</h1>
        </div>
        
        <div class="col-md-12 d-flex py-4 justify-content-between">
            <div class="col-lg-3">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Multiple users/calendars</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Add new team members, each with their own calendars, working hours, and service offerings.</span>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Team management</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Maintain visibility into every appointment scheduled, every payment processed, and every client served.</span>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="MuiStack-root feature-container">
                    <div class="MuiBox-root feature-icon">
                        <img alt="" fetchpriority="high" width="37" height="37" decoding="async" data-nimg="1" src="/images/icon_calendar.png" style="color: transparent;">
                    </div>
                    <p class="MuiTypography-root MuiTypography-body1 feature-title">Team logins & permissions</p>
                    <span class="MuiTypography-root MuiTypography-body3 feature-details">Assign permissions to each team member so that they see everything they need to and nothing they don’t.</span>
                </div>
            </div>
        
        </div>
        <div class="col-lg-12 m-4 d-flex justify-content-center">
            <button class="btn btn-primary">Add staff</button>
           
        
        </div>
    </div>
@endsection       