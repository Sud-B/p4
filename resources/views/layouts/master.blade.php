<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>

    {{-- CSS global to every page can be loaded here --}}
    <link href='/css/sams.css' rel='stylesheet'>

    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>
<header>
    <h1> Sam's Soup shop</h1>
        <nav>
            <ul>
                <li id="navpart1"><a href="index.html">Main page</a></li>
                <li id="navpart2"><a href="menu.html">Menu</a></li>
                <li id="navpart3"><a href="form.html">Online orders</a></li>
            </ul>
        </nav>
</header>
<section>
    @yield('content')
</section>
<footer>
    <p>Located at 3330 Broadway, NY 10031; Phone: 212-222-4242</p>
</footer>

{{-- JS global to every page can be loaded here; jQuery included just as an example --}}
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

{{-- JS specific to a given page/child view can be included via a stack --}}
@stack('body')

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: s999b
 * Date: 11/14/2018
 * Time: 1:21 PM
 */
