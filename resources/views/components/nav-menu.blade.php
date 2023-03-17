<ul {{ $attributes->class(['menu menu-horizontal px-1']) }}>
<li><a href="{{ url('/') }}">{{ t("Home") }}</a></li>
    <li><a href="{{ url('grantees') }}">{{ t("Help for Grantees") }}</a></li>
    <li tabindex="0"><a href="{{ url('capacity-building') }}">{{ t("Capacity Building") }}</a></li>
    <li><a href="{{ url('events') }}">{{ t("Events") }}</a></li>
    <li
        class="nav-item dropdown"
        x-data="{open: false}"
    >
        <a
            class="nav-link dropdown-toggle"
            role="button"
            aria-expanded="false"
            x-on:click="open = !open"
        >
            {{ t("Change Language") }}
        </a>

        <div
            class="dropdown-menu"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="open = false"
            style="display:none"
        >
            <a class="dropdown-item" href="{{ URL::current() . '?locale=en' }}">English</a>
            <a class="dropdown-item" href="{{ URL::current() . '?locale=es' }}">Español</a>
            <a class="dropdown-item" href="{{ URL::current() . '?locale=fr' }}">Français</a>
        </div>
    </li>
</ul>
