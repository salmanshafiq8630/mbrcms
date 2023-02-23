<ul class="dropdown-menu">
@foreach($childs as $child)
    <li class="dropdown"><a href="#">{{ $child->title }}</a>
    @if(count($child->childs))
    @include('partials.nav.manageChild',['childs' => $child->childs])
    @endif
</li>
@endforeach
</ul>