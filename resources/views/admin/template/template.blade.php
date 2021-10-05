<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Boxicons CDN Link -->
        
    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Admin Panel</title>
</head>
<body>

    @include('admin.partials.nav')
    <section class="home-section">
        <div class="text">
                @yield('back')
        </div>
    </section>



</body>
</html>