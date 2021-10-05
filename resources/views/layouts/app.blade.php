<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="/icon.svg" />
    <title>HRM Admedika</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/notify/notify.min.css') }}">
    <style>
        .table-scroll {
            /* height: 100px !important; */
            overflow: scroll;
        }
    </style>
    @stack('styles')
    <livewire:styles />

    <script src="/js/app.js" defer></script>
    <script src="/js/backend.js" defer></script>
    <script type="text/javascript" src="{{ asset('backend/vendor/moment/moment.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
    <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}" defer></script>
    <script src="{{ asset('backend/vendor/notify/notify.js') }}"></script>
    @stack('js')
    @stack('before-livewire-scripts')
    <livewire:scripts />
    <script src="{{ asset('backend/vendor/turbolink/turbolink.js') }}"></script>
    @stack('after-livewire-scripts')

    @stack('alpine-plugins')
    <!-- Alpine Core -->
    <script src="{{ asset('backend/vendor/alpine/alpine.min.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Turbolinks.setProgressBarDelay(0);
        });
    </script>
    <style>
        .turbolinks-progress-bar {
            /* visibility: hidden; */
            height: 3px;
            /* background-color: red; */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed layout-navbar-fixed sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.partials.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{-- {{ $slot }} --}}
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->
    @stack('scripts')
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
