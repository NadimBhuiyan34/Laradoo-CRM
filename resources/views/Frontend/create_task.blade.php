<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laradoo</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->



    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/core/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/list/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js"></script>
    <script src="global_assets/js/demo_pages/fullcalendar_basic.js"></script>

    <script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_basic.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_stacked.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_thermometer.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_stacked_clustered.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/waterfall_compositive.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/waterfall_change.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_timeline.js"></script>
    <!-- /theme JS files -->
</head>

<body>


    <x-layouts.partials.topbar />

    <!--header-->
    <header class="py-2 container-fluid bg-light" style="border-bottom: 1px solid rgb(177, 177, 177) !important;">
        <div class="row">
            <div class="col-md-6 justify-content-md-start">
                <h4>My Tasks/NEW</h4>
            </div>


            <!--search bar-->
            <div class="col-md-6 justify-content-around ">
                <div class="input-group">
                    <!-- <div class="border border-dark">
						<i class="icon-filter4 bg-dark py-2"></i>
						<h7>My Questions</h7>
						<button class="btn btn-sm legitRipple">
							<i class="icon-x"></i>
						</button>
					</div> -->

                    <input class="form-control" type="text" placeholder="search...">
                    <span class="input-group-append">
                        <span class="input-group-text">
                            <i class="icon-search4">
                            </i>
                        </span>
                    </span>

                </div>
            </div>

        </div>


        <div class="row">

            <!--data-table-header-->
            <div class="col-xl-6 justify-content-md-start" id="data-table-header">
                <div class="btn-group">

                    <button type="button" class="btn btn-primary legitRipple" data-toggle="modal" data-target="#modal_form_horizontal" style="background-color:#017e84; color: white;">SAVE</button>

                    <button type="button"  data-toggle="modal" data-target="#modal_form_horizontal" style=" background-color:#F9F9F3 ; color:#017e84; border:none "><b>DISCARD</b></button>

                   

                </div>
            </div>

            <!--calender header-->
            <div class="col-xl-6 justify-content-md-start" id="calender-event-header">
                <div class="btn-group">
                    <a href="#" class="btn bg-indigo-400 dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="true" style="background-color: #017e84">measures</a>

                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                        <a href="#" class="dropdown-item">Currency Rate</a>
                        <a href="#" class="dropdown-item">Taxes</a>
                        <a href="#" class="dropdown-item">Total</a>
                        <a href="#" class="dropdown-item">Untaxed Amount</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Count</a>
                    </div>

                    <button class="btn btn-icon legitRipple" title="Flip axis" type="button">
                        <i class="icon-transmission text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Expand all" type="button">
                        <i class="icon-move-alt1 text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Download xlsx" type="button">
                        <i class="icon-download7 text-teal-800"></i>
                    </button>

                </div>
            </div>

            <!--chart header-->
            <div class="col-xl-6 justify-content-md-start" id="chart-header">
                <div class="btn-group">
                    <a href="#" class="btn bg-indigo-400 dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="true" style="background-color: #017e84">measures</a>

                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                        <a href="#" class="dropdown-item">Currency Rate</a>
                        <a href="#" class="dropdown-item">Taxes</a>
                        <a href="#" class="dropdown-item">Total</a>
                        <a href="#" class="dropdown-item">Untaxed Amount</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Count</a>
                    </div>

                    <button class="btn btn-icon legitRipple" title="Bar Chart" type="button">
                        <i class="icon-stats-bars2  text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Line Chart" type="button">
                        <i class="icon-chart text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Pie Chart" type="button">
                        <i class="icon-pie-chart2  text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Stacked" type="button">
                        <i class="icon-database text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Descending" type="button">
                        <i class="icon-sort-amount-desc  text-teal-800"></i>
                    </button>

                    <button class="btn btn-icon legitRipple" title="Ascending" type="button">
                        <i class="icon-sort-amount-asc  text-teal-800"></i>
                    </button>

                </div>
            </div>

            <div class="col-xl-6 d-flex justify-content-between">

                <div class="btn-group justify-content-md-start">
                    <div class="dropdown">
                        <a href="#" class="btn dropdown-toggle legitRipple " data-toggle="dropdown" aria-expanded="true"><i class="icon-filter3 mr-1"></i>Filters</a>

                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a href="#" class="dropdown-item">My Favourites</a>

                            <div class="dropdown-divider"></div>

                            <a href="#" class="dropdown-item">Followed</a>
                            <a href="#" class="dropdown-item">My Projects</a>

                            <div class="dropdown-divider"></div>

                            <a href="#" class="dropdown-item">Open</a>

                            <div class="dropdown-divider"></div>

                            <a href="#" class="dropdown-item">Archived</a>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">Add Customer Filters</a>
                                <div class="dropdown-menu">
                                    <div>
                                        <select class="form-control form-control-uniform">
                                            <option value="opt1">Styled select box</option>
                                            <option value="opt2">Option 2</option>
                                            <option value="opt3">Option 3</option>
                                            <option value="opt4">Option 4</option>
                                            <option value="opt5">Option 5</option>
                                            <option value="opt6">Option 6</option>
                                            <option value="opt7">Option 7</option>
                                            <option value="opt8">Option 8</option>
                                        </select>

                                        <select class="form-control form-control-uniform">
                                            <option value="opt1">True</option>
                                            <option value="opt2">False</option>
                                        </select>
                                        <div class="btn-group px-3 py-2 d-flex text-center" style="height: 50px">
                                            <button class="btn btn-sm btn-primary legitRipple" type="button">Apply</button>
                                            <button class="btn btn-sm btn-icon legitRipple" type="button">
                                                <i class="icon-add"></i>ADD
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="btn dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="true"><i class="icon-paragraph-justify3 mr-1"></i>Group By</a>

                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a href="#" class="dropdown-item">Sales Persons</a>
                            <a href="#" class="dropdown-item">Customer</a>

                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">Order Date</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Year</a>
                                    <a href="#" class="dropdown-item">Quarter</a>
                                    <a href="#" class="dropdown-item">Month</a>
                                    <a href="#" class="dropdown-item">Week</a>
                                    <a href="#" class="dropdown-item">Day</a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">Add Custom Group</a>
                                <div class="dropdown-menu">
                                    <div>
                                        <select class="form-control form-control-uniform dropdown-item">
                                            <option value="opt1">Analytic Account</option>
                                            <option value="opt2">Campaign</option>
                                            <option value="opt3">Company</option>
                                            <option value="opt4">Created By</option>
                                            <option value="opt5">Creation Date</option>
                                            <option value="opt6">Currency</option>
                                            <option value="opt7">Customer</option>
                                            <option value="opt8">Customer Reference</option>
                                        </select>
                                        <div class="dropdown-item">
                                            <button class="btn btn-primary legitRipple mr-auto" type="button" style="background-color:#017e84">Apply</button>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="btn dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="true"><i class="icon-star-full2 mr-1"></i>Favorites</a>

                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">

                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">Save Current Search</a>
                                <div class="dropdown-menu">
                                    <h7 class="dropdown-item">Quotations</h7>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-check dropdown-item">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked="">
                                            Use by default
                                        </label>
                                    </div>
                                    <div class="form-check dropdown-item">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked="">
                                            Share with all users
                                        </label>
                                    </div>
                                    <div class="dropdown-item">
                                        <button class="btn btn-primary legitRipple" type="button" style="background-color:#017e84">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </header>

    <section class="data-table container-fluid">

        <!-- 1 columns form -->

        <div class="row justify-content-between">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title"></h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">

                                <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder=" ★ Task Title">
                                            </div>
                                        </div>

                                
                                    <fieldset>
                                        

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Project</label>
                                            <div class="col-lg-9">
                                                <select data-placeholder="private" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <optgroup >
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="KY">Kentucky</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Attach screenshot:</label>
                                            <div class="col-lg-9">
                                                <input type="file" class="form-input-styled" data-fouc>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Your message:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Your name:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="First name" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Last name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Phone #:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Location:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                                                <option></option>
                                                                <option value="1">Canada</option>
                                                                <option value="2">USA</option>
                                                                <option value="3">Australia</option>
                                                                <option value="4">Germany</option>
                                                            </select>
                                                        </div>

                                                        <input type="text" placeholder="ZIP code" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="State/Province" class="form-control mb-3">
                                                        <input type="text" placeholder="City" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Your address of living" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Additional message:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /1 columns form -->

            <!-- 2 columns form -->
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Multiple columns</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Enter your name:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Enter your password:</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" placeholder="Your strong password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Select your state:</label>
                                            <div class="col-lg-9">
                                                <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="KY">Kentucky</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Attach screenshot:</label>
                                            <div class="col-lg-9">
                                                <input type="file" class="form-input-styled" data-fouc>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Your message:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Your name:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="First name" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Last name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Phone #:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Location:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                                                <option></option>
                                                                <option value="1">Canada</option>
                                                                <option value="2">USA</option>
                                                                <option value="3">Australia</option>
                                                                <option value="4">Germany</option>
                                                            </select>
                                                        </div>

                                                        <input type="text" placeholder="ZIP code" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="State/Province" class="form-control mb-3">
                                                        <input type="text" placeholder="City" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Your address of living" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Additional message:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /2 columns form -->
        </div>







        <script src="{{asset('assets/select2.js')}}"></script>
        <script src="{{asset('assets/select2.min.js')}}"></script>
        <script src="{{asset('assets/dragula.min.js')}}"></script>
        <script src="{{asset('assets/uniform.min.js')}}"></script>
        <script src="{{asset('assets/extension_dnd.js')}}"></script>



</body>

</html>