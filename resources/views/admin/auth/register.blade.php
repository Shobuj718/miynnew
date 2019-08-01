
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MIYN-Register Page</title>

      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Phoenixcoded" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('/files/assets/images/miynlogo.png')}}" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('/files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form method="POST" action="{{ route('register') }}" class="md-float-material form-material">
                    	@csrf

                        <div class="text-center">
                            <img src="{{asset('/files/assets/images/miynlogo.png')}}" width="100px" height="100px" alt="miynlogo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <!--<div class="row m-b-20">
                                    <div class="col-md-6">
                                        <a href="#!" class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i class="icofont icofont-social-facebook"></i>facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#!" class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i class="icofont icofont-social-twitter"></i>twitter</a>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign up with your regular account</p>-->
                                <div class="form-group form-primary">
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">Business Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div><!--
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a href="">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Already Registered?</p>
                                        <p class="text-inverse text-left"><a href="{{ route('login') }}"><b>Login</b></a></p>
                                    </div>
                                    <!--<div class="col-md-2">
                                        <img src="{{asset('/files/assets/images/miynlogo.png')}}" alt="small-logo.png">
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('/files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('/files/assets/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('/files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('/files/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/assets/js/common-pages.js')}}"></script>
</body>

</html>
