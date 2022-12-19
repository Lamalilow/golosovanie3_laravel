@extends('welcome')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('login')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('name')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('password')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль повторно</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('password_confirmation')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('rules') is-invalid @enderror" type="checkbox" name="rules" id="flexCheckDefault">
                        <label class="form-check-label " for="flexCheckDefault">
                            Согласие на обработку персональных данных
                        </label>
                        @error('rules')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Регистрация</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
