@include('partials.headcontent')
<div id="banner-wrapper">
@include('partials.bannercontent')
</div>
<body>

@include('partials.navbarcontent')

<main class="container">
    @yield('content')
</main>
@include('partials.scriptcontent')
@include('partials.footercontent')

</body>
</html>
