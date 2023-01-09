@extends('layouts.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="card sd-card my-5" style="width: 20rem;">
        <div class="card-body ">
          <h5 class="card-title">{{$movie->title}}</h5>
            @if ($movie->original_title !== $movie->title)
                <h6 class="fw-bold fst-italic">"{{$movie->original_title}}"</h6>
            @endif
          <ul>
                <li>Nationality:
                    {{$movie->nationality}} <i class="fa-solid fa-flag-usa"></i>
                </li>
                <li>Date of release: {{$movie->date}} <i class="fa-solid fa-calendar-days"></i></li>
                <li>Vote: {{$movie->vote}} <i class="fa-solid fa-star"></i></li>
          </ul>
        </div>
    </div>
</div>
@endsection
