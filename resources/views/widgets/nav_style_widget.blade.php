@foreach($categories as $category)
    @if($category->status == 1)
    <li><a class="dropdown-item nav-h2" href="{{ route('catalogstyle', $category->id) }}">{{$category->name}}</a></li>
    @endif
@endforeach