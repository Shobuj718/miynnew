
    <div class="modal fade" id="onboard_modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">New Staff Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <form role="form" id="registration-form"  class="registration-form">                                                    
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h3>Your business profile</h3>
                                    <p>Hi Shobuj BD, Get Started by telling us about your business</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="industry_id" id="industry_id" class="col-sm-10 form-control" onchange="get_professions();">
                                            <!-- <select name="industry_id" id="industry_id" class="col-sm-10 form-control"> -->
                                                <option value="">Select industry type</option>
                                                @foreach($industries as $value)
                                                  <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="error_induestry_id"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="profession_id" id="profession_id" class="col-sm-10 form-control">
                                                <option value="">Select profession type</option>
                                            </select>
                                             <span class="error_profession_id"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="country_with_code" id="country_with_code" class="col-sm-10 form-control">
                                                <option value="BD +88">BD(+88)</option>
                                                <option value="AU +61">AUS(+61)</option>
                                                <option value="USA +1">USA(+1)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Phone Number</label>
                                            <input type="text" name="phone_number" placeholder="Phone Number..." class="form-last-name form-control" id="phone_number">
                                            <span class="phone_number_error"></span>
                                            <input name="csrfToken" value="5965f0d244b7d32b334eff840werjhsdfas" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Enter Business Name">
                                            <p class="error_business_name"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="web_url" id="web_url" class="form-control" placeholder="Website URL">
                                            <span class="error_web_url"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- google map and address, lat, lng, postal/zip code get  -->

                                <div class="row">
                                  <div class="col-md-12">
                                    <input id="address" type="text" class="form-control" size="50" placeholder="Enter a location" autocomplete="on" runat="server" />
                                    <div id="map_canvas" style="width:; height:300px"></div>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id }}">
                                    <p class="error_address"></p>
                                </div>
                                
                                <!-- <ul id="geoData">
                                    <li>Full Address: <span id="location-snap"></span></li>
                                    <li>Latitude: <span id="lat-span"></span></li>
                                    <li>Longitude: <span id="lon-span"></span></li>
                                    <li>Postal Code: <span id="postal-code"></span></li>
                                </ul> -->

                                <!-- google map end -->

                                <!-- <div class="form-group">
                                    <label>
                                    <input type="checkbox" id="present_number_address" value="1"> Present my phone number & address to my clients</label>
                                </div> -->

                                <div class="text-right">                                    
                                    <button type="button" class="btn btn-next open1"  >Next</button>
                                </div>
                            </div>
                        </fieldset>


                        
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h4 class="text-center"> Business Time Zone </h4>
                                    <p class="text-center">MIYN can help you with all these tasks.</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Time Zone</label>
                                    <div class="col-sm-10">
                                        <select name="time_zone" id="time_zone" class="form-control">
                                            <option value="GMT + 06:00">(GMT + 06:00) Dhaka</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Time Format</label>
                                    <div class="col-sm-10">
                                        <select name="time_format" id="time_format" class="form-control">
                                            <option value="24 hours(AM/PM)">24 hours(AM/PM)</option>
                                            <option value="12 hours(AM/PM)">12 hours(AM/PM)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Start week on</label>
                                    <div class="col-sm-10">
                                        <select name="start_weak_on" id="start_weak_on" class="form-control">
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
                                <div class="text-right">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next2 open2">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h4 class="text-center"> Add Services</h4>
                                    <p class="text-center">MIYN can help you with all these tasks, so feel free to to select more than one</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" name="service_name[]" class="form-control" placeholder="Service name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control service_duration" name="service_duration[]" id="service_duration">
                                      <option value="">Duration</option>
                                      <option value="15 minutes">15 minutes</option>
                                      <option value="30 minutes">30 minutes</option>
                                      <option value="45 minutes">45 minutes</option>
                                      <option value="1 hour">1 hour</option>
                                      
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-3">
                                <div class="form-group">
                                 <input type="number" name="service_price[]"  class="form-control" placeholder="Service price">
                                </div>
                              </div>
                            </div>

                            <div class="field_wrapper2">
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <a href="javascript:void(0)" class="add_button2"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px;text-align: center;">ADD SERVICE</h6></a>
                              </div>
                              
                            </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next3 open2">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h4 class="text-center"> Add Staff </h4>
                                    <p class="text-center">MIYN can help you with all these tasks.</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                              <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="text" name="onboard_staff_name[]" class="form-control" placeholder="Staff name">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <input type="text" name="onboard_staff_email[]" class="form-control" placeholder="Staff email">
                                </div>
                              </div>
                            </div>
                            <div class="field_wrapper">
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <a href="javascript:void(0)" class="add_button"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px;text-align: center;">ADD NEW STAFF MEMBER</h6></a>
                              </div>
                              
                          </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next4 open2">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h4 class="text-center"> Set up your business hours </h4>
                                    <p class="text-center">MIYN can help you with all these tasks.</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">SUNDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="sun_business_hours_am" id="sun_business_hours_am">
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
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
                                      <option value="9:00am">9:00am</option>
                                      <option value="6:30am">6:30am</option>
                                      <option value="7:00am">7:00am</option>
                                      <option value="7:30am">7:30am</option>
                                      <option value="8:00am">8:00am</option>
                                      <option value="8:30am">8:30am</option>
                                      <option value="9:00am">9:00am</option>
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
                                      <option value="5:00pm">5:00pm</option>
                                      <option value="2:30pm">2:30pm</option>
                                      <option value="3:00pm">3:00pm</option>
                                      <option value="3:30pm">3:30pm</option>
                                      <option value="4:00pm">4:00pm</option>
                                      <option value="4:30pm">4:30pm</option>
                                      <option value="5:00pm">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next5 open2">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-top">
                                <div class="text-center">
                                    <h4 class="text-center"> Select your business needs</h4>
                                    <p class="text-center">MIYN can help you with all these tasks, so feel free to to select more than one</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="row">
                                   <div class="col-md-4">
                                       <div class="thumbnail">

                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="manage_client_records" value="1">
                                           </div>

                                             <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                           <p style="margin-top: 10px;">Manage clients record</p>
                                           
                                         </div>
                                       </div>
                                   <div class="col-md-4">
                                       <div class="thumbnail">
                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="send_email_sms_promotions" value="1">
                                           </div>
                                           <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                         <p style="margin-top: 10px;">Send Email & SMS Promotions</p>
                                           
                                         </div>
                                       </div>
                                   <div class="col-md-4">
                                       <div class="thumbnail">
                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="send_email_sms_reminders" value="1">
                                           </div>
                                           <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                           <p style="margin-top: 10px;">Send Email & Email Reminders</p>
                                           
                                            
                                         </div>
                                       </div>  
                                   </div>
                                   <div class="row">
                                       <div class="col-md-4">
                                       <div class="thumbnail">
                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="add_online_scheduling" value="1">
                                           </div>
                                           <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                           <p style="margin-top: 10px;">Add online scheduling</p>
                                           
                                         </div>
                                       </div>
                                   <div class="col-md-4">
                                       <div class="thumbnail">
                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="invoices_estimates" value="1">
                                           </div>
                                           <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                         <p style="margin-top: 10px;">Create invoices & estimates</p>
                                           
                                         </div>
                                       </div>
                                   <div class="col-md-4">
                                       <div class="thumbnail">
                                           <div class="caption" style="text-align: right;">
                                             <input type="checkbox" id="accept_payments" value="1">
                                           </div>
                                           <img src="{{ asset('files/assets/images/miynlogo.png') }}" alt="Lights" width="160px" height="160px">
                                         <p style="margin-top: 10px;">Accept Payments</p>
                                           
                                         </div>
                                         
                                       </div>                                
                                   </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next6">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <div class="panel-heading">
                              <h4 class="text-center">You are ready for takeoff!</h4>
                              <p class="text-center">Sit tight, we'll walk you through getting started</p>
                            </div>

                            <div class="clearfix" style="height: 10px;clear: both;"></div>

                            <div class="form-group" style="text-align: center;">
                              <div class="col-lg-12">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button class="btn btn-primary open3" type="button">GO </button> 
                              </div>
                            </div>

                            <br>
                            <br>

                             <div class="panel-heading">
                              <h4 class="text-center">Need a little extra hand-holding?</h4>
                              <p class="text-center"><a href="http://test.miyn.net/">Schedule a call</a> with an onboarding specialist to get a one-on-one walk through</p>
                            </div>
                        </fieldset>
                    
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitContactForm()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>

    