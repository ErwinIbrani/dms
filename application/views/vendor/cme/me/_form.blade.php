@php
	$CI = &get_instance();
@endphp
<div class="card card-fluid">
	<h6 class="card-header"> ME </h6><!-- .nav -->

	<ul class="nav nav-tabs flex-column">
		<li class="nav-item">
			<a class="nav-link  {{ ($CI->uri->segment(3)=="addgrounding") ? 'active': '' }}"
			   href="{{ site_url('/vendor/me/addgrounding/' . $project_id) }}">Grounding</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="addme") ? 'active': '' }}"
			   href="{{ site_url('/vendor/me/addme/' . $project_id) }}">ME</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="addpln") ? 'active': '' }}"
			   href="{{ site_url('/vendor/me/addpln/' . $project_id) }}">PLN</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="addextalarm") ? 'active': '' }}"
			   href="{{ site_url('/vendor/me/addextalarm/' . $project_id) }}">Ext. Alarm</a>
		</li>

	</ul>
</div>
