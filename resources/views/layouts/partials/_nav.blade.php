<nav class="navbar navbar-expand-xxl navbar-dark bg-dark" aria-label="Seventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home_path') }}">Laracom</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleXxl">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home_path') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about_path') }}">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false">Univers</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownXxl">
              <li><a class="dropdown-item" href="https://laravel.com/">Laravel.com</a></li>
              <li><a class="dropdown-item" href="https://laravel.io/">Laravel.io</a></li>
              <li><a class="dropdown-item" href="https://laracasts.com/">Laracasts</a></li>
              <li><a class="dropdown-item" href="https://larajobs.com/">Larajobs</a></li>
              <li><a class="dropdown-item" href="https://laravel-news.com/">Laravel News</a></li>
              <li><a class="dropdown-item" href="https://larachat.com/">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-xl-0 navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">S'inscrire</a>
              </li>
        </ul>
        {{--<form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>--}}
      </div>
    </div>
  </nav>
