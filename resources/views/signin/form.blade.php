<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>login dua putra</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="shorcut icon" href="assets/img/dp.png" type="image/x-icon">
    {{-- bootsrap-icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap core CSS -->
    <link href="aset/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            background-image: url("aset/brand/book.jpg");
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="css-sigin/style.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        @if (session('setatus'))
            <div class="alert alert-success">
                {{ session('setatus') }}
            </div>
        @endif
        @if (session('eror'))
            <div class="alert alert-danger">
                {{ session('eror') }}
            </div>
        @endif
        <div class="card w-200">
            <div class="container">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal border-bottom"><b> DUA PUTRA</h1>
                    <small class="mt-1">signin to start your session</small>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" placeholder="email" name="email" autofocus required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit"><i class="bi bi-box-arrow-right"></i>
                        Login</button>
                </form>
                <br>
                <small>belum punya akun <a href="/registrasi">klik daftar</a></small>
                <br><br><br>
            </div>
        </div>
    </main>



</body>

</html>
