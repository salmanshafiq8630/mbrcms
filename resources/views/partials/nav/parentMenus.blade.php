<nav class="navbar navbar-inverse">
<div class="container">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('pages.index')}}">Logo</a>
    </div>
    <ul class="nav navbar-nav">
     
      {{--<li class="dropdown"><a href="{{route('pages.show', $menu->slug)}}">{{ $menu->title }}</a></li> --}}
     
      @foreach($menus as $menu)
      <li class="dropdown">
        <a @if(count($menu->childs))class="dropdown-toggle" data-toggle="dropdown" @endif href="{{route('pages.show', $menu->slug)}}">{{ $menu->title }}</a>
        @if(count($menu->childs))
        @include('partials.nav.manageChild',['childs' => $menu->childs])
        @endif
      </li>
      @endforeach
    </ul>
  </div>
  </div>
</nav>
