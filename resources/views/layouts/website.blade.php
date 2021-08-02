<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Database Managemnet Sysytem</title>
    <!-- / -->

    <!---Font Icon-->
    <link href="{{asset('static')}}/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{asset('static')}}/plugin/themify-icons/themify-icons.css" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link href="{{asset('static')}}/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('static')}}/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('static')}}/plugin/magnific/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('static')}}/plugin/nav/css/component.css" rel="stylesheet" />
    <!-- / -->

    <!-- Theme Style -->

    <link href="{{asset('static')}}/css/styles.css" rel="stylesheet">
    <link href="{{asset('static')}}/css/color/default.css" rel="stylesheet">

    <script src="{{asset('static')}}/plugin/nav/js/modernizr-custom.js"></script>
    <!-- / -->

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" />
    <!-- / -->


</head>

<!-- Body Start -->

<body class="dark-body">


    <div class="pages-stack">


        <div class="page white-bg">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-xl-12">
                        <div class="page-scroll">
                            <!-- <div class="page-content"> -->

                            <div class="section-titel">

                                <div class="st-title">
                                    {{-- <h2 class="theme-after dark-color">Contact Me</h2> --}}
                                    {{-- <img src="{{asset('static')}}/logo.png" alt="" style="height: 60px
                                    !important;"> --}}
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="contact-form">
                                        <div class="logo-section">
                                            <a href="/">
                                                <img src="{{asset('static')}}/logo.png" alt=""
                                                    style="height: 40px !important;"></a>

                                        </div>
                                        @yield('content')
                                    </div>
                                </div> <!-- col -->
                            </div>



                            <!-- </div> -->
                            <!-- page-content -->
                        </div>
                        <!-- page-scroll  -->
                    </div>
                </div>
                <!-- row -->
            </div>
        </div>


    </div>



    <!-- jQuery -->
    <script src="{{asset('static')}}/js/jquery-3.3.1.slim.min.js"></script>

    <!-- Plugins -->
    <script src="{{asset('static')}}/plugin/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('static')}}/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('static')}}/plugin/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{asset('static')}}/plugin/typeit-master/typeit.min.js"></script>
    <script src="{{asset('static')}}/plugin/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('static')}}/plugin/magnific/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('static')}}/plugin/nav/js/classie.js"></script>
    <script src="{{asset('static')}}/plugin/nav/js/main.js"></script>



    <!-- custom -->
    <script src="{{asset('static')}}/js/custom.js"></script>
    @stack('js')
    

</body>

</html>