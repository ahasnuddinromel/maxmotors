<!doctype html>
<html lang="en">
<head>
       @include('dashboard.layouts.partial.style')
    </head>


    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

          @include('dashboard.layouts.partial.header')

          @include('dashboard.layouts.sidebar.mainsidebar')

            <!-- Start right Content here -->
            @section('main-content')
            @show
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        @include('dashboard.layouts.partial.script')
    </body>

</html>
