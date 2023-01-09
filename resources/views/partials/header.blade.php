<header>
    <div class="container py-3 d-flex justify-content-between">
        <div class="logo">
            <img src="{{asset('img/logo-boolflix.png')}}" alt="logo">
        </div>
        <nav>
            <ul class="d-flex">
                @foreach (config('db.menu') as $item )
                <li  class="px-3">
                    <a class="text-capitalize" href="{{route($item['routeName'])}}">{{$item['text']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>

</header>
