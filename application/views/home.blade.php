@extends('layouts.app')
@section('page_title', 'Dashboard')

@section('content')

    <!-- .page -->
    <div class="page has-sidebar"><div class="sidebar-backdrop"></div>
        <!-- .page-navs -->
        <header class="page-navs shadow-sm pr-3">
            <!-- btn-account -->
            <a href="page-team-projects.html" class="btn-account">
                <div class="user-avatar mr-2">
                    <img src="assets/images/avatars/team4.jpg" alt="">
                </div>
                <div class="account-summary">
                    <h1 class="card-title"> Creative Division </h1>
                    <h6 class="card-subtitle text-muted"> 53 days left · Last update 1h </h6>
                </div>
            </a> <!-- /btn-account -->
            <!-- right actions -->
            <div class="ml-auto">
                <!-- invite members -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-plus"></i></button> <!-- .dropdown-menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-rich stop-propagation">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header"> Add members </div>
                        <div class="form-group px-3 py-2 m-0">
                            <input type="text" class="form-control" placeholder="e.g. @bent10" data-toggle="tribute" data-remote="assets/data/tribute.json" data-menu-container="#people-list" data-item-template="true" data-autofocus="true" data-tribute="true"> <small class="form-text text-muted">Search people by username or email address to invite them.</small>
                        </div>
                        <div id="people-list" class="tribute-inline stop-propagation"></div><a href="#" class="dropdown-footer">Invite member by link <i class="far fa-clone"></i></a>
                    </div><!-- /.dropdown-menu -->
                </div><!-- /invite members -->
                <button type="button" class="btn btn-light btn-icon" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
            </div><!-- /right actions -->
        </header><!-- /.page-navs -->
        <!-- .page-inner -->
        <div class="page-inner">
            <!-- .page-title-bar -->
            <header class="page-title-bar">
                <!-- grid row -->
                <div class="row text-center text-sm-left">
                    <!-- grid column -->
                    <div class="col-sm-auto col-12 mb-2">
                        <span class="tile tile-xl bg-pink">SP</span>
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col">
                        <h1 class="page-title"> Syrena Project </h1>
                        <p> Is a Responsive Admin Theme designed with focus on simplicity, user experience, interactions, and flows. It enables you to build rich and beautiful experiences for your project. <a href="#">Read more...</a>
                        </p>
                    </div><!-- /grid column -->
                </div><!-- /grid row -->
                <!-- .nav-scroller -->
                <div class="nav-scroller border-bottom">
                    <!-- .nav -->
                    <div class="nav nav-tabs">
                        <a class="nav-link active" href="page-project.html">Overview</a> <a class="nav-link" href="page-project-board.html">Board</a> <a class="nav-link" href="page-project-gantt.html">Gantt View</a> <a class="nav-link" href="#">Settings</a>
                    </div><!-- /.nav -->
                </div><!-- /.nav-scroller -->
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                    <!-- metric row -->
                    <div class="metric-row">
                        <!-- metric column -->
                        <div class="col">
                            <!-- .metric -->
                            <div class="metric metric-bordered">
                                <h2 class="metric-label"> Budget </h2>
                                <p class="metric-value h1">
                                    <sup>$</sup> <span class="value">5,000</span>
                                </p>
                            </div><!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                            <!-- .metric -->
                            <div class="metric metric-bordered">
                                <h2 class="metric-label"> Invoiced </h2>
                                <p class="metric-value h1">
                                    <sup>$</sup> <span class="value">3,600</span>
                                </p>
                            </div><!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                            <!-- .metric -->
                            <div class="metric metric-bordered">
                                <h2 class="metric-label"> Expenses </h2>
                                <p class="metric-value h1">
                                    <sup>$</sup> <span class="value">450</span>
                                </p>
                            </div><!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                            <!-- .metric -->
                            <div class="metric metric-bordered">
                                <h2 class="metric-label"> Progress </h2>
                                <p class="metric-value h1">
                                    <span class="value">93</span> <sup>%</sup>
                                </p>
                            </div><!-- /.metric -->
                        </div><!-- /metric column -->
                    </div><!-- /metric row -->
                </div><!-- /.section-block -->
                <!-- .card-deck-xl -->
                <div class="card-deck-xl">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h3 class="card-title"> Activity by day </h3>
                            <div class="chartjs"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <canvas id="canvas-achievement" style="display: block; width: 481px; height: 250px;" width="481" height="250" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h3 class="card-title"> Balance: $3,150 </h3>
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-8">
                                    <div class="chartjs"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="canvas-invoices" width="314" height="250" class="chartjs-render-monitor" style="display: block; width: 314px; height: 250px;"></canvas>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 pl-3 pt-3 p-sm-0">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa fa-square text-teal mr-2"></i> Balance </li>
                                        <li>
                                            <i class="fa fa-square text-pink mr-2"></i> Expenses </li>
                                        <li>
                                            <i class="fa fa-square text-muted mr-2"></i> Not invoiced </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.card-deck-xl -->
                <!-- .card -->
                <div class="card">
                    <!-- .card-header -->
                    <div class="card-header border-0"> Time tracking </div><!-- /.card-header -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <!-- thead -->
                            <thead>
                            <tr>
                                <th style="min-width:259px"> Task </th>
                                <th> Date </th>
                                <th> Time </th>
                                <th style="min-width: 120px"> Hours spent </th>
                                <th style="width:60px"></th>
                            </tr>
                            </thead><!-- /thead -->
                            <!-- tbody -->
                            <tbody>
                            <!-- tr -->
                            <tr>
                                <td class="align-middle text-truncate">
                                    <a href="#tracking">Redesign website</a>
                                </td>
                                <td class="align-middle"> 09/25/2018 </td>
                                <td class="align-middle"> 12:20pm </td>
                                <td class="align-middle"> 15:20 </td>
                                <td class="align-middle text-right">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                                <td class="align-middle text-truncate">
                                    <a href="#tracking">Write new content</a>
                                </td>
                                <td class="align-middle"> 10/07/2018 </td>
                                <td class="align-middle"> 8:13pm </td>
                                <td class="align-middle"> 12:40 </td>
                                <td class="align-middle text-right">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                                <td class="align-middle text-truncate">
                                    <a href="#tracking">Redesign website</a>
                                </td>
                                <td class="align-middle"> 10/15/2018 </td>
                                <td class="align-middle"> 5:22pm </td>
                                <td class="align-middle"> 34:30 </td>
                                <td class="align-middle text-right">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                                <td class="align-middle text-truncate">
                                    <a href="#tracking">Redesign website</a>
                                </td>
                                <td class="align-middle"> 10/15/2018 </td>
                                <td class="align-middle"> 7:36am </td>
                                <td class="align-middle"> 23:41 </td>
                                <td class="align-middle text-right">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                                <td class="align-middle text-truncate">
                                    <a href="#tracking">Apply new styles</a>
                                </td>
                                <td class="align-middle"> 10/19/2018 </td>
                                <td class="align-middle"> 9:32pm </td>
                                <td class="align-middle"> 11:12 </td>
                                <td class="align-middle text-right">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </td>
                            </tr><!-- /tr -->
                            </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">View report <i class="fa fa-fw fa-angle-right"></i></a>
                    </div><!-- /.card-footer -->
                </div><!-- /.card -->
            </div><!-- /.page-section -->
        </div><!-- /.page-inner -->
        <!-- .page-sidebar -->
        <div class="page-sidebar">
            <!-- .sidebar-header -->
            <header class="sidebar-header d-sm-none">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="prevent-default" href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                    </li>
                </ol>
            </header><!-- /.sidebar-header -->
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#team-profile" role="tab" aria-controls="team-profile" aria-selected="true">Contributors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#message-files" role="tab" aria-controls="message-files" aria-selected="false">Files</a>
                </li>
            </ul><!-- /.nav-tabs -->
            <!-- .sidebar-section-fill -->
            <div class="sidebar-section-fill">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- #team-profile -->
                    <div id="team-profile" class="tab-pane fade show active" role="tabpanel" aria-labelledby="team-profile">
                        <!-- .list-group -->
                        <div class="list-group list-group-reflow list-group-flush list-group-divider">
                            <!-- .list-group-header -->
                            <div class="list-group-header"> 8 Members </div><!-- /.list-group-header -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces11.jpg" alt="Brenda Griffin"> <span class="avatar-badge online" title="online"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Brenda Griffin</a>
                                    </h4>
                                    <p class="list-group-item-text"> Medical Assistant </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces12.jpg" alt="Ryan Jimenez"> <span class="avatar-badge online" title="online"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Ryan Jimenez</a>
                                    </h4>
                                    <p class="list-group-item-text"> Photographer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces13.jpg" alt="Bryan Hayes"> <span class="avatar-badge busy" title="busy"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Bryan Hayes</a>
                                    </h4>
                                    <p class="list-group-item-text"> Computer Systems Analyst </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces14.jpg" alt="Cynthia Clark"> <span class="avatar-badge idle" title="idle"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Cynthia Clark</a>
                                    </h4>
                                    <p class="list-group-item-text"> Web Developer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces16.jpg" alt="Martha Myers"> <span class="avatar-badge online" title="online"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Martha Myers</a>
                                    </h4>
                                    <p class="list-group-item-text"> Writer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces15.jpg" alt="Tammy Beck"> <span class="avatar-badge online" title="online"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Tammy Beck</a>
                                    </h4>
                                    <p class="list-group-item-text"> Designer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces17.jpg" alt="Susan Kelley"> <span class="avatar-badge busy" title="busy"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Susan Kelley</a>
                                    </h4>
                                    <p class="list-group-item-text"> Web Developer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces18.jpg" alt="Albert Newman"> <span class="avatar-badge offline" title="offline"></span></a>
                                </div><!-- /.list-group-item-figure -->
                                <!-- .list-group-item-body -->
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">Albert Newman</a>
                                    </h4>
                                    <p class="list-group-item-text"> Web Developer </p>
                                </div><!-- /.list-group-item-body -->
                                <!-- .list-group-item-figure -->
                                <div class="list-group-item-figure align-items-start">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.list-group-item-figure -->
                            </div><!-- /.list-group-item -->
                        </div><!-- /.list-group -->
                    </div><!-- /#team-profile -->
                    <!-- #message-files -->
                    <div id="message-files" class="tab-pane fade" role="tabpanel" aria-labelledby="message-files">
                        <!-- .list-group -->
                        <div class="list-group list-group-reflow list-group-flush list-group-divider">
                            <!-- .list-group-header -->
                            <div class="list-group-header"> Today </div><!-- /.list-group-header -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-teal"><span class="fa fa-file-pdf"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">double-broccoli-quinoa.pdf</a>
                                    </h4>
                                    <p class="list-group-item-text"> 1.07 MB by Emma Griffin </p>
                                    <p class="list-group-item-text small"> 12:20pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-teal"><span class="fa fa-file-pdf"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">Baked-Chicken-and-Spinach-Flautas.pdf</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.39 MB by Peter Willis </p>
                                    <p class="list-group-item-text small"> 5:22pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-pink"><span class="fa fa-file-image"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">Cajun Chicken Egg Pasta.jpg</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.93 MB by Danielle Garza </p>
                                    <p class="list-group-item-text small"> 9:32pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-header -->
                            <div class="list-group-header"> Jan 28, 2018 </div><!-- /.list-group-header -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-purple"><span class="fa fa-file-archive"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">looper_build-1209.zip</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.53 MB by Rose McCoy </p>
                                    <p class="list-group-item-text small"> 3:13am </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-purple"><span class="fa fa-file-archive"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">looper_design-brief.zip</a>
                                    </h4>
                                    <p class="list-group-item-text"> 2.04 MB by Rose McCoy </p>
                                    <p class="list-group-item-text small"> 11:27pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-header -->
                            <div class="list-group-header"> Jan 21, 2018 </div><!-- /.list-group-header -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-teal"><span class="fa fa-file-pdf"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">Usulan Beasiswa Tahun 2018.pdf</a>
                                    </h4>
                                    <p class="list-group-item-text"> 1.1 MB by Peter Willis </p>
                                    <p class="list-group-item-text small"> 6:20pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-green"><span class="fa fa-file-excel"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">Daftar Peserta Ujian.xlsx</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.37 MB by Peter Willis </p>
                                    <p class="list-group-item-text small"> 1:32pm </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-blue"><span class="fa fa-file-word"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">data_not_verified.docx</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.94 MB by Kathryn Black </p>
                                    <p class="list-group-item-text small"> 5:11am </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-header -->
                            <div class="list-group-header"> Jan 19, 2018 </div><!-- /.list-group-header -->
                            <!-- .list-group-item -->
                            <div class="list-group-item align-items-start">
                                <div class="list-group-item-figure">
                                    <a href="#" class="tile tile-circle bg-red"><span class="fa fa-file-powerpoint"></span></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title text-truncate">
                                        <a href="#">mockup-presentation.pptx</a>
                                    </h4>
                                    <p class="list-group-item-text"> 0.59 MB by Kathryn Black </p>
                                    <p class="list-group-item-text small"> 6:50am </p>
                                </div>
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-n1"></div><button type="button" class="dropdown-item">Download</button> <button type="button" class="dropdown-item">View details</button> <button type="button" class="dropdown-item">Share file</button> <button type="button" class="dropdown-item">Copy link file</button>
                                            <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                            </div><!-- /.list-group-item -->
                        </div><!-- /.list-group -->
                    </div><!-- /#message-files -->
                </div><!-- /Tab panes -->
            </div><!-- /.sidebar-section-fill -->
        </div><!-- /.page-sidebar -->
    </div><!-- /.page -->
@endsection