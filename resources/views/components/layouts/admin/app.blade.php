<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MPP KABUPATEN WONOSOBO</title>
    <link rel="shortcut icon" href="{{ asset('images/pemda.ico') }}">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('limitless/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('limitless/layout_1/LTR/default/full/assets/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('limitless/layout_1/LTR/default/full/assets/css/bootstrap_limitless.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('limitless/layout_1/LTR/default/full/assets/css/layout.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('limitless/layout_1/LTR/default/full/assets/css/components.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('limitless/layout_1/LTR/default/full/assets/css/colors.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="{{ asset('limitless/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/notifications/pnotify.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('limitless/global_assets/js/plugins/visualization/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/anytime.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/notifications/jgrowl.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>
    <script src="{{ asset('limitless/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('limitless/layout_1/LTR/default/full/assets/js/app.js') }}"></script>
    <!-- /theme JS files -->

    @vite(['resources/js/app.js'])

    <livewire:styles />
</head>

<body class="navbar-top">

    <!-- Main navbar -->
    @include('components.layouts.admin.navbar')
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            @include('components.layouts.admin.sidebar')
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            {{ $header ?? '' }}
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                {{ $slot ?? '' }}
            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2023. by <a href="http://themeforest.net/user/Kopyov" target="_blank">TIM TIK DISKOMINFO
                            WONOSOBO</a>
                    </span>

                    <ul class="navbar-nav ml-lg-auto">

                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    <livewire:scripts />

    @stack('js')

    <script>
        // ini gk tau siapa yang pasang
        $('.select').select2({
            minimumResultsForSearch: Infinity
        });

        $('.select-perusahaan').select2({});

        Livewire.on('buatNotif', (type, title, message, icon = 'icon-blocked') => {
            new PNotify({
                title: title,
                text: message,
                icon: icon,
                type: type
            });
        });

        Livewire.on('select2', (e) => {
            $('.select-perusahaan').select2({});
        });
        window.addEventListener('block-card', event => {
            {{-- var message = event.detail.message; --}}
            $.blockUI({
                message: '<i class="icon-spinner4 spinner"></i>',
                timeout: 2000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#1b2024',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    color: '#fff',
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
            {{-- document.getElementById('message').innerHTML = message; --}}


        })
    </script>
</body>
