@extends('layouts.app')

@section('content')
    <div class="container-cards">
        <div class="wrapper-cards">
            <h2>CURRENT SERIES</h2>
            <div class="container">
                <div class="row row-cols-4 flex-wrap">
                    @foreach ($data as $comic)
                        <div class="col mb-3">
                            <div class="comic-card">
                                <div class="img-cont">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </div>
                                <h4>{{ $comic['title'] }}</h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="button">
            <button>LOAD MORE</button>
        </div>
    </div>

    </div>
@endsection
