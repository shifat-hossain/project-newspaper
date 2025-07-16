<!DOCTYPE html>
<html lang="en">
    <head>

        @include('admin.layout.headerlink')

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            @include('admin.layout.topnav')

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                    <div class="sb-sidenav-menu">
                        @include('admin.layout.sidenav')
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                <main>

                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>

                </main>

                <footer class="py-4 bg-light mt-auto">
                    @include('admin.layout.footer')
                </footer>

            </div>
        </div>
        
		@include('admin.layout.footerlink')

		@yield('extra_script')
    </body>
</html>
