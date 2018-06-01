<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Fonts & Spreadsheets -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        <div id="logo">
            SHACK
        </div>
        
        <div id="search">
            <input type="text">
            <i class="fa fa-search"></i>
        </div>

        <div id="account">
            <ul>
                <li>My Account</li>
                <li>Help</li>
                <li>Store Locator</li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>