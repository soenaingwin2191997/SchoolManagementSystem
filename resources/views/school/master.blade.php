<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management System</title> 
    <style>
        body{
            padding: 0;
            margin: 0;
            scroll-behavior: smooth;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="{{ asset('school/style.css') }}">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div style="height: 100vh;" class="col-2 overflow-auto bg-dark p-0">
                <nav class="navbar position-sticky top-0 bg-secondary d-block">
                    <div class="navbar-brand text-center">
                        <span class="fw-bold">SCHOOL</span>
                    </div>
                </nav>
                <div class="p-2">
                    <ul class=" list-group">
                        <li class=" list-group-item">
                            <a class=" list-group-item-action" href="#">
                                <span class="d-none d-md-block d-lg-block">
                                    hello
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="height: 100vh;" class="col-10 bg-info overflow-auto">
                <nav class=" navbar bg-secondary">
                    <div class="navbar-brand position-sticky top-0">
                        <a href="#" class=" nav-link">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                </nav>
                <div class="w-100 bg-danger">
                    @yield('school')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>