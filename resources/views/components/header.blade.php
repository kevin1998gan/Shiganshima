<header>
    <div class="header-up">
        <div class="app-btn">
            <i class="fas fa-bars"></i>
        </div>
        <div class="logo">
            <div class="logo-up">シガンシナ</div>
            <div class="logo-down">shiganshina clothes</div>
        </div>
        <div class="btn-panel">
            <div class="sign-in">
                <i class="far fa-user"></i>
            </div>
            <div class="favourites">
                <i class="far fa-heart"></i>
            </div>
            <div class="cart">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
    <div class="header-down">
        <ul class="navPage">
            <li class="navPage-item"><a href="/user">Home</a></li>
            <li class="navPage-item"><a href="/men/men">men</a></li>
            <li class="navPage-item">women</li>
            <li class="navPage-item">kids</li>
            <a class="dropdown-item" href="{{ url('logoutUser') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ url('logoutUser') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </ul>
    </div>
</header>
