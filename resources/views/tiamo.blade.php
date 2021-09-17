@extends('layout')
@section('style')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection
@section('content')
@widget('sm_banner_widget')
@widget('main_video_widget')
      <!-- video -->
      @widget('main_first_section_widget')
    <div class="new-collection">
        <div class="prom">Prom 2021</div>
        <div class="name-col">TIAMO NEW COLLECTION</div>
        <a href="{{ route('catalog') }}">
            <div class="btn-small">ПРОСМОТРЕТЬ</div>
        </a>
    </div>
    @widget('main_second_section_widget')
    @widget('main_third_section_widget')
    <div class="row mg-bt-140">
        <div class="col col-xxl-6" >
            <div class="partners">
                <p class="h-partners">Стать партнером</p>
                <p class="des-partners">Производим свадебные и вечерние платья. 
                    У нас вы можете купить одежду по цене производителя в розницу и оптом от 3х единиц. </p>
                <p class="h2-partners">Наши клиенты</p>
                <div class="icons-partners">
                    <div class="icon-partner">
                        <img class="img-partner" src="./img/grocery-store.svg" alt="">
                        <p class="icon-h1">Интернет-магазины</p>
                    </div>
                    <div class="icon-partner mg-l-r">
                        <img class="img-partner" src="./img/wedding-dress.svg" alt="">
                        <p class="icon-h1">Свадебные салоны</p>
                    </div>
                    <div class="icon-partner">
                        <img class="img-partner" src="./img/computer.svg" alt="">
                        <p class="icon-h1">Веб-мастера</p>
                    </div>
                </div>
                <div class="btn">ПРОСМОТРЕТЬ</div>
            </div>
        </div>
        <div class="col col-xxl-6">
            <div class="coloborations">
                <p class="h-coloborations">Проводим КОЛЛАБОРАЦИИ</p>
                <p class="des-coloborations">Приглашаем к сотрудничеству</dipv>
                <div class="icons-coloborations">
                    <div class="icon-coloboration"><img class="img-coloboration" src="./img/camera.svg" alt=""><p class="icon-coloboration-h1">Фотографов</p></div>
                    <div class="icon-coloboration"><img class="img-coloboration" src="./img/hair-dryer.svg" alt=""><p class="icon-coloboration-h1">Парикмахеров</p></div>
                    <div class="icon-coloboration"><img class="img-coloboration" src="./img/cosmetic-brush.svg" alt=""><p class="icon-coloboration-h1">Визажистов</p></div>
                </div>
                <div class="btn">ПРОСМОТРЕТЬ</div>
            </div>
        </div>
    </div>
    @widget('main_fourth_section_widget')
    <div class="row">
        <div class="link-inst-h1">Подписывайся на нас в Instagram</div>
        <div class="link-inst">
            <img class="link-inst-img" src="./img/instagram 1.svg" alt="">
            <div class="link-inst-h2">Tiamo_dresses</div>
        </div>
        <div class="link-inst-photos">
            <div class="first-row">
                <div class="first"></div>
                <div class="second"></div>
                <div class="third">
                    <div class="third-first"></div>
                    <div class="third-second"></div>
                </div>
                <div class="fourth"></div>
            </div>
            <div class="second-row">
                <div class="second-1"></div>
                <div class="second-2"></div>
                <div class="second-3"></div>
                <div class="second-4"></div>
            </div>
        </div>
        @widget('main_fifth_section_widget')
    </div>
@endsection