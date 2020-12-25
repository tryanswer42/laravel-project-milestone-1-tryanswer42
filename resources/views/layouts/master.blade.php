@include('partials.headcontent')
<div id="banner-wrapper">
@include('partials.bannercontent')
</div>
<body>

@include('partials.navbarcontent')

<div class="container">
    @yield('content')
</div>
@include('partials.scriptcontent')
@include('partials.footercontent')

</body>
</html>
