@php
$CI = &get_instance();
if($CI->session->flashdata('success')):
echo '<div class="alert alert-primary has-icon alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <div class="alert-icon">
      <span class="oi oi-info"></span>
      </div>
      <h4 class="alert-heading"> Success </h4>
      <p class="mb-0">'.$CI->session->flashdata('success').'</p>
      </div>';
elseif($CI->session->flashdata('error')):
echo '<div class="alert alert-danger  has-icon alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <div class="alert-icon">
      <span class="oi oi-info"></span>
      </div>
      <h4 class="alert-heading"> Error </h4>
      <p class="mb-0">'.$CI->session->flashdata('error').'</p>
      </div>';
elseif($CI->session->flashdata('warning')):
echo '<div class="alert alert-warning  has-icon alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <div class="alert-icon">
      <span class="oi oi-info"></span>
      </div>
      <h4 class="alert-heading"> Warning </h4>
      <p class="mb-0">'.$CI->session->flashdata('warning').'</p>
      </div>';
elseif($CI->session->flashdata('info')):
echo '<div class="alert alert-success  has-icon alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <div class="alert-icon">
      <span class="oi oi-info"></span>
      </div>
      <h4 class="alert-heading"> Info </h4>
      <p class="mb-0">'.$CI->session->flashdata('info').'</p>
      </div>';
elseif($CI->session->flashdata('dark')):
echo '<div class="alert alert-dark  has-icon alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <div class="alert-icon">
      <span class="oi oi-info"></span>
      </div>
      <h4 class="alert-heading"> Info </h4>
      <p class="mb-0">'.$CI->session->flashdata('dark').'</p>
      </div>';
endif
@endphp
