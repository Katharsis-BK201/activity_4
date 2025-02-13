<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/build/assets/css/style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        
        <div class="logo">
            <img src="/build/assets/img/perc-hub-high-resolution-logo-transparent.png" alt="logo" class="img-logo">
            <h1>Perc Hub</h1>
        </div>
        <div class = "burger-icon"><ion-icon name="reorder-four-outline"></ion-icon></div>
            <nav class = "navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
            
            
    </header>
    <script src = "{{asset('/build/assets/js/script.js')}}"></script>
</body>
</html>