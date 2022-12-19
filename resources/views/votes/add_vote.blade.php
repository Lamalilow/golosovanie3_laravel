@extends('user.admins.admin_panel')
@section('title', 'Голосования')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    @if(session()->has('successVote'))
                        <div class="alert alert-success">Успешно добавлено</div>
                    @endif
                    @if(session()->has('errorVote'))
                        <div class="alert alert-danger">Добавить не удалось</div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Вариант 1</label>
                        <input type="text" name="answer1" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Вариант 2</label>
                        <input type="text" name="answer2" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb3">
                        <button type="submit" class="btn btn-primary mb-3">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-20">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Номер</th>
                            <th>Название</th>
                            <th>Вариант 1</th>
                            <th>Вариант 2</th>
                            <th>Голоса на 1</th>
                            <th>Голоса на 2</th>
                            <th>Удаление</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($votes as $vote)
                        <tr>
                            <td>{{ $vote->id }}</td>
                            <td>{{ $vote->name }}</td>
                            <td>{{ $vote->answer1 }}</td>
                            <td>{{ $vote->answer2 }}</td>
                            <td>{{ $vote->count_answer1 }}</td>
                            <td>{{ $vote->count_answer2 }}</td>
                            <form method="POST" action="{{ route('deleteVote', $vote->id) }}">
                                @csrf
                                <td>
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </td>
                            </form>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
