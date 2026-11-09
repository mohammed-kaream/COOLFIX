@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block; text-decoration: none;">
@if (trim($slot) === 'Laravel' || trim($slot) === config('app.name'))
<span class="brand">COOL<span class="brand-fix">FIX</span></span>
<span class="brand-sub">REFRIGERATION &amp; REPAIR</span>
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
