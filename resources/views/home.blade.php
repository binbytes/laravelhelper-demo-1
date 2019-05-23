@extends('layouts.app', [
    'pageTitle' => 'Dashboard'
])

@section('content')
    <div class="row row-cards">
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        6%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">43</div>
                    <div class="text-muted mb-4">New Tickets</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -3%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">17</div>
                    <div class="text-muted mb-4">Closed Today</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        9%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">7</div>
                    <div class="text-muted mb-4">New Replies</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        3%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">27.3K</div>
                    <div class="text-muted mb-4">Followers</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -2%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">$95</div>
                    <div class="text-muted mb-4">Daily Earnings</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -1%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">621</div>
                    <div class="text-muted mb-4">Products</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Development Activity</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th colspan="2">User</th>
                            <th>Commit</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="w-1"><span class="avatar" style="background-image: url(../images/faces/female/18.jpg)"></span></td>
                            <td>Ronald Bradley</td>
                            <td>Initial commit</td>
                            <td class="text-nowrap">May 6, 2018</td>
                            <td class="w-1"><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td><span class="avatar">BM</span></td>
                            <td>Russell Gibson</td>
                            <td>Main structure</td>
                            <td class="text-nowrap">April 22, 2018</td>
                            <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td><span class="avatar" style="background-image: url(../images/faces/female/19.jpg)"></span></td>
                            <td>Beverly Armstrong</td>
                            <td>Left sidebar adjustments</td>
                            <td class="text-nowrap">April 15, 2018</td>
                            <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td><span class="avatar" style="background-image: url(../images/faces/female/17.jpg)"></span></td>
                            <td>Bobby Knight</td>
                            <td>Topbar dropdown style</td>
                            <td class="text-nowrap">April 8, 2018</td>
                            <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="alert alert-primary">Are you in trouble? <a href="#" class="alert-link">Read our documentation</a> with code samples.</div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="h5">New feedback</div>
                            <div class="display-4 font-weight-bold mb-4">62</div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-red" style="width: 28%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="h5">Today profit</div>
                            <div class="display-4 font-weight-bold mb-4">$652</div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" style="width: 84%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
                        <small class="text-muted">12 waiting payments</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fe fe-shopping-cart"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
                        <small class="text-muted">32 shipped</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                      <i class="fe fe-users"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
                        <small class="text-muted">163 registered today</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                      <i class="fe fe-message-square"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                        <small class="text-muted">16 waiting</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cards row-deck">
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(../images/david-klaasen-54203-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(../images/faces/female/18.jpg)"></div>
                        <div>
                            <a href="./profile.html" class="text-default">Rose Bradley</a>
                            <small class="d-block text-muted">3 days ago</small>
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(../images/david-marcu-114194-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">Well, I didn't vote for you.</a></h4>
                    <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(../images/faces/male/16.jpg)"></div>
                        <div>
                            <a href="./profile.html" class="text-default">Peter Richards</a>
                            <small class="d-block text-muted">3 days ago</small>
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cards row-deck">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                        <thead>
                        <tr>
                            <th class="text-center w-1"><i class="icon-people"></i></th>
                            <th>User</th>
                            <th>Usage</th>
                            <th class="text-center">Activity</th>
                            <th class="text-center">Satisfaction</th>
                            <th class="text-center"><i class="icon-settings"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">
                                <div class="avatar d-block" style="background-image: url(../images/faces/female/18.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </div>
                            </td>
                            <td>
                                <div>Elizabeth Martin</div>
                                <div class="small text-muted">
                                    Registered: Mar 7, 2019
                                </div>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>42%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="small text-muted">Last login</div>
                                <div>4 minutes ago</div>
                            </td>
                            <td class="text-center">
                                <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue">
                                    <div class="chart-circle-value">42%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="item-action dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="avatar d-block" style="background-image: url(../images/faces/female/17.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </div>
                            </td>
                            <td>
                                <div>Michelle Schultz</div>
                                <div class="small text-muted">
                                    Registered: Feb 19, 2019
                                </div>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>0%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-red" role="progressbar" style="width: 0%"
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="small text-muted">Last login</div>
                                <div>5 minutes ago</div>
                            </td>
                            <td class="text-center">
                                <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue">
                                    <div class="chart-circle-value">0%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="item-action dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="avatar d-block" style="background-image: url(../images/faces/female/19.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </div>
                            </td>
                            <td>
                                <div>Crystal Austin</div>
                                <div class="small text-muted">
                                    Registered: Mar 26, 2019
                                </div>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>96%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 96%"
                                         aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="small text-muted">Last login</div>
                                <div>a minute ago</div>
                            </td>
                            <td class="text-center">
                                <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue">
                                    <div class="chart-circle-value">96%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="item-action dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="avatar d-block" style="background-image: url(../images/faces/male/32.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </div>
                            </td>
                            <td>
                                <div>Douglas Ray</div>
                                <div class="small text-muted">
                                    Registered: Jan 4, 2019
                                </div>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>6%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-red" role="progressbar" style="width: 6%"
                                         aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="small text-muted">Last login</div>
                                <div>a minute ago</div>
                            </td>
                            <td class="text-center">
                                <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue">
                                    <div class="chart-circle-value">6%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="item-action dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="avatar d-block" style="background-image: url(../images/faces/female/12.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </div>
                            </td>
                            <td>
                                <div>Teresa Reyes</div>
                                <div class="small text-muted">
                                    Registered: Feb 21, 2019
                                </div>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>36%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-red" role="progressbar" style="width: 36%"
                                         aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="small text-muted">Last login</div>
                                <div>2 minutes ago</div>
                            </td>
                            <td class="text-center">
                                <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue">
                                    <div class="chart-circle-value">36%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="item-action dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Projects</h2>
                </div>
                <table class="table card-table">
                    <tr>
                        <td>Admin Template</td>
                        <td class="text-right">
                            <span class="badge badge-default">65%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Landing Page</td>
                        <td class="text-right">
                            <span class="badge badge-success">Finished</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Backend UI</td>
                        <td class="text-right">
                            <span class="badge badge-danger">Rejected</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Personal Blog</td>
                        <td class="text-right">
                            <span class="badge badge-default">40%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail Templates</td>
                        <td class="text-right">
                            <span class="badge badge-default">13%</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Corporate Website</td>
                        <td class="text-right">
                            <span class="badge badge-warning">Pending</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Members</h3>
                </div>
                <div class="card-body o-auto" style="height: 15rem">
                    <ul class="list-unstyled list-separated">
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(../images/faces/female/12.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Amanda Hunt</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">amanda_hunt@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(../images/faces/female/18.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Laura Weaver</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">lauraweaver@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(../images/faces/female/17.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Margaret Berry</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">margaret88@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(../images/faces/female/12.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Nancy Herrera</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">nancy_83@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(../images/faces/male/34.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Edward Larson</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">edward90@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Joan Hanson</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">joan.hanson@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
