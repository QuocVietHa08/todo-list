<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Todo list</title>
</head>
<body>
    @include('inc.navbar')
    @include('inc.message')
   <div>
       @yield('content')
   </div> 
</body>
<footer>
    @include('inc.footer')
</footer>
</html>