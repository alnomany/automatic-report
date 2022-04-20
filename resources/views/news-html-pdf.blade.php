<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ar" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        @section('title')
            | غرفة الموقف للتحالف الإسلامي لعسكري لمحارية الإرهاب
        @show
    </title>
    <style type="text/css">

        @font-face {
            src: url('{{public_path('fonts/DINNextLTArabic-Regular-2.ttf')}}') format('truetype');
            font-family: DINNextLTArabic-RegularX;
        }

        @font-face {
            src: url('{{env('FONT_URL')}}din-next-lt-w23-bold.ttf') format('truetype');
            font-family: DINNextLTArabic-Regular;
        }

        @font-face {
            src: url('{{env('FONT_URL')}}din-next-lt-arabic-regular.ttf') format('truetype');
            font-family: DINNext1;

        }

        img {
            max-width: 100%;
            height: auto;
            display: inline-block;
            vertical-align: middle;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-size: 14px !important;
            background-size: contain;
            overflow-x: hidden;
            /* Center and scale the image nicely */
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;
            background-image: url({{ public_path('/uploads/reportsd/Picture2.png') }}) !important;

        }

        .copyright {
            background-color: #c4a11c !important;
            padding: 5px !important;
        }

        .copyright p {
            padding: 0 0;
            text-align: left;
            color: white;
        }

        .AllIncidents .Date .year {
            background: none !important;
            color: black !important;
            display: inline-block !important;
            margin: 0;
            padding: 0;
            width: 13% !important;
            font-size: 16px;
            /*font-weight: 300;*/
        }

        .AllIncidents .Date .source {
            background: #7e7e7f !important;
            color: white !important;
            padding-right: 5px;
            padding-left: 20px;
            padding-bottom: 5px;
            padding-top: 5px;
            font-size: 10px;
        }

        .AllIncidents .Date .Dtitle {
            background: none !important;
        }

        .AllIncidents .Date {
            margin-bottom: 0;
            position: relative;
        }

        .article-item-title {
            width: 100%;
            background: #91987D;
        }

        .AllIncidents .article-item-title {
            margin-top: 0;
        }

        .article-item-title h5 {
            color: white;
            text-align: center;
            padding-top: 0px;
            padding-bottom: 0px;
            /*font-weight: bold;*/
        }

        .article-item-title .p {
            color: white;
            text-align: center;
            padding-bottom: 5px;
            margin-top: 0;
            margin-bottom: 0 !important;
            font-weight: 800 !important;
        }

        .IncidentIm {
            padding-right: 10px;
            max-width: none;
            width: 30px;
            height: 30px;
        }

        .AllIncidents .IncidentImg {
            height: 100px;
            width: 100%;
            border: 2px solid #757b87;
            max-width: none;
        }

        .ds {
            text-align: right;
        }

        .QRCode {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .source {
            background: #7e7e7f !important;
            color: white !important;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 7px;
        }

        .article-item-desc p {
            color: black;
            padding-right: 30px;
            text-align: justify;
            padding-top: 0;
            padding-bottom: 0;
        }

        .AllIncidents {
            margin: 0;
            background-color: #fff;
            padding: 0;
            padding-right: 16px;
            border-bottom: none;
        }

        .wrapper {
            border-right: 30px solid #d04444;
        }

        .wrapper h3 {
            display: none;
        }

        .wrapper1 {
            border-right: 30px solid #3cbb7c;
        }

        .wrapper1 h3 {
            display: none;
        }

        .heading1 {
            border-bottom: 15px solid #d4bb6a;
            width: 75%;
            margin-right: 47px;
            /*height: 30px;*/
        }

        .heading1 .Dtitle {
            font-size: 48px !important;
            color: #385623;
            display: block;
            margin-bottom: -70px;
            /*font-weight: 800;*/
            font-family: DINNextLTArabic-Regular !important;
        }

        p {
            font-size: 16.5px;
        }

        h5 {
            font-size: 16px;
        }

        .heading1 .year {
            font-size: 16px;
            color: #4D4D4D;
            margin-right: 80%;
            margin-bottom: 0;
            position: relative;
            bottom: 0;
            /*font-weight: 800;*/
            font-family: DINNextLTArabic-Regular !important;
        }

        *, body {
            font-family: DINNext1;
        }

        .text-left p {
            text-align: left !important;
        }

        .AllIncidents {
            background: none !important;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .postImg {
            width: 60px !important;
            height: 40px !important;
        }

        .QRImg {
            height: 50px !important;
            width: 50px !important;
        }

    </style>
</head>

<body>

@php
    $totalPages = ceil($posts/5);
    $count = 0;
    $page = 0;
@endphp

    <!-- Header Start -->
    <table cellpadding="0" style="width:100%; text-align: center; padding-bottom: 0; margin-bottom: 0;">
        <tr style="vertical-align: bottom">
            <td><img width="140" height="140" style="max-width: none"
                     src="{{ public_path('/uploads/reportsd/report_daily.png')  }}" alt="image"></td>
            <td><img width="35" height="35" style="max-width: none" src="{{ public_path('/uploads/reportsd/line.png')  }}"
                     alt="image"></td>
            <td><img width="140" height="140" style="max-width: none"
                     src="{{ public_path('/uploads/reportsd/logo2.png')  }}"
                     alt="image"></td>
        </tr>
    </table>
    <!-- //Header End -->
<table style="width: 100%;padding-top:15px;">
    <tr>
        <td class="article-item-title"><p class="p" style="">يوم الاثنين 1440 مايو 44</p></td>
    </tr>
</table>
<table style="width: 100%; position: relative">
    <tr>
        <td>
            <center class="heading1"><span class="Dtitle">46</span>
                <p class="year">الاخبار</p></center>
        </td>
        <td>
            <center class="heading1"><span class="Dtitle">44</span>
                <p class="year">الخارجية</p></center>
        </td>
        <td>
            <center class="heading1"><span class="Dtitle">55</span>
                <p class="year">الداخلية</p></center>
        </td>
    </tr>
</table>
<br>
@for($i=0;$i<$posts;$i++)
    @if($count == 6)
        @include('layouts.header')
        @php
            $count = 0;
            $page++;
        @endphp
    @endif
    <div class="{{ $i%2==0 ? 'wrapper' : 'wrapper1'}}">
        <h3 style="">أخبار</h3>
        <div class="AllIncidents" style="">
            <table style="width: 100%;">
                <tr>
                    <td class="article-item-title"><p class="p">عنوان الخبر</p></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 15%;"><img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"
                                                 alt="image">
                        <div class="Date ds"><span class="Dtitle"><p class="year source"> المصدر</p><img
                                    class="IncidentIm postImg" width="80" height="55"
                                    src="{{ public_path('/uploads/reportsd/source_logo.png')  }}" alt="image"></span>
                        </div>
                    </td>
                    <td style="vertical-align: top;">
                        <div class="article-item-desc"><p>نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص  نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نصنص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال نص المقال</p><br></div>
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="Date">
                                        <span class="Dtitle"><img class="IncidentIm"
                                           width="30"
                                           height="30"
                                           src="{{ public_path('/uploads/reportsd/country.png')  }}"
                                           alt="image"></span>
                                        <p class="year" style="">الدولة</p>
                                        <span class="Dtitle"> <img class="IncidentIm"
                                           width="30" height="30"
                                           src="{{ public_path('/uploads/reportsd/city.png')  }}"
                                           alt="image"></span>
                                        <p class="year" style="">الدولة</p>
                                        <span class="Dtitle"> <img class="IncidentIm"
                                           width="30"
                                           height="30"
                                           src="{{ public_path('/uploads/reportsd/counter.png')  }}"
                                           alt="image"></span>
                                        <p class="year">لم يحدد</p>
                                        <span class="Dtitle"> <img class="IncidentIm"
                                           width="30"
                                           height="30"
                                           src="{{ public_path('/uploads/reportsd/time.png')  }}"
                                           alt="image"></span>
                                        <p class="year" style="">الوقت</p>

                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"
                                            src="{{ public_path('/uploads/reportsd/location.png')  }}"
                                            alt="image"></span>
                                        <p class="year" style="">المكان</p>
                                        <span class="Dtitle QRCode"> <a href=""><img
                                            class="IncidentIm QRImg" width="50" height="50"
                                            src="{{ public_path('/uploads/reportsd/QR.png')  }}"
                                            alt="image"></a></span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @php
      $count++;
    @endphp
    @if ($count == 6)
        @php $page = ($page == 0) ? 1 : $page; @endphp
        @include('layouts.footer')
    @elseif ($totalPages == $page && $i+1 == $posts)
        @include('layouts.footer')
    @endif
@endfor
<!-- Footer Section Start -->
{{--@for($i=0;$i<4;$i++)--}}
{{--    <div class="wrapper1"><h3 style="">أخبار </h3>--}}
{{--        <div class="AllIncidents" style="">--}}
{{--            <table style="width: 100%;">--}}
{{--                <tr>--}}
{{--                    <td class="article-item-title"><p class="p">عنوان الخبر </p></td>--}}
{{--                </tr>--}}
{{--            </table>--}}
{{--            <table style="width: 100%;">--}}
{{--                <tr>--}}
{{--                    <td style="width: 15%;"><img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"--}}
{{--                                                 alt="image">--}}
{{--                        <div class="Date ds"><span class="Dtitle"><p class="year source"> المصدر</p><img--}}
{{--                                    class="IncidentIm postImg" width="80" height="55"--}}
{{--                                    src="{{ public_path('/uploads/reportsd/source_logo.png')  }}" alt="image"></span>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <div class="article-item-desc"><p>الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول</p><br></div>--}}
{{--                        <table style="width: 100%;">--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="Date">--}}
{{--                                        <span class="Dtitle"><img class="IncidentIm" width="30" height="30"--}}
{{--                                            src="{{ public_path('/uploads/reportsd/country.png')  }}"--}}
{{--                                            alt="image"></span>--}}
{{--                                        <p class="year" style="">الدولة</p>--}}
{{--                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"--}}
{{--                                           src="{{ public_path('/uploads/reportsd/city.png')  }}"--}}
{{--                                           alt="image"></span>--}}
{{--                                        <p class="year" style="">5 متابعين</p>--}}
{{--                                        <span class="Dtitle QRCode"> <a href=""><img--}}
{{--                                            class="IncidentIm QRImg" width="50" height="50"--}}
{{--                                            src="{{ public_path('/uploads/reportsd/QR.png')  }}"--}}
{{--                                            alt="image"></a></span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div> @endfor--}}
<!-- Footer Section Start -->
{{--<table style="width: 100%">--}}
{{--    <footer>--}}
{{--        <div class="copyright"><p style="text-align:left;"> من اصدارات غرفة الموقف</p></div>--}}
{{--    </footer>--}}
{{--</table>--}}
</body>
</html>
