@props([
    'menu' => null
])

<li class="nav-item @if(count($menu['children']) > 0) has-treeview @endif">
    <a href="{{ $menu['url'] }}" class="nav-link">
        <i class="fas {{ $menu['icon']}} nav-icon"></i>
        <p>
            {{$menu['title']}}

            @if(count($menu['children']) > 0)
                <i class="fas fa-angle-left right"></i>
            @endif

            @if(!empty($menu['badge']))
                <span class="right badge badge-danger">{{ $menu['badge'] }}</span>
            @endif
        </p>
    </a>

    @if(count($menu['children']) > 0)
        <ul class="nav nav-treeview">
            @foreach($menu['children'] as $child)
                <li class="nav-item">
                    <a href="{{ $menu['url'] }}" class="nav-link">
                        <i class="far {{ $child['icon']}} nav-icon"></i>
                        <p>{{ $child['title'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
