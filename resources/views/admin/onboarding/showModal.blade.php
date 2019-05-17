<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#onboard_modal">Onboard Modal</button>

    <div class="modal fade" id="onboard_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Staff Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Basic Inputs Validation start -->
                    <div class="card">
                        <div class="card-block">
                            <form id="msform">
                                    <!-- progressbar -->
                                <!-- <ul id="progressbar">
                                    <li class="active">Account Setup</li>
                                    <li>Social Profiles</li>
                                    <li>Personal Details</li>
                                </ul> -->
                                <!-- fieldsets -->
                                <fieldset>
                                    <img class="logo" src="{{asset('/files/assets/images/miynlogo.png')}}" alt="logo.png">
                                    <h2 class="fs-title">Sign up</h2>
                                    <h3 class="fs-subtitle">Let’s have a new beginning. Sign up for new you</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="pass" placeholder="Password" />
                                    </div>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" />
                                    </div>
                                    <button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
                                </fieldset>
                                <fieldset class="">
                                    <img class="logo" src="../files/assets/images/logo-blue.png" alt="logo.png">
                                    <h2 class="fs-title">Social Profiles</h2>
                                    <h3 class="fs-subtitle">Little bit about your presence on social media</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="gplus" placeholder="Google Plus" />
                                    </div>
                                    <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
                                    <button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <img class="logo" src="../files/assets/images/logo-blue.png" alt="logo.png">
                                    <h2 class="fs-title">Personal Details</h2>
                                    <h3 class="fs-subtitle">And something about yourself!</h3>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" />
                                    </div>
                                    <div class="input-group">
                                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                                    </div>
                                    <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
                                    <button type="button" name="next" class="btn btn-primary" value="submit">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- Basic Inputs Validation end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitContactForm()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>