<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Guntzell | E-mail</title>

    <link rel="stylesheet" href="{{url(asset('backend/assets/css/libs.css'))}}">
    <link rel="stylesheet" href="{{ url(asset('backend/assets/css/style.css')) }}">

    @hasSection('css')
        @yield('css')
    @endif

    <link rel="shortcut icon" type="image/png" href=""/>
</head>

<body style="background: #f7f7f7;">

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container  text-center">
            <div class="row">
                <div class="col-12 mt-4">
                    <h4 class="text-white">Resumo</h4>
                    <p class="text-muted">Template simples para disparo de e-mail de contato.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{ route('web.index') }}" class="navbar-brand d-flex align-items-center">
                <i class="fas fa-envelope fa-2x text-orange mr-2"></i>
                <strong>E-mail</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

    @yield('content')

</main>

<footer class="text-muted">
    <div class="container">
        <small>Solution <i class="fa fa-copyright"></i> by
            <span class="text-secondary font-weight-bold">
                <a href="https://www.guntzell.com" class="text-secondary font-weight-bold" target="_blank">
                    Guntzell
                </a>
            </span>
        </small>
    </div>
</footer>

<!-- using local scripts -->
<script src="{{ url(asset('backend/assets/js/jquery.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/libs.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/scripts.js')) }}"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>
