<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
        }
        .sm-container {
        max-width: 400px; /* Spécifiez la largeur maximale souhaitée */
        margin: auto; /* Centre le conteneur horizontalement */
    }
    </style>
</head>

<body>
    <div class="container sm-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Se connecter') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Adresse e-mail*') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Mot de passe*') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
    
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary connexion-button bg-dark text-white">
                                    {{ __('connexion') }}
                                </button>
                            </div>
    
                            @if (Route::has('password.request'))
                            <div class="mt-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            </div>
                            @endif
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    