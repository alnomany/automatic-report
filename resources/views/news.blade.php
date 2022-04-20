<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ar" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="http://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            | غرفة الموقف للتحالف الإسلامي لعسكري لمحارية الإرهاب
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
    <style>
        body, html {

{{--            background-image: url({{url('/uploads/reportsd/Picture2.png')}}) !important;--}}


            /* Full height */
            background-size: contain;


            /* Center and scale the image nicely */
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;

        }
        .copyright {
            background-color: #c4a11c !important;
            padding: 1% !important;
        }
        .copyright p {
            padding: 0 0px;
            text-align:left;
        }
        .AllIncidents .Date .year {
            background:none !important;
            color:black !important;
            display: inline-block !important;
            margin: 0px ;
            padding: 0px ;
            width: 13% !important;
            font-size: 16px;
            font-weight: 300;
        }

        .AllIncidents .Date .source {
            background: #7e7e7f !important;
            color: white !important;
            padding-right: 5%;
            padding-left: 27%;
            padding-bottom: 5%;
            padding-top: 1%;
            font-size: 10px;
        }
        .AllIncidents .Date .Dtitle {
            background:none !important;

        }
        .AllIncidents .Date {
            margin-bottom: 0rem !important;
        }
        .article-item-title{
            width:100%;



            background:#91987D;
        }
        .AllIncidents .article-item-title{
            margin-top:0px;
        }


        .article-item-title    h5 {
            color:white;
            text-align: center;
            padding-top:.1%;
            padding-bottom:.5%;
            font-weight:bold;

        }
        .article-item-title    h4 {
            color:white;
            text-align: center;
            padding-top:.1%;
            padding-bottom:.5%;
            font-weight:bold;


        }

        .AllIncidents .IncidentImg {
            width: 100% !important;
            height: 71% !important;
            border: 2px solid;
            /* padding-top: 4% !important;*/
        }
        .QRCode{
            position: absolute;
            left: 1%;
            bottom:-5%;

        }
        /*
        img .IncidentImg .top{
            padding-top: 5% !important;
        }*/

        .source{
            background: #7e7e7f !important;
            color: white !important;
            padding-right: 2%;
            padding-left: 2%;
            font-size:7px;
        }
        .article-item-desc p {
            padding-top:1%;
            padding-bottom:1%;
            color:black;
        }
        .AllIncidents {
            margin: 0px;
            /* background: #fff; */
            padding:0rem !important;
            padding-right: 1rem !important;
            border-bottom: none;
        }
        .wrapper{
            border-right:30px solid #d04444;
        }
        .wrapper h3{
            font-size:1rem;
            color:white;
            position:absolute;
            top: 160%;
            right:0;
            margin-right:-103px;
            transform:rotate(270deg);
            transform-origin: 0 0;
        }
        .wrapper1{
            border-right:30px solid #3cbb7c;
        }
        .wrapper1 h3{
            font-size:1rem;
            color:white;
            position:absolute;
            bottom: -279%;
            right:0;
            margin-right:-94px;
            transform:rotate(270deg);
            transform-origin: 0 0;
        }
        .heading1 {
            border-bottom: 15px solid #d4bb6a;
            width: 75%;

        }

        .heading1 .Dtitle {
            font-size: 59px;
            color: #385623;
            font-weight: bold;
            position: absolute;
            bottom: -40%;
            right: 29%;
        }
        p{
            font-size:16px;
        }
        h5 {
            font-size: 16px;
        }
        .heading1 .year{
            font-size:16px;
            color:#4D4D4D;
            font-weight: bold;
            margin-right: 80%;


        }

        @font-face {
            /*src:  url(fonts/DINNextLTArabic-Regular-2.ttf);*/
            font-family: DINNextLTArabic-Regular;

        }

        @font-face {
            /*src:  url(fonts/din-next-lt-w23-bold.ttf);*/
            font-family: DINNext1;

        }
        *{
            font-family: DINNextLTArabic-Regular !important;


        }
        .text-left p{
            text-align:left !important;
        }

        @media (min-width: 1200px){
            .container-myxl {
                max-width: 1200px !important;
            }
        }


    </style>
    <!--end of global css-
    page level css-->

{{--    @yield('header_styles')--}}
    <style>

        .AllIncidents{
            background:none !important;
        }
        header{
            position: absolute;
            top: -14px;
            /*
            position: fixed;
            top: 5px;
            */
            left: 0px;
            right: 0px;


            width: 100%;

        }
        /*
  footer{
      position:fixed !important;

      height: 100%;
      width:100%;
  }
*/
    </style>
    <!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header  style=" !important;padding: 10px;">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-6">
            <center>  <img class="IncidentImg top" width="150" height="150"  style=" padding-top: 5% !important;" src="{{ public_path('/uploads/reportsd/report_daily.png')  }}"
                           alt="image"></center>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 col-2">
            <img class="IncidentImg top" width="40" height="40" style=" padding-top: 5% !important;" src="{{ public_path('/uploads/reportsd/line.png')  }}"
                 alt="image">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-4">
            <center>  <img class="IncidentImg top" width="150" height="150" style=" padding-top: 5% !important;" src="{{ public_path('/uploads/reportsd/logo2.png')  }}"
                           alt="image"></center>
        </div>
    </div>

</header>

<!-- //Header End -->

<!-- slider / breadcrumbs section -->
{{--@yield('top')--}}

<!-- Content -->
{{--@yield('content')--}}
<div class="row" style="padding-top:17%;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-12">
        <div class="article-item-title" >
            <h4>  يوم الاثنين 1440 مايو 4</h4>
        </div>
    </div>
</div>
<br>
<div class="container container-fluid container-myxl">

    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-4 underline">
            <center class="heading1">
                <span class="Dtitle"> 6</span>
                <span class="year" style="   ">

                   الاخبار

                </span>
            </center>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4  col-4">
            <center class="heading1">
            <span class="Dtitle">

                 44</span>
                <span class="year" style="   ">

     الخارجية            </span>
            </center>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4  col-4">
            <center class="heading1">
                <span class="Dtitle">55</span>
                <span class="year" style="   ">
                الداخلية

                </span>
            </center>
        </div>
    </div>
</div>

<br>

{{--@include('include.news_part')--}}
@for($i=0;$i<5;$i++)
    <div class="wrapper">
        <h3 style="">أخبار </h3>



        <div class="AllIncidents" style="">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-12">
                    <div class="article-item-title">
                        <h5>عنوان المقال </h5>
                    </div>
                </div>
            </div>
            <div class="row">



                <div class="col-sm-2 col-md-2 col-lg-2 col-2">


                    <img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"
                         alt="image">


                    <div class="Date">
                        <span class="year source"> المصدر</span>
                        <span class="Dtitle"> <img class="IncidentIm" width="60" height="30" src="{{ public_path('/uploads/reportsd/source_logo.png')  }}"
                                                   alt="image"></span>

                    </div>

                </div>
                <div class="col-sm-10 col-md-10 col-lg-10 col-10">

                    <div class="article-item-desc">
                        <p> نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص  نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نصنص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال
                        </p><br>
                    </div>

                    <div class="Date">
                    <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/country.png')  }}"
                                               alt="image"></span>
                        <span class="year" style="">الدولة</span>
                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/city.png')  }}"
                                                   alt="image"></span>
                        <span class="year" style="">الدولة</span>

                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/counter.png')  }}"
                                                   alt="image"></span>
                        <span class="year" >

                    لم يحدد
                    </span>

                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/time.png')  }}"
                                                   alt="image"></span>
                        <span class="year" style="">الوقت</span>


                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/location.png')  }}"
                                                   alt="image"></span>
                        <span class="year" style="">المكان</span>


                        <span class="Dtitle QRCode" style=""> <a href="" ><img class="IncidentIm" width="50" height="50" src="{{ public_path('/uploads/reportsd/QR.png')  }}"
                                                                               alt="image"></a></span>
                    </div>

                </div>

            </div>

        </div>

    </div>
    </div>
@endfor
@for($i=0;$i<3;$i++)
    <div class="wrapper1">
        <h3 style="">أخبار  </h3>



        <div class="AllIncidents" style="">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-12">
                    <div class="article-item-title">
                        <h5>عنوان الخبر </h5>
                    </div>
                </div>
            </div>
            <div class="row">



                <div class="col-sm-2 col-md-2 col-lg-2 col-2">




                    <img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"
                         alt="image">


                    <div class="Date">
                        <span class="year source"> المصدر</span>
                        <span class="Dtitle"> <img class="IncidentIm" width="60" height="30" src="{{ public_path('/uploads/reportsd/source_logo.png')  }}"
                                                   alt="image"></span>

                    </div>

                </div>
                <div class="col-sm-10 col-md-10 col-lg-10 col-10">

                    <div class="article-item-desc">
                        <p> الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول  الخبر الاول
                        </p><br>
                    </div>

                    <div class="Date">
                    <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/country.png')  }}"
                                               alt="image"></span>
                        <span class="year" style="">الدولة</span>
                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30" src="{{ public_path('/uploads/reportsd/city.png')  }}"
                                                   alt="image"></span>
                        <span class="year" style="    ">5 متابعين
                        </span>
                        <span class="Dtitle QRCode" style=""> <a href="" ><img class="IncidentIm" width="50" height="50" src="{{ public_path('/uploads/reportsd/QR.png')  }}"
                                                                               alt="image"></a></span>
                    </div>

                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-2">

                </div>

            </div>

        </div>
    </div>
@endfor
<!-- Footer Section Start -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-12">

    <footer>
        <!-- //Footer Section End -->
        <div class="copyright">
            <div class="containe">


                <p style="text-align:left;"> من اصدارات غرفة الموقف</p>


            </div>
        </div>

    </footer>
</div>



{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv_B1VQKtzIVfIgFTfudE0SY_AwqJi77k&callback=initMap"--}}
{{--        type="text/javascript"></script>--}}
{{--<!--global js starts-->--}}
{{--<script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>--}}
{{--<!--global js end-->--}}
{{--<!-- begin page level js -->--}}
{{--@yield('footer_scripts')--}}
{{--<!-- end page level js -->--}}
{{--<script>--}}
{{--    $(".navbar-toggler-icon").click(function () {--}}
{{--        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')--}}
{{--    })--}}

{{--    $(function () {--}}
{{--        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');--}}
{{--    })--}}
{{--</script>--}}

</body>

</html>
