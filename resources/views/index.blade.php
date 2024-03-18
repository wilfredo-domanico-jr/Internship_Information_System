<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body{
            background: #f9fafb;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand  text-white" href="#">
                Logo
              </a>
            </div>
          </nav>

          <div class="container">
                <jop-posting-component/>
          </div>
    </div>
</body>

<script src="{{asset('js/app.js')}}"></script>
</html>