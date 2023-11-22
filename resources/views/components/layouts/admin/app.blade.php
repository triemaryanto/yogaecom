<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecom_frontend/assets/imgs/template/pemda.png') }}" />
    <link href="{{ asset('ecom_backend/') }}/assets/css/style.css?v=1.0.0" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
    <title>AYOPROMO - Dashboard</title>
    @vite(['resources/js/app.js'])
    <script src="{{ asset('ecom_backend/assets/ckeditor/ckeditor.js') }}"></script>
    @stack('css')
    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="screen-overlay"></div>
    @include('layouts.backend.sidebar')
    <main class="main-wrap">
        @include('layouts.backend.header')
        {{ $slot ?? '' }}
        @include('layouts.backend.footer')
    </main>

    @livewireScripts

    <script src="{{ asset('ecom_backend/') }}/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/vendors/chart.js"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/main.js?v=1.0.0"></script>
    <script src="{{ asset('ecom_backend/') }}/assets/js/custom-chart.js" type="text/javascript"></script>
    <script src="{{ asset('costum/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('costum/select2/js/form-select2.js') }}"></script>
    @stack('js')
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
