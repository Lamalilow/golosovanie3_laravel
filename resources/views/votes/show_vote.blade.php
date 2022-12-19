@extends('welcome')
@section('title', $vote->name)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card mt-2">
                    <div class="card-header">
                        {{ $vote->name }}
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-body d-flex justify-content-between">
                            <div class="card">
                                <div class="card-header">Первый вариант:</div>
                                <div class="card-text text-center">
                                    {{ $vote->answer1 }} <br>
                                    {{ $vote->count_answer1 }}
                                    <form method="POST" action=" {{ route('addCountVote1', ['vote' => $vote->id, 'answer1' => true]) }} ">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Проголосовать</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Второй вариант:</div>
                                <div class="card-text text-center">
                                    {{ $vote->answer2 }} <br>
                                    {{ $vote->count_answer2 }}<br>
                                    <form method="POST" action=" {{ route('addCountVote2', ['vote' => $vote->id, 'answer2' => true]) }} ">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Проголосовать</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
