@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
<main>
    <div class="container py-5">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 mb-5">
                    <div class="card sd-card" style="width: 20rem;">
                        <div class="card-body ">
                            <h5 class="card-title">{{$movie->title}}</h5>
                                @if ($movie->original_title !== $movie->title)
                                    <h6 class="fw-bold fst-italic">"{{$movie->original_title}}"</h6>
                                @endif
                            <a href="{{route('details', $movie->id )}}" class="btn btn-dark mt-3">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

