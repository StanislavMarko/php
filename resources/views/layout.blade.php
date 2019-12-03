<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

</head>

<body>


<ul>
    <li><a href="/">Welcome page</a></li>
    <li><a href="/contact">Contact</a> us to learn more.</li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/info">Information</a></li>
    <li><a href="/projects">Projects</a></li>
</ul>
<div class="container">@yield('content')</div>

</body>
</html>
