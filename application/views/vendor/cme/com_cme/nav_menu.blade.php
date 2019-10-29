@php
	$CI = &get_instance();
@endphp

<ul class="nav nav-tabs card-header-tabs">
	<li class="nav-item">
		<a href="{{ site_url('/vendor/comcme/letter/' . $project_id) }}" class="nav-link <?php if($CI->uri->segment(3)=="letter"){echo "active";}?>">
			KOM CME
		</a>
	</li>
	<li class="nav-item">
		<a href="{{ site_url('/vendor/comcme/uploadform/' . $project_id) }}" class="nav-link <?php if($CI->uri->segment(3)=="uploadform"){echo "active";}?>">
			Upload Document
		</a>
	</li>
</ul>
