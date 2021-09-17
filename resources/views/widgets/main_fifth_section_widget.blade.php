<div class="fill">
    @foreach($fifth_section as $item)
        <img class="fill-img" src="./img/{{$item->image}}" alt="">
        <div class="fill-des">
            <p class="gradient">{{$item->description}} </p>
            <img src="./img/arrow-down.svg" alt="">
        </div>
    @endforeach
</div>