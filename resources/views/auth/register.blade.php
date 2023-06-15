<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
   
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
        }
        .sm-container {
        max-width: 450px; /* Spécifiez la largeur maximale souhaitée */
        margin: auto; /* Centre le conteneur horizontalement */
    }
        
    </style>
    </head>
<body>
    <div class="container sm-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("S'inscrire") }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class=" col-form-label text-md-right">{{ __('NomPrénom*') }}</label>

                                
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="col-form-label text-md-right">{{ __('Numéro*') }}</label>
                                
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="mb-3">
                                <label for="email" class=" col-form-label text-md-right">{{ __('Email*') }}</label>

                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            

                                <div class="mb-3">
                                <label for="password" class=" col-form-label text-md-right">{{ __('Motdepasse*') }}</label>

                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            

                                <div class="mb-3">
                                <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirmer votre motdepasse*') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            

                                <div class="mb-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary register-button bg-dark text-white">
                                        {{ __("S'inscrire") }}
                                    </button>
                                </div>
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="" href="{{ route('login') }}">
                                            {{ __("Se connecter") }}
                                        </a>
                                    </li>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

