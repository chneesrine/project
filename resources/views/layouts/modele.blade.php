<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Satisfaction client</title>

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <script src="{{asset('js/Chart.min.js')}}"></script>


    <style>
      .flex-container {
        display: flex;
        align-items: center; /* Alignement vertical au centre */
      }
      .flex-container form {
        margin-left: 10px; /* Marge entre le lien et le formulaire */
      }
    </style>

  </head>
<style>
  .flex-container {
    display: flex;
    align-items: center; /* Alignement vertical au centre */
  }
  .flex-container form {
    margin-left: 10px; /* Marge entre le lien et le formulaire */
  }
</style>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Satisfaction client</a>
      <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
          <div class="flex-container">
            <a class="nav-link text-white" href="{{ route("user.edit", Auth::user()->id) }}">{{ Auth::user()->name }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary" style="white-space: normal;">Déconnexion</button>
          </form>
          
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <br>
            <br>
            <tr height=100px>
              <td>
                <a class="nav-link active" href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2l6 6v6H2V8L8 2zm1 6H7v5h2V8z"/>
                    </svg>
                    {{ __('Home') }}
                </a>
            </td>
            
            
              <td></td>
          </tr>
          <tr>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('emplacement.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M8 1.144a4.5 4.5 0 0 0-4.5 4.5c0 3.066 3.78 6.82 4.156 7.24a.5.5 0 0 0 .688 0C8.72 12.464 12.5 8.71 12.5 5.644a4.5 4.5 0 0 0-4.5-4.5zm0 6.775a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-2.82-3.004a.5.5 0 0 0-.094.706l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5a.5.5 0 0 0-.708-.706L8 6.793l-1.678-1.679a.5.5 0 0 0-.707.708z"/>
                    </svg>
                    Emplacements
                </a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('appariel.index') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 16c-3.866 0-7-3.134-7-7s3.134-7 7-7 7 3.134 7 7-3.134 7-7 7zm0-12c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5zm0 8c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm1-3h2v2h-2v-2zm-4 0h2v2H9v-2z"/>
                  </svg>
                  Appareils
              </a>
          </li>
          
          
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Historiqueavis.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M20 10h2v10h-2zM16 10h2v14h-2zM12 4h2v20h-2zM8 16h2v8H8zM4 19h2v5H4z"/>
                </svg>
                Historique avis
            </a>
        </li>
        
        
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('titre')</h1>
          </div>

          @yield('contenu')


        </main>
      </div>
    </div>


  </body>
</html>
