<footer>
    <div class="container h-100">
        <nav class="h-100">
            <ul class="h-100 d-flex align-items-center flex-wrap mb-0"">
                @foreach (config('db.footerMenu') as $item)
                    <li class="mx-5">
                        <a class="text-secondary text-capitalize" href="#">{{$item}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</footer>
