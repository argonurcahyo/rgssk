<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @yield('page-styles')
</head>

<body>
    <script src="{{ asset('js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar" class="active">
            @include('includes.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                @include('includes.header')
            </header>
            <div class="page-heading">
                @yield('heading')
            </div>
            <div class="page-content">
                @yield('content')
            </div>
            <footer>
                @include('includes.footer')
            </footer>

        </div>
    </div>
    @include('includes.scripts')
    @yield('page-scripts')

</body>

</html>
