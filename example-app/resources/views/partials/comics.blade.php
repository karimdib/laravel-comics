<div class="row">
    @foreach ($arrays as $keys => $values)
    <div class="card">
        <div class="bord">
            <img class="thumb" src="{{$values['thumb']}}" alt="">
            <ul class="detalis-comics">
                <li class="title-thumb">{{$values['title']}}</li>
                <li>{{$values['price']}}</li>
            </ul>
        </div>
        <div class="layout-filter"></div>
    </div>
    @endforeach
</div>
@yield('foreach')