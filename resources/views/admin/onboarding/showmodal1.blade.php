<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#onboard_modal">Onboard Modal</button>

    <div class="modal fade" id="onboard_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">New Staff Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <form role="form"  class="registration-form">                                                    
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left text-center">
                                    <h3>Your business profile</h3>
                                    <p>Hi Shobuj BD, Get Started by telling us about your business</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="industry_id" id="industry_id" class="col-sm-10 form-control">
                                                <option value="1">industry1</option>
                                                <option value="2">industry2</option>
                                                <option value="3">industry3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="profession_id" id="profession_id" class="col-sm-10 form-control">
                                                <option value="1">Profession1</option>
                                                <option value="2">Profession2</option>
                                                <option value="3">Profession3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="country_with_code" id="country_with_code" class="col-sm-10 form-control">
                                                <option value="country1 88">Country1 (88)</option>
                                                <option value="country2 99">Country2 (99)</option>
                                                <option value="country3 66">Country3 (66)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Phone Number</label>
                                            <input type="text" name="form-last-name" placeholder="Phone Number..." class="form-last-name form-control" id="form-last-name">
                                            <input name="csrfToken" value="5965f0d244b7d32b334eff840werjhsdfas" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="persons" id="persons" class="col-sm-10 form-control">
                                                <option value="1">1 Person</option>
                                                <option value="2">2 Person</option>
                                                <option value="3">3 Person</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="web_url" id="web_url" class="form-control" placeholder="Website URL">
                                            <p class="error_web_url"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id }}">
                                    <p class="error_address"></p>
                                </div>

                                <div class="form-group">
                                    <label>
                                    <input type="checkbox" id="present_number_address" value="1"> Present my phone number & address to my clients</label>
                                </div>

                                <div class="text-right">                                    
                                    <button type="button" class="btn btn-next"  >Next</button>
                                </div>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h4 class="text-center"> Select your business needs</h4>
                                    <p class="text-center">MIYN can help you with all these tasks, so feel free to to select more than one</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
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
                                    <button type="button" class="btn btn-next">Next</button>
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
                              <p class="text-center"><a href="http://127.0.0.1:8000">Schedule a call</a> with an onboarding specialist to get a one-on-one walk through</p>
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

    