<!doctype html>
<html class="no-js" lang="en">

<head>
  @include('layout.head')
</head>

<body class="skin-dark">

    <div class="main-wrapper">
        @include('layout.navbar')
        @include('layout.sidebar')

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Pages <span>/ Blank</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Content -->
                <div class="page-content">
                    @yield('content')
                </div>
                <!-- Page Content End -->
            </div><!-- Page Headings End -->

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">
                <div class="footer-copyright text-center">
                    <p class="text-body-light">{{ now()->year }} &copy; <a href="https://liwa-alex.my.id">IBCreative</a></p>
                </div>
            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS ============================================ -->
    @include('layout.script')

</body>

</html>