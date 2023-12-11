<div class="row">
    @foreach ($thumbs as $keys => $values)
    <div class="card">
        <div class="bord">
            @foreach ($values as $key =>$value)
            <div class="thumb">{{$value}}</div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@yield('foreach')