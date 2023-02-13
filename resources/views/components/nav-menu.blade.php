<ul {{ $attributes->class(['menu menu-horizontal px-1']) }}>
<li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('grantees') }}">Help for Grantees</a></li>
    <li tabindex="0"><a href="{{ url('capacity-building') }}">Capacity Building</a></li>
    <li><a href="{{ url('events') }}">Events</a></li>
</ul>
