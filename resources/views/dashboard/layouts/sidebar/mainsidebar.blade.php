    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <!--Sidebar LOGO -->
        <div class="navbar-brand-box">
            <a href="{{route('dashboard')}} " class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/maximg/maxpluslogo.png')}} " alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/maximg/maxpluslogo.png')}}" alt="" height="70">
                </span>
            </a>
        </div>
        <!--End Sidebar LOGO -->

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>



        <div data-simplebar class="sidebar-menu-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">


                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="fa-brands fa-maxcdn"></i>
                            <span class="color-primary">Dashboard</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <i class="fa-brands fa-redhat"></i>
                            <span class="color-primary">Operation</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a  href="#">Terget Fixing</a></li>
                            <li><a href="#">MC Seles Activity</a></li>
                            <li><a href="#">Sp Activity</a></li>
                            <li><a href="#">Service Activity</a></li>
                            <li><a href="#">Pre Booking Status</a></li>
                            <li><a href="#">Banking Activity</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-motorcycle"></i>
                            <span class="color-primary">Product</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="#">Create Catagory</a></li>
                            <li><a href="#">Create Model</a></li>
                            <li><a href="#">Create Color</a></li>
                            <li><a href="#">Add Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-searchengin"></i>
                            <span class="color-primary">Spear Parts Setup</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="#">Create Catagory</a></li>
                            <li><a href="#">Create Name</a></li>
                            <li><a href="#">Add Parts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-servicestack"></i>
                            <span class="color-primary">Service Setup</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="#">Create Service Catagory</a></li>
                            <li><a href="#">Add Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-gears"></i>
                            <span class="color-primary">Setting</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="#">Business Info</a></li>
                            <li><a href="#">Initial Finance</a></li>
                            <li><a href="#">Seles Point</a></li>
                            <li><a href="#">Service Poinr</a></li>
                            <li><a href="#">Employee</a></li>
                            <li><a href="{{route('bank.create')}}">Bank Info</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
