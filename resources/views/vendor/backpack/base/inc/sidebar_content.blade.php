{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('event') }}"><i class="nav-icon la la-question"></i> Events</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('trove') }}"><i class="nav-icon la la-question"></i> Troves</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('featured-trove') }}"><i class="nav-icon la la-question"></i> Featured troves</a></li>