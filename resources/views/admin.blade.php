<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ControlPanel</title>
{{--    <link rel="shortcut icon" href="{{asset('assets/images/LogoEMS.png')}}">--}}
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
{{--    <link rel="stylesheet" href="{{ asset('admins/font-awesome.min.css') }}">--}}
    <link href="{{ asset('admins/boostrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admins/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admins/main.css') }}" rel="stylesheet">
    <link href="{{ asset('admins/dropzone-5.7.css') }}" rel="stylesheet">
    <link href="{{ asset('admins/pages.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admins/bootstrap-datetimepicker.css') }}">
    <link href="{{ asset('admins/select2.min.css') }}" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    @livewireStyles
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('admins.partials.header')
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                @include('admins/partials/sidebar')
            </div>
        </div>
        <div class="app-main__outer">
            @include('admins.partials.notification')
            {{ $slot }}
{{--            @yield('content')--}}

            <div class="app-wrapper-footer">
                <div class="app-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detailOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="modal fade" id="detail-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
<div id="loading">
    <img id="loading-image" src="{{ asset('admins/assets/images/loader-3.gif') }}" style="width: 300px; margin-top: 10%" alt="Loading..." />
</div>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@if(Session::has('success_message_order'))
    <input type="hidden" name="waitOrder" data-url="{{route('send.notification')}}" value="{!! session('success_message_order') !!}">
@else
    <input type="hidden" name="waitOrder" value="-1">
@endif
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script src="{{ asset('admins/assets/scripts/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/pages.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/dropzone-5.7.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/datatable/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admins/assets/scripts/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admins/assets/scripts/datatable/bootstrap-datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/assets/scripts/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stack('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.fn.dataTable.ext.errMode = 'throw';
    function GetAvatar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#load_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function GetAvatarNew(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#load_image_new').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).on('change','.new_image',function (){
        let icon = '{{asset('Docs-icon.png')}}';
        let _this = $(this);
        let files = $(this)[0].files[0];
        if (files) {
            let name = files.name;
            var reader = new FileReader();
            reader.onload = function (e) {
                _this.closest('.div-remove').find('.img-file img').attr('src', e.target.result);
            }
            reader.readAsDataURL(files);
        }
    });
</script>
@livewireScripts
</body>

</html>
