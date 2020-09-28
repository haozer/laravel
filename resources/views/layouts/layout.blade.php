<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <style>
            main > .container {
              padding: 20px 10px 0;
            }
        </style>

        <title>@yield('title')</title>
    </head>
    <body class="d-flex flex-column sticky-footer-wrapper min-vh-100">
        <header>
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="/">PizzaHouse</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" href="/pizzas?name=haodam&age=124">Index</a>
                    <a class="nav-link" href="/pizzas/hao">Show</a>
                    <a class="nav-link" href="/pizzas/create">Create</a>
                    </div>
                </div>
            </nav>
        </header>
        
        <!-- Begin page content -->
        <main role="main" class="flex-fill">
            <div class="container">
                @yield('body')
            </div>
        </main>

        <footer class="footer mt-auto py-3 bg-dark">
            <div class="container">
                <span class="text-muted">Copyright 2020 PizzaHouse</span>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
