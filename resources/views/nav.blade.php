<nav class="navbar navbar-expand navbar-dark purple-gradient">

    <a class="navbar-brand" href="/"><i class="fab fa-laravel mr-1"></i>CHIBACONDA</a>
  
    <ul class="navbar-nav ml-auto">

      {{-- @auth --}}
      <li class="nav-item">
        <a class="nav-link" href="/profile"><i class="fas fa-pen mr-1"></i>設定</a>
      </li>
      {{-- @endauth --}}
  
      @auth
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <button
            class="dropdown-item"
            type="button"
          >
            マイページ
          </button>
          <button form="logout-button" class="dropdown-item" type="submit">
            ログアウト
          </button>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <form id="logout-button" method="POST" action="">
        @csrf
      </form>
      <!-- Dropdown -->
      @endauth
  
    </ul>
  
  </nav>