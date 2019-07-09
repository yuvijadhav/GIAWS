<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="440f88aaeb429ef6" />
        <meta name="msvalidate.01" content="98B96592A1CF68A7E56E00D608691902" />
        <meta name="google-site-verification" content="M6K83pmjB0PeXtQMD60R3Tfuuusj7Z1KruiilxH2wIs" />
        <meta name ="Naver-Site-Verification" Content = "987e76b56400f980fb0fea53b007586bc8890b8e" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Garner Insights') | Garner Insights </title>
        <!-- Meta -->
        @if (trim($__env->yieldContent('meta_title')))
        <meta name="title" content="@yield('meta_title', 'Garner Insights')">
        @endif
        <meta name="description" content="@yield('meta_desc', 'Garner Insights')">
        <meta name="keywords" content="@yield('meta_keywords', 'Garner Insights')">

        <link rel="icon" type="image/png" href="img/favicon.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('css/allinone.css')}}">
        <link rel="stylesheet" href="{{ asset('theme-vendor/OwlCarousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('theme-vendor/OwlCarousel/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('theme-vendor/noUiSlider/nouislider.min.css')}}">
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
            baseURL = "{{config('app.baseURL')}}";
        </script>
        <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script> 
        <script src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{ asset('js/template.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/mustache.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/pagination.js')}}" type="text/javascript"></script>

        <script type="text/javascript">
            function loadCSS(filename) {
                var file = document.createElement("link");
                file.setAttribute("rel", "stylesheet");
                file.setAttribute("type", "text/css");
                file.setAttribute("href", filename);

                if (typeof file !== "undefined") {
                    document.getElementsByTagName("head")[0].appendChild(file)
                }
            }
            loadCSS("https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css");
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111948978-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-111948978-1');
            gtag('config', 'AW-819970391');
        </script>
        <!-- JavaScript --> 
        <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script> 
        <script type="text/javascript">
            $(document).ready(function () {
                $('#request-quote').click(function () {
                    $('#button-trigger').click();
                });
            });
        </script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5a6032fdd7591465c706dbe1/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
            _paq.push(["setCookieDomain", "*.www.garnerinsights.com"]);
            _paq.push(["setDomains", ["*.www.garnerinsights.com"]]);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "https://garnerinsights.matomo.cloud/";
                _paq.push(['setTrackerUrl', u + 'matomo.php']);
                _paq.push(['setSiteId', '3']);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'matomo.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <script type="text/javascript">

            function chooseCategory(data) {
                var id = data;
                console.log(data);
                var x = document.getElementById("id1").submit();
            }

        </script>
        <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5186043.js"></script>
        <!-- Yandex.Metrika counter --> 
        <script type="text/javascript" > (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter50853775 = new Ya.Metrika2({id: 50853775, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true, trackHash: true});
                    } catch (e) {
                    }
                });
                var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                    n.parentNode.insertBefore(s, n);
                };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks2");</script> <!-- /Yandex.Metrika counter -->
        <style type="text/css">
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                display: none;
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url("{{Config('app.baseURL')}}/images/loader.gif") center no-repeat rgba(255,255,255,0.5);
            }

            .calibri{
                font-family:"calibri";
            }
            #cursor{
                cursor: pointer;
            }
            @media only screen and (max-width: 500px) {
                #index-padding1{
                    margin-left: 20px;
                    margin-right: 20px;
                    margin-top: 20px;
                }
            }
            a div span{
                color:#000;
            }
            a .latest-home-report{
                border: none;
            }
            .single-item-grid .item-img img{
                height: 50px;
            }
            .product-page-list .container a{
                cursor: pointer;
            }

            #padding-none{
                padding-bottom: 5px;
            }
            .inner-block{
                background-color: #fff;
                margin: 10px;
                min-height: 254px;
                text-align: center;
                padding: 30px 10px 10px 10px;
            }
            .inner-block h3{
                color: #000;
                margin-bottom: 10px;
            }
            .inner-block p{
                color: #000;
            }
        </style>
    </head>
    <!-- Header Area Start Here -->
    <div id="wrapper">
        @include("layouts.header")
        @yield('content')
        @include("layouts.footer")
    </div>
    <script src="{{ asset('js/core.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/zebra_datepicker.js')}}" type="text/javascript"></script>

</body>
</html>
