@php
	$CI = &get_instance();
@endphp

<ul class="nav nav-tabs card-header-tabs">
	<li class="nav-item">
		<a href="{{ site_url('/vendor/comcme/generatekomcme/' . $project_id) }}" class="nav-link <?php if($CI->uri->segment(3)=="generatekomcme"){echo "active";}?>">
			Generate KOM CME
		</a>
	</li>
	<li class="nav-item">
		<a href="{{ site_url('/vendor/comcme/generatekomletter/' . $project_id) }}" class="nav-link <?php if($CI->uri->segment(3)=="generatekomletter"){echo "active";}?>">
			Generate Surat Pernyataan KOM CME
		</a>
	</li>
</ul>
