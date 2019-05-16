<head>
    <title></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
            modal test
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 0px;">
                        <h4 class="modal-title text-center" id="myModalLabel">Your business profile</h4>
                        <p class="text-center">Hi Shobuj BD, Get Started by telling us about your business</p>
                        <br>
                    </div>

                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form role="form">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                                    </div>
                                </div>                      
                                <div class="col-md-5">
                                    <div class="form-group">
                                        
                                        <select name="industry" id="industry" class="col-sm-10 form-control">
                                            <option value="industry1">industry1</option>
                                            <option value="industry2">industry2</option>
                                            <option value="industry3">industry3</option>
                                        </select>
                                    </div>
                                    <p class="error_industry"></p>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select name="profession" id="profession" class="col-sm-10 form-control">
                                            <option value="profession1">Profession1</option>
                                            <option value="profession2">Profession2</option>
                                            <option value="profession3">Profession3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                                    </div>
                                </div>                          
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select name="country" id="country" class="col-sm-10 form-control">
                                            <option value="country1">Country1</option>
                                            <option value="country2">Country2</option>
                                            <option value="country3">Country3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="phone">
                                        <p class="error_phone_number"></p>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                                    </div>
                                </div>                      
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select name="person" id="person" class="col-sm-10 form-control">
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

                            <br>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                                    </div>
                                </div>  
                                <div class="col-sm-11">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" required="" class="form-control" placeholder="Address">
                                        <p class="error_address"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">                           
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" id="show_number_address" value="TRUE">Present my phone number & address to my clients</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                        </form>
                    </div>

                    <div class="modal-footer" style="border-top: 0px;text-align: center;">
                        <button type="button" class="btn btn-success submitBtn" onclick="submitContactForm()" id="modal1">I'm all set</button>
                       <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>

</body>
</html>

