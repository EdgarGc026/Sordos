<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Vista: Ver como.</title>
</head>
<body>
    @yield('breadcrumb')
    <div class="contaier-fluid">
        <div class="container">
            <div class="breadcrumb-main mt-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb cyan lighten-4">
                        <li class="breadcrumb-item">
                            <a class="black-text" href="#">Home</a>
                            <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                        </li>

                        <li class="breadcrumb-item"><a class="black-text" href="#">Exam</a>
                            <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                        </li>

                        <li class="breadcrumb-item active">Section Matematical thinking</li>
                        <li class="breadcrumb-item float-xl-right">
                            <button id="btn-left" class="btn btn-secondary btn-sm mr-2">back</button>
                            <button id="btn-left" class="btn btn-primary btn-sm mr-2"> question 1 of 25 </button>
                            <button id="btn-left" class="btn btn-secondary btn-sm mr-2">next</button>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
</body>
</html>

