<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route($route)}}" aria-expanded="false" style="{{request()->routeIs($route) ? 'opacity:1;' : ''}}">
        <i class="mdi {{$icon}}"></i>
        <span class="hide-menu">{{$name}}</span>
    </a>
</li>