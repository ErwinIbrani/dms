@php
	$CI = &get_instance();
@endphp
<div class="card card-fluid">
	<h6 class="card-header"> Foundation </h6><!-- .nav -->

	<ul class="nav nav-tabs flex-column">
		<li class="nav-item">
			<a class="nav-link  {{ ($CI->uri->segment(3)=="sitepreparation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/sitepreparation/' . $project_id) }}">Site Preparation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="excavation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/excavation/' . $project_id) }}">Excavation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="rebarformwork") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/rebarformwork/' . $project_id) }}">Re-bar &
				FormWorks</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="foundationanchor") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/foundationanchor/' . $project_id) }}">Anchor</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="concreteproposal") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/concreteproposal/' . $project_id) }}">Concrete
				Proposal</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="pouringpreparation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/pouringpreparation/' . $project_id) }}">Pouring
				Preparation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="readymix") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/readymix/' . $project_id) }}">Ready Mix</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="concretepouring") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/concretepouring/' . $project_id) }}">Concrete
				Pouring</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="drivenpile") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/drivenpile/' . $project_id) }}">Driven
				Pile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="wooddenpile") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/wooddenpile/' . $project_id) }}">Woodden
				Pile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="borepreparation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/borepreparation/' . $project_id) }}">Bore
				Preparation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="borepileactivity") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/borepileactivity/' . $project_id) }}">Bore
				Pile Activity</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="concretecuring") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/concretecuring/' . $project_id) }}">Concrete
				Curing</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="shelterfoundation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/shelterfoundation/' . $project_id) }}">Shelter
				Foundation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="permanentshelter") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/permanentshelter/' . $project_id) }}">Permanent
				Shelter </a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="raftfoundation") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/raftfoundation/' . $project_id) }}">Raft
				Foundation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="towererection") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/towererection/' . $project_id) }}">Tower
				Erection</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="towerpainting") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/towerpainting/' . $project_id) }}">Tower
				Painting</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ ($CI->uri->segment(3)=="towergrouting") ? 'active': '' }}"
			   href="{{ site_url('/vendor/foundation/towergrouting/' . $project_id) }}">Tower
				Grouting</a>
		</li>

	</ul>
</div>
