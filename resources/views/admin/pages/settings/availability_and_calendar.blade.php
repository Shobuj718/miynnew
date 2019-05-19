@extends('admin.master')

@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Settings/ Availability & Calendar</h5>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('main_content')

<div class="row">
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h4>Calendar, Business Hours and Availability</h4>
            </div>
            <div class="card-block">
                <form>
	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Time Zone</label>
	                    <div class="col-sm-10">
	                        <select name="select" class="form-control">
	                            <option value="GMT + 06:00">(GMT + 06:00) Dhaka</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Local Time</label>
	                    <div class="col-sm-10">
	                        <label>
                                <input type="checkbox" value="">
                                <span class="cr">
                                 <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span> <span>My business is local, display all times in my own time zone.</span>
                            </label>

	                    </div>
	                </div>
	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Time Format</label>
	                    <div class="col-sm-10">
	                        <select name="select" class="form-control">
	                            <option value="12 hours(AM/PM)">12 hours(AM/PM)</option>
	                            <option value="24 hours">24 hours</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Start week on</label>
	                    <div class="col-sm-10">
	                        <select name="select" class="form-control">
	                            <option value="sunday">Sunday</option>
	                            <option value="monday">Monday</option>
	                            <option value="tuesday">Tuesday</option>
	                            <option value="wednesday">Wednesday</option>
	                            <option value="thursday">Thursday</option>
	                            <option value="friday">Friday</option>
	                            <option value="saturday">Saturday</option>
	                        </select>
	                    </div>
	                </div>

	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Calendar increments</label>
	                    <div class="col-sm-10">
	                        <select name="select" class="form-control">
	                            <option value="30 minutes">30 minutes</option>
	                        </select>
	                    </div>
	                </div>

	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Business hours</label>
	                    <div class="col-sm-10">
	                    	<p>Your business hours for appointment are displayed below. Clients will be able to request appointments during these time slots only.</p>
	                        <h5 class="fs-subtitle">Set up your business hours</h5>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">SUNDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="sun_business_hours_am" id="sun_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="sun_business_hours_pm" id="sun_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">MONDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="mon_business_hours_am" id="mon_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="mon_business_hours_pm" id="mon_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">TUESDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="tue_business_hours_am" id="tue_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="tue_business_hours_pm" id="tue_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">WEDNESDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="wed_business_hours_am" id="wed_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="wed_business_hours_pm" id="wed_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">THURSDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="thu_business_hours_am" id="thu_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="thu_business_hours_pm" id="thu_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">FRIDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="fri_business_hours_am" id="fri_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="fri_business_hours_pm" id="fri_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">SATURDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="sat_business_hours_am" id="sat_business_hours_am">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="sat_business_hours_pm" id="sat_business_hours_pm">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
	                    </div>
	                </div>

	                <div class="form-group row">
	                    <label class="col-sm-2 col-form-label">Calendar Sync</label>
	                    <div class="col-sm-10">
	                        
	                    </div>
	                </div>
	                <button type="button" onclick="submitCalendAndServices()" class="btn btn-primary waves-effect waves-light pull-right" style="text-align:center;">Save changes</button>
	            </form>
            </div>
        </div>
    </div>
</div>


@endsection