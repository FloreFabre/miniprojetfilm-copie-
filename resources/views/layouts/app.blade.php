<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind Starter Template - Minimalist Blog: Tailwind Toolbox</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link href="{{asset('./css/app.css')}}" rel="stylesheet">
    
        
    </head>
       
   
    <body class="bg-gray-100 text-gray-700 font-sans quicksand">
        <header>
            @include('layouts.navbar')
        </header>

        <main>
            @yield('main')
        </main>
        
        <footer>
            @include('layouts.footer')
        </footer>
     
       
    
</body>
</html>