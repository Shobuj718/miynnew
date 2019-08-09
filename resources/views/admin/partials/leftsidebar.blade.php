<div class="sidebar_toggle">
    <a href="#"><i class="icon-close icons"></i></a>
</div>
<div class="pcoded-inner-navbar main-menu">
    <div class="">
        <div class="main-menu-header">
            <img class="img-80 img-radius" src="{{ asset('/files/assets/images/avatar-blank.jpg')}}" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details">{{ ucfirst(Auth::user()->first_name) }}</span>
            </div>
        </div>

        <!-- <div class="main-menu-content">
            <ul>
                <li class="more-details">
                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                    <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
            </ul>
        </div> -->
    </div>
    <div class="p-15 p-b-0">

    </div>

    <ul class="pcoded-item pcoded-left-item">
        @if(Auth::user()->role->permission === 'root' || Auth::user()->role->permission === 'business_admin' || Auth::user()->role->permission === 'staff')
        <li class="">
            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-home"></i><b>N</b></span>
                <span class="pcoded-mtext">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
      
        @endif

        @if(Auth::user()->role->permission === 'user' || Auth::user()->role->permission === 'staff' || Auth::user()->role->permission === 'business_admin')
            <li class="">
                <a href="{{ route('booking.client') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-mobile"></i></i><b>AP</b></span>
                    <span class="pcoded-mtext">Appointments</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        @endif

        @if(Auth::user()->role->permission === 'root')
        <li class="">
            <a href="{{ route('booking.client') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-user"></i><b>UL</b></span>
                <span class="pcoded-mtext">All Users</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('booking.client') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-user"></i><b>UL</b></span>
                <span class="pcoded-mtext">Active Users</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('booking.client') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-user"></i><b>UL</b></span>
                <span class="pcoded-mtext">Suspended Users</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->permission === 'root' || Auth::user()->role->permission === 'business_admin')
        <li class="">
            <a href="{{ route('inbox') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-mobile"></i></i><b>In</b></span>
                <span class="pcoded-mtext">Inbox</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('showCalendar') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-calendar"></i><b>Cal</b></span>
                <span class="pcoded-mtext">Calendar</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="#" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-calendar"></i><b>Cal</b></span>
                <span class="pcoded-mtext">Payments</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li> 
        <li class="">
            <a href="#" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-calendar"></i><b>Cal</b></span>
                <span class="pcoded-mtext">Documents</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li> 
        <li class="">
            <a href="#" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-calendar"></i><b>Cal</b></span>
                <span class="pcoded-mtext">Marketing</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>        
        
        @endif

        @if(Auth::user()->role->permission === 'business_admin' )
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>Ser</b></span>
                <span class="pcoded-mtext">Services</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="{{ route('client.services.all') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>S</b></span>
                        <span class="pcoded-mtext">All Services</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('client.services') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>S</b></span>
                        <span class="pcoded-mtext">Add Services</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>                
            </ul>
        </li>
        @endif

    </ul>

    <ul class="pcoded-item pcoded-left-item">
        
        @if(Auth::user()->role->permission === 'root')
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>OP</b></span>
                <span class="pcoded-mtext">Industry</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{ route('industry.add') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Industry</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('industry.all') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">All Industry</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>OP</b></span>
                <span class="pcoded-mtext">Profession</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{ route('profession.add') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Profession</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('profession.all') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">All Profession</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>OP</b></span>
                <span class="pcoded-mtext">Category</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{ route('client.portal') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Category</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('website.widget') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">All Category</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
            </ul>
        </li>
        @endif
    </ul>
    
    <ul class="pcoded-item pcoded-left-item">
        @if(Auth::user()->role->permission === 'business_admin')
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>OP</b></span>
                <span class="pcoded-mtext">Online Presence</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{ route('client.portal') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Client Portal</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('website.widget') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Website Widget</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
            </ul>
        </li>
        @endif

        @if(Auth::user()->role->permission === 'root' || Auth::user()->role->permission === 'business_admin')
        <li class="">
            <a href="{{ route('settings') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-settings"></i></i><b>N</b></span>
                <span class="pcoded-mtext">Settings</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->permission === 'business_admin' || Auth::user()->role->permission === 'staff' || Auth::user()->role->permission === 'user')
        <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-view-list"></i><b>N</b></span>
                <span class="pcoded-mtext">Contact Us</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endif
        <br><br>
    </ul>
    
    @if(Auth::user()->role->permission === 'business_admin')
    <ul class="pcoded-item pcoded-left-item">
        <li class="">
            <a href="{{ route('dashboard.onboarding') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-check-box"></i><b>N</b></span>
                <span class="pcoded-mtext">Getting Started Onboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
    @endif
</div>