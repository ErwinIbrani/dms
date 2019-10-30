@php
	$CI = &get_instance();
@endphp
<div class="card card-fluid">
	<h6 class="card-header"> CME </h6><!-- .nav -->

	<ul class="nav nav-tabs flex-column">
		<li class="nav-item">
			<a class="nav-link <?php if($CI->uri->segment(2)=="comcme"){echo "active";}?>"
			   href="{{ site_url('/vendor/comcme/letter/' . $project_id) }}">COM CME</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(2)=="foundation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/index/' . $project_id) }}">Foundation & Tower Erection</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(2)=="me") ? 'active': '' }}"
			   href="{{ site_url('/vendor/me/index/' . $project_id) }}">Mechanical Electrical</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">PLN</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Fence</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">CME Implementation Photograph</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Ready For Installation (RFI)</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">CME Implementation Photograph</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">ATP/PAT</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Bill of Quantity</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Handover</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">BAST</a>
		</li>
	</ul>
</div>
