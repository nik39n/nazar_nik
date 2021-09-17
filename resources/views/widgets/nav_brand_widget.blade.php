@foreach($brands as $brand)
    <li><a class="dropdown-item nav-h2" href="{{ route('catalogbrand', $brand->id) }}">{{$brand->name}}</a></li>
@endforeach