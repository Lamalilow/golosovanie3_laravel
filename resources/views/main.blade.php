@extends('welcome')
@section('title', 'Главная страница')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-20">
                <h2>Все голосования для покупки</h2>
                <div class="row mb-2">
                    @foreach($votes as $product)
                        <div class="col-2 mt-2">
                            <div class="card" style="width: 100%">
                                <img src="/public/assets/images/question.jpg" class="card-img-top" alt="Картинка вопроса">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <a href="{{ route('showVote', $product->id) }}" class="btn btn-primary">Посмотреть</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $votes->links() }}
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
