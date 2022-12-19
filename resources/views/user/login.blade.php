@extends('welcome')
@section('title', 'Авторизация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    @if(session()->has('successLogin'))
                        <div class="alert alert-success">
                            {{ session()->get('successLogin') }}
                        </div>
                    @endif
                    @if(session()->has('errorSuccess'))
                        <div class="alert alert-danger">
                            {{ session()->get('errorSuccess') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb3">
                        <button type="submit" class="btn btn-primary mb-3">Авторизоваться</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
