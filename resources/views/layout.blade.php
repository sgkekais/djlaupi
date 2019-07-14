<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('header')

    @include('nav')

    <body id="page-top">

    @yield('content')

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; {{ date('Y') }} | <a href="{{ route('imprint') }}" title="Impressum">Impressum</a> | <a href="{{ route('imprint') }}" title="Datenschutzinformationen">Datenschutz</a> </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    </body>

</html>