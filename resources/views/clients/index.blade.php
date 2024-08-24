@extends('layouts.app')

@section('content')
   <div class="row">
        <div class="col-auto">
            <button type="button" class="btn" data-toggle="modal" data-target=".modal-calendar"><span class="fa fa-filter fe-16 text-muted"></span></button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customerModal"><span class="fa fa-plus fe-16 mr-3"></span>New Customer</button>
        </div>
   </div>
    <div id="contact-cards" class="row">

        <div class="col-md-3 mt-4 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <img class="contact-profile" src="{{ asset('images/faces/face28.jpg') }}" alt="profile" />
                    <p class="mt-2">Theo Georgewill</p>
                    <p class="">Phone</p>
                    <p>Email</p>
                </div>
            </div>
        </div>
    </div>
    <!-- new customer modal -->
    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyModalLabel">New customer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-4">
              <form>
                <div class="form-group">
                  <label for="customerTitle" class="col-form-label">Title</label>
                  <input type="text" class="form-control" id="customerTitle" placeholder="Add customer title">
                </div>
                <div class="form-group">
                  <label for="customerNote" class="col-form-label">Note</label>
                  <textarea class="form-control" id="customerNote" placeholder="Add some note for your customer"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="customerType">customer type</label>
                    <select id="customerType" class="form-control select2">
                      <option value="work">Work</option>
                      <option value="home">Home</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="date-input1">Start Date</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                      </div>
                      <input type="text" class="form-control drgpicker" id="drgpicker-start" value="04/24/2020">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="startDate">Start Time</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
                      </div>
                      <input type="text" class="form-control time-input" id="start-time" placeholder="10:00 AM">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="date-input1">End Date</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                      </div>
                      <input type="text" class="form-control drgpicker" id="drgpicker-end" value="04/24/2020">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="startDate">End Time</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
                      </div>
                      <input type="text" class="form-control time-input" id="end-time" placeholder="11:00 AM">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-between">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="RepeatSwitch" checked>
                <label class="custom-control-label" for="RepeatSwitch">All day</label>
              </div>
              <button type="button" class="btn mb-2 btn-primary">Save customer</button>
            </div>
          </div>
        </div>
    </div> <!-- new customer modal -->
@endsection       