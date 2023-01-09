@extends('layouts.main')

@section('content')
<main>
    <div class="container text-center py-5">
        <h1>
           Oops! Something went wrong...
        </h1>
        <h2>{{$exception->getMessage()}}</h2>
    </div>

</main>

@endsection
