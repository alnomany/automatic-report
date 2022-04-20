<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ar" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            | غرفة الموقف للتحالف الإسلامي لعسكري لمحارية الإرهاب
        @show
    </title>
    <style>

        img {
            max-width: 100%;
            height: auto;
            display: inline-block;
            vertical-align: middle;
        }

        body, html {
            background-size: contain;
            overflow-x: hidden;
            direction: rtl;
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
            padding: 5px !important;
        }

        .copyright p {
            padding: 0 0;
            text-align: left;
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
            padding-top: 5px;
            padding-bottom: 5px;
            /*font-weight: bold;*/
        }

        .article-item-title .p {
            color: white;
            text-align: center;
            padding-top: 0;
            margin-top: 0;
            margin-bottom: 0 !important;
        }

        .IncidentIm {
            max-width: none;
            width: 30px;
            height: 30px;
        }

        .AllIncidents .IncidentImg {
            height: 115px;
            width: 100%;
            border: 2px solid #757b87;
            max-width: none;
        }

        .ds {
            text-align: right;
        }

        .QRCode {
            /*position: absolute;*/
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
            text-align: right;
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
            font-size: 16px;
            color: white;
            position: absolute;
            bottom: -279%;
            right: 0;
            margin-right: -94px;
            transform: rotate(270deg);
            transform-origin: 0 0;
        }

        .heading1 {
            border-bottom: 15px solid #d4bb6a;
            width: 75%;
            /*height: 30px;*/
        }

        .heading1 .Dtitle {
            font-size: 59px;
            color: #385623;
            font-weight: bold;
            display: block;
            margin-bottom: -80px;
        }

        p {
            font-size: 16px;
        }

        h5 {
            font-size: 16px;
        }

        .heading1 .year {
            font-size: 16px;
            color: #4D4D4D;
            /*font-weight: bold;*/
            margin-right: 80%;
            margin-bottom: 0;
            position: relative;
            bottom: 0;
        }

        @font-face {
            src: url('{{public_path('fonts/DINNextLTArabic-Regular-2.ttf')}}') format('truetype');
            font-family: DINNextLTArabic-Regular;

        }

        @font-face {
            src: url('{{public_path('fonts/din-next-lt-arabic-regular.ttf')}}') format('truetype');
            font-family: DINNext1;

        }

        *, body {
            font-family: DINNext1 !important;
        }

        .text-left p {
            text-align: left !important;
        }

        .AllIncidents {
            background: none !important;
        }

        header {
            position: absolute;
            top: -14px;
            /*
            position: fixed;
            top: 5px;
            */
            left: 0;
            right: 0;
            width: 100%;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
<!-- Header Start -->
<table style="width:100%; text-align: center;padding: 10px;">
    <tr>
        <td>
            <img width="150" height="150" style="max-width: none"
                 src="{{ public_path('/uploads/reportsd/logo2.png')  }}"
                 alt="image">
        </td>
        <td>
            <img width="40" height="40" style="max-width: none"
                 src="{{ public_path('/uploads/reportsd/line.png')  }}"
                 alt="image">
        </td>
        <td>
            <img width="150" height="150" style="max-width: none"
                 src="{{ public_path('/uploads/reportsd/report_daily.png')  }}"
                 alt="image">
        </td>
    </tr>
</table>
<!-- //Header End -->

<table style="width: 100%;padding-top:15px;">
    <tr>
        <td class="article-item-title">
            <p class="p">يوم الاثنين 1440 مايو 4</p>
        </td>
    </tr>
</table>
<br>
<div style="max-width: 1200px; margin-left: auto;margin-right: auto">
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
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@for($i=0;$i<5;$i++)
    <div class="wrapper">
        <h3 style="">أخبار </h3>
        <div class="AllIncidents" style="">
            <table style="width: 100%;">
                <tr>
                    <td class="article-item-title">
                        <p class="p">عنوان المقال </p>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="vertical-align: top;">
                        <div class="article-item-desc">
                            <p> نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص
                                المقال
                                نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص المقال نص المقال نص
                                المقال نص المقال نص المقال نص نص المقال نص المقال نص المقال نص المقال نص المقال نص نص
                                المقال
                                نص المقال نص المقال نص المقال نص المقال نصنص المقال نص المقال نص المقال نص المقال نص
                                المقال
                                نص المقال نص المقال نص المقال نص المقال نص المقال
                            </p><br>
                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="Date">
                                            <span class="Dtitle QRCode" style=""> <a href=""><img class="IncidentIm"
                                                                                                  width="50"
                                                                                                  height="50"
                                                                                                  src="{{ public_path('/uploads/reportsd/QR.png')  }}"
                                                                                                  alt="image"></a></span>

                                        <span class="Dtitle" style="margin-left: 50px"> <img class="IncidentIm"
                                                                                             width="30" height="30"
                                                                                             src="{{ public_path('/uploads/reportsd/location.png')  }}"
                                                                                             alt="image"></span>
                                        <p class="year" style="">المكان</p>


                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"
                                                                   src="{{ public_path('/uploads/reportsd/time.png')  }}"
                                                                   alt="image"></span>
                                        <p class="year" style="">الوقت</p>

                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"
                                                                   src="{{ public_path('/uploads/reportsd/counter.png')  }}"
                                                                   alt="image"></span>
                                        <p class="year">
                                            لم يحدد
                                        </p>
                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"
                                                                   src="{{ public_path('/uploads/reportsd/city.png')  }}"
                                                                   alt="image"></span>
                                        <p class="year" style="">الدولة</p>
                                        <span class="Dtitle"><img class="IncidentIm" width="30" height="30"
                                                                  src="{{ public_path('/uploads/reportsd/country.png')  }}"
                                                                  alt="image"></span>
                                        <p class="year" style="">الدولة</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"
                             alt="image">
                        <div class="Date ds">
                            <p class="year source"> المصدر</p>
                            <span class="Dtitle"> <img class="IncidentIm" width="60" height="30"
                                                       src="{{ public_path('/uploads/reportsd/source_logo.png')  }}"
                                                       alt="image"></span>
                        </div>

                    </td>
                </tr>
            </table>
        </div>
    </div>
@endfor
@for($i=0;$i<3;$i++)
    <div class="wrapper1">
        <h3 style="">أخبار </h3>
        <div class="AllIncidents" style="">
            <table style="width: 100%;">
                <tr>
                    <td class="article-item-title">
                        <p class="p">عنوان الخبر </p>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="vertical-align: top;">
                        <div class="article-item-desc">
                            <p> الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول
                                الخبر
                                الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر
                                الاول
                                الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول الخبر الاول
                            </p><br>
                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="Date">
                                           <span class="Dtitle QRCode" style=""> <a href=""><img class="IncidentIm"
                                                                                                 width="50" height="50"
                                                                                                 src="{{ public_path('/uploads/reportsd/QR.png')  }}"
                                                                                                 alt="image"></a></span>

                                        <span class="Dtitle" style="margin-left: 50px"> <img class="IncidentIm"
                                                                                             width="30" height="30"
                                                                                             src="{{ public_path('/uploads/reportsd/city.png')  }}"
                                                                                             alt="image"></span>
                                        <p class="year" style="    ">5 متابعين
                                        </p>
                                        <span class="Dtitle"> <img class="IncidentIm" width="30" height="30"
                                                                   src="{{ public_path('/uploads/reportsd/country.png')  }}"
                                                                   alt="image"></span>
                                        <p class="year" style="">الدولة</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 15%;">
                        <img class="IncidentImg" src="{{ public_path('/images/dincidents.png')  }}"
                             alt="image">
                        <div class="Date ds">
                            <span class="Dtitle">
                                        <p class="year source"> المصدر</p>
                                <img class="IncidentIm" width="60" height="30"
                                     src="{{ public_path('/uploads/reportsd/source_logo.png')  }}"
                                     alt="image"></span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endfor
<!-- Footer Section Start -->
<table style="width: 100%">
    <footer>
        <div class="copyright">
            <p style="text-align:left;"> من اصدارات غرفة الموقف</p>
        </div>
    </footer>
</table>
</body>

</html>
