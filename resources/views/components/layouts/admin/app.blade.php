<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/images/dashboard/favicon.png"
        type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/images/dashboard/favicon.png"
        type="image/x-icon" />
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/font-awesome.css" />

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/flag-icon.css" />

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/icofont.css" />

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/prism.css" />

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/chartist.css" />

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/vendors/bootstrap.css" />

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/multikart_all_in_one/back-end/') }}/assets/css/style.css" />

    @stack('css')
    <!-- Styles -->
    @vite(['resources/js/app.js'])
    @livewireStyles

</head>

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Header Start-->
        @include('components/layouts/admin/header')
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('components/layouts/admin/sidebar')
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            @include('components/layouts/admin/rightbar')
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                {{ $slot ?? '' }}
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->

                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            @include('components/layouts/admin/footer')
            <!-- footer end-->
        </div>
    </div>
    @livewireScripts
    @stack('js')
    <!-- latest jquery-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/prism/prism.min.js"></script>
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/js/admin-script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('Delete', event => {
            Swal.fire(
                'Deleted!', 'Data has been deleted.', 'success'
            )
        });
        window.addEventListener('Success', event => {
            Swal.fire(
                'Good job!', 'Data has been added.', 'success'
            )
        });
        window.addEventListener('Update', event => {
            Swal.fire(
                'Good job!', 'Data has been updated.', 'success'
            )
        });
        window.addEventListener('Error', event => {
            Swal.fire(
                'Warning !', 'Data Not Excecution.', 'error'
            )
        });

        window.addEventListener('swal:modal', event => {
            Swal.fire({
                icon: event.detail.type, // Jenis alert
                title: event.detail.title, // Judul pesan
                text: event.detail.text, // Isi pesan
                toast: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true
            });
        });
    </script>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('confirmRestore', (url) => {
                Swal.fire({
                    title: 'Restore.',
                    text: "Apakah akan Restore data tersebut ?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Restore!'
                }).then((result) => {
                    if (result.value) {
                        Livewire.emit('restoreRecord', url);
                    }
                });
            });
        });
        document.addEventListener('livewire:load', function() {
            Livewire.on('confirmDelete', (url) => {
                Swal.fire({
                    title: 'Delete Permanen.',
                    text: "Apakah akan delete secara permanen? Proses ini tidak bisa di ulangi.",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete Permanen!'
                }).then((result) => {
                    if (result.value) {
                        Livewire.emit('deleteRecord', url);
                    }
                });
            });
        });
        document.addEventListener('livewire:load', function() {
            Livewire.on('showNotification', ($message) => {
                Swal.fire({
                    title: 'Info Masseh !.',
                    text: $message,
                    type: 'warning',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Siap Masseh.'
                })
            });
        });
    </script>
</body>

</html>
