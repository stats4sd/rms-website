{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('event') }}"><i class="nav-icon la la-question"></i> Events</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('trove') }}"><i class="nav-icon la la-question"></i> Troves</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('featured-trove') }}"><i class="nav-icon la la-question"></i> Featured troves</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('support-request') }}"><i class="nav-icon la la-question"></i> Support Requests</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('event-type') }}"><i class="nav-icon la la-question"></i> Event types</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('event-resource') }}"><i class="nav-icon la la-question"></i> Event resources</a></li>