<div class="row viewed">
<p class="viewed-text">Недавно просмотренные</p>
    @if(session('viewed'))
        @foreach(session('viewed') as $id => $details)
            @foreach($details['images'] as $image)
                @if($image["isdefaultImg"] ==1)

                    <div class="col col-xxl-3 mg-30"><a href="{{ route('card', $id) }}"><img class="viewed-card" src="../img/{{ $image['image'] }}" alt=""></a></div>
                @endif
            @endforeach
        @endforeach
<!--     @else
    @foreach($products as $product)
            @foreach($product->images as $image)
                @if($image->isdefaultImg == 1)
                    <div class="col col-xxl-3"><img class="viewed-card" src="../img/{{ $image['image'] }}" alt=""></div>
                @endif
            @endforeach
        @endforeach -->
    @endif
</div>