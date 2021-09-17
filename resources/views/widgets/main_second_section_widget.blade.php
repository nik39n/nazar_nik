<div class="collections">
        <div class="tiamo tiamo-exclusive">
            <img class="img-tiamo" src="../img/{{$second_section['0']->image}}" alt="">
        <div class="description">
            <div class="fl-st mg-tp-130"><p class="main mg-20">TIAMO</p> <p class="second">EXLUSIVE</p></div>
            <div class="lines fl-end"><img src="./img/stik-r.png" alt=""></div>
            <p class="col-description fl-st"> 
            {{$second_section['0']->description}}</p>
        <a href="{{ route('catalogbrand', 2) }}"> 
            <div class="btn-large fl-st"><div class="large">ПРОСМОТРЕТЬ</div></div>
        </a>
        </div>
    </div>
        <div class="tiamo"><div class="description tiamo-exclusive">
            <div class="fl-end"><p class="main">TIAMO</p></div>
            <div class="lines fl-st"><img src="./img/stik-l.png" alt=""></div>
            <p class="col-description fl-end"> {{$second_section['1']->description}}</p>
            <div class="btn-large fl-end">        <a href="{{ route('catalogbrand', 1) }}"> 
            <div class="btn-large fl-st"><div class="large">ПРОСМОТРЕТЬ</div></div>
        </a></div>
        </div><img class="img-tiamo" src="../img/{{$second_section['1']->image}}" alt=""></div>
</div>