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
                            <li><a  href="#">Terget Fixing Seles</a></li>
                            <li><a  href="#">Terget Fixing Inquery</a></li>
                            <li><a href="#">MC Seles Activity</a></li>
                            <li><a href="#">Sp Activity</a></li>
                            <li><a href="#">Service Activity</a></li>
                            <li><a href="#">Pre Booking Status</a></li>
                            <li><a href="#">Banking Activity</a></li>
                            <li><a href=" {{ route('customer')}}">Customer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-motorcycle"></i>
                            <span class="color-primary">Product</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="#">All Products</a></li>
                            <li><a id="mc_color_btn" data-bs-toggle="modal" data-bs-target="#mc_color_modal" href="#">Create Color</a></li>
                            <li><a id="mc_model_btn" data-bs-toggle="modal" data-bs-target="#mc_model_modal" href="#">Create Model</a></li>
                            <li><a href="{{route('product.create')}}">Add Products</a></li>
                            <li><a href="{{route('product.due')}}">Due Products</a></li>
                            <li><a href="{{route('product.info')}}">Products Info Setup</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-searchengin"></i>
                            <span class="color-primary">Spear Parts Setup</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a id="spear_parts_cata_btn" data-bs-toggle="modal" data-bs-target="#spm_modal" href="#">Create Catagory</a></li>
                            <li><a id="spear_parts_rack_btn" data-bs-toggle="modal" data-bs-target="#spr_modal" href="#">Create Rack Name</a></li>
                            <li><a href="{{route('spearparts')}}">Add Parts</a></li>
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
                            <li><a href="{{route('business.info')}}">Business Info</a></li>
                            <li><a href="{{route('business.setup')}} ">Initial Finance</a></li>
                            <li><a href="{{route('selespoint')}}">Seles Point</a></li>
                            <li><a href="{{route('servicepoint')}}">Service Point</a></li>
                            <li><a href="{{route('employee')}}">Employee</a></li>
                            <li><a href="{{route('bank')}}">Bank Info</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
