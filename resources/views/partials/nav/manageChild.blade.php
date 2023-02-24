<ul class="dropdown-menu">
@foreach($childs as $child)
    <li class="dropdown"><a @if(count($child->childs))class="dropdown-toggle" data-toggle="dropdown" @endif href="{{route('pages.show', $child->slug)}}">{{ $child->title }}</a>
    @if(count($child->childs))
    @include('partials.nav.manageChild',['childs' => $child->childs])
    @endif
</li>
@endforeach
</ul>