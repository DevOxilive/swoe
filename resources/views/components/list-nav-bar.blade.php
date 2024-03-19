<li class="{{ $isTab }}">
    <a class="nav-link collapsed" data-bs-target="#{{ $nameId }}" data-bs-toggle="collapse" href="{{ route($route) }}">
        <i class="{{ $icon }}"></i><span>{{ $name }}</span><i class="bi bi-chevron-down ms-auto {{ $chevron }}"></i>
    </a>
    <ul id="{{ $nameId }}" class="{{ $nav }} collapse" data-bs-parent="#{{ $parentNav }}">
        {{ $slot }}
    </ul>
</li>