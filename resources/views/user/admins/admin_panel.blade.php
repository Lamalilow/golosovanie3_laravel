<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/bootstrap.css">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>@yield('title', "Администирование")</title>
</head>
<body>
@include('components.header')
<div class="container">
    <div class="row mt-lg-4">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('addVote') }}">Голосования</a>
        </div>
    </div>
</div>
@yield('content')

</body>
</html>



