<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img style="width: 100px" src="/public/assets/images/question.jpg" alt="знак вопроса">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('/') }}">Home</a>
                    </li>

                </ul>
                <div class="navbar-nav">
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Авторизация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endguest
                    @auth()
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">Администирование</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                        </li>
                    @endauth

                </div>
            </div>
        </div>
    </nav>

</div>
