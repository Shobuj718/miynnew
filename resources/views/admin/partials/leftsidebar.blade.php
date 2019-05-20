<div class="sidebar_toggle">
    <a href="#"><i class="icon-close icons"></i></a>
</div>
<div class="pcoded-inner-navbar main-menu">
    <div class="">
        <div class="main-menu-header">
            <img class="img-80 img-radius" src="{{ asset('/files/assets/images/avatar-blank.jpg')}}" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details">{{ Auth::user()->name }}</span>
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

        <li class="">
            <a href="{{ url('/dashboard') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Inbox</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Calendar</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Client</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>

    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-gift"></i><b>EC</b></span>
                <span class="pcoded-mtext">Online Presence</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Client Portal</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Website Widget</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
            </ul>
        </li>
        <li class="">
            <a href="{{ route('settings') }}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Settings</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">Contact Us</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</div>