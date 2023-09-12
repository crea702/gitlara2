<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



<title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
    <nav>
        <ul>
            <li><a href="{{route('main.index')}}">Main</a></li>
            <li><a href="{{route('posts.index')}}">Posts</a></li>
            <li><a href="{{route('contact.index')}}">Contacts</a></li>
            <li><a href="{{route('about.index')}}">About</a></li>
        </ul>
    </nav>
</div>

@yield('content')
</div>


</body>
</html>
