@foreach($collections as $collection)
    <li><a class="dropdown-item nav-h2" href="{{ route('catalogcollection', $collection->id) }}">{{$collection->name}}</a></li>
@endforeach