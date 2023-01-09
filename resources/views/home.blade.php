@extends('layouts.main')
@section('content')
<main>
    <div class="container py-5">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col mb-3">
                <div class="card sd-card" style="width: 18rem;">
                    <div class="card-body ">
                      <h5 class="card-title">{{$movie->title}}</h5>
                        @if ($movie->original_title !== $movie->title)
                            <h6 class="fw-bold fst-italic">"{{$movie->original_title}}"</h6>
                        @endif
                      <ul>
                        <li>Nationality:
                            {{$movie->nationality}} <i class="fa-solid fa-flag-usa"></i>
                        </li>
                        <li>Date of release: {{$movie->date}}</li>
                        <li>Vote: {{$movie->vote}} <i class="fa-solid fa-star"></i></li>
                      </ul>
                      <a href="#" class="btn btn-dark">Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

