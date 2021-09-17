@foreach($mainvideo as $item)
<iframe  src="{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="main-video"></iframe>
@endforeach