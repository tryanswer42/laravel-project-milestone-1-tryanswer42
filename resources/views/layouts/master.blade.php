@include('partials.headcontent')

@include('partials.bannercontent')

<body>

@include('partials.navbarcontent')

<main class="container">
    @yield('content')
</main>
@include('partials.scriptcontent')
@include('partials.footercontent')

</body>
</html>
