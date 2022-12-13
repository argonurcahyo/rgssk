<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Error - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/error.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}" type="image/png" />
</head>

<body>
    <div id="error">
        @yield('content')
    </div>
</body>

</html>
