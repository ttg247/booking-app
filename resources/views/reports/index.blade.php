@extends('layouts.app')

@section('content')
    <div id="report-cards" class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <div class="MuiStack-root css-5uxyq9">
                <h1 class="MuiTypography-root MuiTypography-h1 report-week">Week to date</h1>
                <h1 class="MuiTypography-root MuiTypography-h1 report-total">NGN&nbsp;0</h1>
                <div class="MuiStack-root report-data-container">
                    <div class="MuiStack-root report-data-row">
                        <div class="MuiStack-root report-data-item-1">
                            <span class="MuiTypography-root MuiTypography-body3 report-data-item-heading">Total appointments</span>
                            <h3 class="MuiTypography-root MuiTypography-h3 report-data">0</h3>
                        </div>

                        <hr class="MuiDivider-root MuiDivider-fullWidth MuiDivider-vertical MuiDivider-flexItem report-data-divider-vertical">

                        <div class="MuiStack-root report-data-item-2">
                            <span class="MuiTypography-root MuiTypography-body3 report-data-item-heading">Booked online</span>
                            <h3 class="MuiTypography-root MuiTypography-h3 report-data">0</h3>
                        </div>
                    </div>

                    <hr class="MuiDivider-root MuiDivider-fullWidth report-data-divider-horizontal">

                    <div class="MuiStack-root report-data-row">
                        <div class="MuiStack-root report-data-item-1-a">
                            <span class="MuiTypography-root MuiTypography-body3 report-data-item-heading">Existing clients</span>
                            <h3 class="MuiTypography-root MuiTypography-h3 report-data">0</h3>
                        </div>
                        <hr class="MuiDivider-root MuiDivider-fullWidth MuiDivider-vertical MuiDivider-flexItem report-data-divider-vertical">
                        <div class="MuiStack-root report-data-item-2">
                            <span class="MuiTypography-root MuiTypography-body3 report-data-item-heading">New clients</span>
                            <h3 class="MuiTypography-root MuiTypography-h3 report-data">0</h3>
                        </div>
                    </div>
                </div>
                <div class="MuiStack-root css-1i43dhb">
                    <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root css-wizafj">
                        <button class="MuiButtonBase-root MuiCardActionArea-root css-1stx92l" tabindex="0" type="button">
                            <div class="MuiStack-root css-u4p24i">
                                <div class="MuiStack-root css-gh7u6a">
                                    <img alt="Appointments" loading="lazy" width="38" height="38" decoding="async" data-nimg="1" src="/images/reports/reports-appointments.png" style="color: transparent;">
                                </div>
                                <div class="MuiStack-root css-mbssy4">
                                    <h3 class="MuiTypography-root MuiTypography-h3 css-zm36g5">Appointments</h3>
                                    <span class="MuiTypography-root MuiTypography-body3 css-17qgj6v">See your revenue based on the amounts from appointments in the selected period.</span>
                                </div>
                                <div class="MuiStack-root css-gh7u6a">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1c3u61v" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span class="MuiCardActionArea-focusHighlight css-jo3ec3"></span>
                            <span class="MuiTouchRipple-root css-w0pj6f"></span>
                        </button>
                    </div>
                    <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root css-wizafj">
                        <button class="MuiButtonBase-root MuiCardActionArea-root css-1stx92l" tabindex="0" type="button">
                            <div class="MuiStack-root css-u4p24i">
                                <div class="MuiStack-root css-gh7u6a">
                                    <img alt="Clients" loading="lazy" width="38" height="38" decoding="async" data-nimg="1" src="/images/reports/reports-clients.png" style="color: transparent;">
                                </div>
                                <div class="MuiStack-root css-mbssy4">
                                    <h3 class="MuiTypography-root MuiTypography-h3 css-zm36g5">Clients</h3>
                                    <span class="MuiTypography-root MuiTypography-body3 css-17qgj6v">Discover how many new clients you have acquired and identify the best ones.</span>
                                </div>
                                <div class="MuiStack-root css-gh7u6a">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1c3u61v" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span class="MuiCardActionArea-focusHighlight css-jo3ec3"></span>
                            <span class="MuiTouchRipple-root css-w0pj6f"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection       