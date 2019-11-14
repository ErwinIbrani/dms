@php
	$CI = &get_instance();
@endphp

<div class="card card-fluid">
	<h6 class="card-header"> Ready For Construction </h6><!-- .nav -->

	<ul class="nav nav-tabs flex-column border-0">

		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="imb") ? 'active': '' }}"
			   href="{{ site_url('/project/rfc/imb/'.$project->id) }}">
				IMB</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="legal") ? 'active': '' }}"
			   href="{{ site_url('/project/rfc/legal/'.$project->id) }}">
				Legal</a>
		</li>
	</ul>
</div>

{!! form_open('/project/rfc/setrfcdone/'. $project->id) !!}
<button class="btn btn-primary btn-block" type="submit">Set to RFC Done</button>
{!! form_close() !!}
