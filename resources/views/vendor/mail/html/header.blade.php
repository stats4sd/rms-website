@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://stats4sd.org/img/stats4sd.png" class="logo" alt="Stats4SD">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
