<div class="row like">
    <p class="like-text">Вам может понравиться</p>
    @foreach($products as $product)
            
        @foreach($product->images as $image)
            @if($image->isdefaultImg == 1)
                <div class="col col-xxl-4"><a href="{{ route('card', $product->id) }}"><img class="like-card" src="../img/{{$image->image}}" alt=""></a></div>
            @endif
        @endforeach
    @endforeach
    
</div>
{{$products->links("pagination::bootstrap-4")}}