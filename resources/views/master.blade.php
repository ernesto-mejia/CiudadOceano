<!DOCTYPE html>
<!--html-->
    <html lang="es">
        <!--head-->
            <head>

                <!--metas-->
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <meta name="routeName" content="{{ Route::currentRouteName() }}">
                    <meta name="description" content="{{$company[0]->description}}"/>

                <!--icon-->
                    <link rel="icon" type="image/png" href="{{ url('multimedia'.$company[0]->file_path.'/'.$company[0]->file) }}" />

                <!--title-->
                    <title> {!! html_entity_decode($company[0]->company_name, ENT_QUOTES | ENT_XML1, 'UTF-8') !!} @yield('title')</title>

                <!--CSS-->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
                    <link rel="stylesheet" href="{{ url('/fontawesome/css/all.css') }}">
                    <link rel="stylesheet" href="{{ url('/css/style.css?v='.time()) }}">
                    <link rel="stylesheet" href="{{ url('/css/font.css?v='.time()) }}">
                    <link rel="stylesheet" href="{{ url('/css/querys.css?v='.time()) }}">
                    <link rel="stylesheet" href="{{ url('/css/bubbles.css?v='.time()) }}">
                    @yield('css')

            </head>
        <!--body-->
            <body>
                <!--CookieConsent-->
                    @include('cookieConsent::index')

                <!--NavBar-->
                    @include('blog.partials.navbar')

                <!--Alert errors-->
                    @if (Session::has('message'))
                        <div class="container mt-2">
                            <div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
                                {{ Session::get('message') }}
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                <!--Content-->
                <div class="cont__ Bubbles"  >
                    @yield('content')
                </div>

                <div class="">
                    <div class="bubble bubble--1"></div>
                    <div class="bubble bubble--2"></div>
                    <div class="bubble bubble--3"></div>
                    <div class="bubble bubble--4"></div>
                    <div class="bubble bubble--5"></div>
                    <div class="bubble bubble--6"></div>
                    <div class="bubble bubble--7"></div>
                    <div class="bubble bubble--8"></div>
                    <div class="bubble bubble--9"></div>
                    <div class="bubble bubble--10"></div>
                    <div class="bubble bubble--11"></div>
                    <div class="bubble bubble--12"></div>
                  </div>
                <!--Script-->
                    <script src="{{ asset('js/jquery.js') }}"></script>
                    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
                    <script src="{{ asset('js/utils.js') }}"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="{{ asset('js/site.js') }}"></script>
                    <script src="{{ asset('js/bold.js') }}"></script>
                    <script>
                        $.getJSON("https://api64.ipify.org?format=json", function(data) {

                            document.cookie= `"id=${data.ip}; SameSite=None; Secure;"`;
                            console.log('getIP: '+data.ip);

                        });
                    </script>
                    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
                    <script>
                        window.OneSignal = window.OneSignal || [];
                        OneSignal.push(function() {
                            OneSignal.init({
                            appId: "b5bd90e7-a916-4fdd-8e52-014cc7fe78de",
                            safari_web_id: "web.onesignal.auto.456a4abd-b5a3-4365-958f-9af6b49613be",
                            notifyButton: {
                                enable: true,
                            },
                            allowLocalhostAsSecureOrigin: true,
                            });
                        });

                        //<!-- ----------------------------------------------------------------------- -->


                        $(document).ready(function () {
                            const settings = {
                            "async": true,
                            "crossDomain": true,
                            "url": "https://onesignal.com/api/v1/players?app_id=b5bd90e7-a916-4fdd-8e52-014cc7fe78de&limit=20&offset=offset",
                            "method": "GET",
                            "headers": {
                                "Accept": "text/plain",
                                "Authorization": "Basic Mjg5NTY1N2ItZmIzMi00YTQ0LTgzMDktMTliOTIxNTM0MDA2",
                                "Content-Type": "application/json; charset=utf-8"
                            }
                            };


                            $.ajax(settings).done(function (response) {
                                var listaCookies = document.cookie.split(";");
                                for (i in listaCookies) {
                                    var busca = listaCookies[i].search("id");
                                    if (busca > -1) {micookie=listaCookies[i];}

                                }
                                var igual = micookie.indexOf("=");
                                let valor = micookie.substring(igual+1);
                                console.log('oneSignalIP:'+valor);

                                var getBrowserInfo = function() {
                                    var ua= navigator.userAgent, tem,
                                    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                                    if(/trident/i.test(M[1])){
                                        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
                                        return 'IE '+(tem[1] || '');
                                    }
                                    if(M[1]=== 'Chrome'){
                                        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
                                        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
                                    }
                                    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
                                    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
                                    return M.join(' ');
                                };

                            console.log(getBrowserInfo().substring(0, 3));

                                response.players.forEach(function(element) {
                                    if(getBrowserInfo().substring(0, 3) == 'Fir' && element.device_type == 8){


                                        if (element.ip == valor) {

                                        console.log('firefox:'+element.ip);
                                        console.log(document.cookie= `"os=${element.id}; SameSite=None; Secure;"`);
                                        }


                                    } else if (getBrowserInfo().substring(0, 3) == 'Chr' && element.device_type == 5){
                                        console.log('crohme:'+element.ip);
                                        console.log(document.cookie= `"os=${element.id}; SameSite=None; Secure;"`);
                                    }

                                });

                            });
                        });

                        function addClient() {
                            var listaCookies = document.cookie.split(";");
                            console.log('lista: '+listaCookies);
                            for (i in listaCookies) {
                                var busca = listaCookies[i].search("os");
                                console.log(busca);
                                if (busca > -1) {
                                    micookie2=listaCookies[i];
                                    var igual = micookie2.substr(5);
                                    let valor = igual;
                                    let mensaje = 'El cliente tal se agrego a tu listado';
                                    let titulo = 'Se agrego un cliente';
                                    console.log('igual: '+ valor);
                                    $.ajax({
                                        type    : 'POST',
                                        url     : 'https://onesignal.com/api/v1/notifications',
                                        cache   : true,
                                        headers : {
                                                    'mode': 'no-cors',
                                                    'Accept': 'application/json',
                                                    'Content-Type': 'application/json',
                                                    'Authorization': 'Basic Mjg5NTY1N2ItZmIzMi00YTQ0LTgzMDktMTliOTIxNTM0MDA2',
                                                    'Access-Control-Allow-Origin': '*',
                                                    'Access-Control-Allow-Credentials': 'true',
                                                    'Access-Control-Allow-Methods': 'GET, POST, OPTIONS, PUT, PATCH, DELETE',
                                                    'Access-Control-Allow-Headers': 'Access-Control-Allow-Credentials, Authorization, Access-Control-Allow-Origin, Accept, Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers'
                                                },
                                        data    :   "{\"app_id\": \"b5bd90e7-a916-4fdd-8e52-014cc7fe78de\",\n\"data\": {\"userId\": \"POSTman1235\"},\n  \"contents\": {\"en\": \""+mensaje+"\", \"es\": \""+mensaje+"\"},\n  \"headings\": {\"en\": \""+titulo+"\", \"es\": \""+titulo+"\"},\n  \"include_player_ids\": [\""+valor+"\"]\n}",
                                        dataType: 'json',
                                        beforeSend: function () {
                                            //$("#overlay").fadeIn();
                                        },
                                        success: function ( response ) {
                                            //location.reload();
                                            //$("#overlay").fadeOut();
                                                console.log( response );
                                        },
                                        error: function ( response ) {
                                            //console.log( response );

                                        }
                                    });
                                }
                            }
                        }

                    </script>
                    <!--individual-Script-page-->
                        @yield('scripts')
            </body>
    </html>

