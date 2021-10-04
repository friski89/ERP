<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- jQuery -->
        <script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}" defer></script>
        <!-- Bootstrap Core JS -->
        <script src="{{ URL::to('assets/js/popper.min.js') }}" defer></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}" defer></script>
        <!-- Chart JS -->
        <script src="{{ URL::to('assets/plugins/morris/morris.min.js') }}" defer></script>
        <script src="{{ URL::to('assets/plugins/raphael/raphael.min.js') }}" defer></script>
        <!-- Slimscroll JS -->
        <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}" defer></script>
        <!-- Select2 JS -->
        <script src="{{ URL::to('assets/js/select2.min.js') }}" defer></script>
        <!-- Datetimepicker JS -->
        <script src="{{ URL::to('assets/js/moment.min.js') }}" defer></script>
        <script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" defer></script>
        <!-- Datatable JS -->
        <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}" defer></script>
        <script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}" defer></script>
        <!-- Multiselect JS -->
        <script src="{{ URL::to('assets/js/multiselect.min.js') }}" defer></script>
        <!-- Custom JS -->
        <script src="{{ URL::to('assets/js/app.js') }}" defer></script>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
        <!-- Chart CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/plugins/morris/morris.css') }}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

        {{-- message toastr --}}
        <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
        <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

        <!-- Icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script>
        @livewireStyles

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            @include('layouts.partials.header')
			<!-- /Header -->

			<!-- Sidebar -->
            @include('layouts.partials.sidebar')

			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">

					@yield('content')

				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

         @livewireScripts

        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

        @stack('scripts')

        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

        @if (session()->has('success'))
        <script>
            const notyf = new Notyf({dismissible: true})
            notyf.success('{{ session('success') }}')
        </script>
        @endif

        <script>
            /* Simple Alpine Image Viewer */
            function imageViewer(src = '') {
                return {
                    imageUrl: src,

                    refreshUrl() {
                        this.imageUrl = this.$el.getAttribute("image-url")
                    },

                    fileChosen(event) {
                        this.fileToDataUrl(event, src => this.imageUrl = src)
                    },

                    fileToDataUrl(event, callback) {
                        if (! event.target.files.length) return

                        let file = event.target.files[0],
                            reader = new FileReader()

                        reader.readAsDataURL(file)
                        reader.onload = e => callback(e.target.result)
                    },
                }
            }
        </script>

    </body>
</html>
