@extends('layouts.app')

@section('content')
    <div id="marketing-cards" class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <div class="MuiStack-root report-card-body py-2 my-4">
                <h1 class="MuiTypography-root MuiTypography-h1 report-total">Marketing Page</h1>
                
                <div class="MuiStack-root paper-holder">
                    <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root paper-container">
                        <a class="MuiStack-root paper-link" href="{{ route('reports-appointments') }}">
                            <button class="MuiButtonBase-root MuiCardActionArea-root paper-button" tabindex="0" type="button">
                                <div class="MuiStack-root paper-row">
                                    <div class="MuiStack-root paper-icon">
                                        <img alt="Appointments" loading="lazy" width="38" height="38" decoding="async" data-nimg="1" src="/images/reports/reports-appointments.png" style="color: transparent;">
                                    </div>
                                    <div class="MuiStack-root paper-details">
                                        <h3 class="MuiTypography-root MuiTypography-h3 paper-header">Social Media Post Generator</h3>
                                        <span class="MuiTypography-root MuiTypography-body3 paper-info">Instantly generate and share high-quality social media posts using AI-driven captions with direct Facebook and Instagram integration.</span>
                                    </div>
                                    <div class="MuiStack-root paper-icon">
                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium paper-svg" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                            <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <span class="MuiCardActionArea-focusHighlight report-container-focus-highlight"></span>
                                <span class="MuiTouchRipple-root report-link"></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection       