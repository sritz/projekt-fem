<!DOCTYPE HTML>
<html lang="en">

<head>
    @include("Layouts.header")
</head>

<body>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>

@include("Layouts.scripts")

</body>
</html>
