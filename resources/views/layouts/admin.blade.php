<!DOCTYPE html>
<html lang="en">

<head>
    <title>Softgird API Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Datepickere --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/jquery.datetimepicker.full.js') }}"></script>
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> --}}
    @yield('custom-style')
</head>


<body>
    @if(Auth::check())
        @include('includes.nav')
    @endif

    @yield('web-heading')
    <div class="container mt-5">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> {{ session("error") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> {{ session("success") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    @yield('main-content')

    @yield('custom-script')

</body>

</html>