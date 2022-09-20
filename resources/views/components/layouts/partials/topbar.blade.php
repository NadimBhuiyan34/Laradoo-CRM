<!-- topbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark navbar-static" style="background-color: hsl(132, 98%, 17%) !important;height:40px">
        <div class="d-flex justify-content-center align-items-center ">
           <a href="{{ route('homepage') }}">
            <span class="mr-2"><i class="icon-grid  fw-bold text-white"data-popup="tooltip" title="Home Menu" data-placement="bottom" id="left" data-original-title="Left tooltip" style="font-size:13px"></i></span>
           
            <h1 class="my-0 d-inline fw-bold py-0 text-white" style="font-size:16px">CRM</h1>
           </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <!-- left -->
            <ul class="navbar-nav mr-auto text-capitalize ml-4 ">
                <li class="nav-item dropdown" >
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple py-0" data-toggle="dropdown">
                        Sales
                    </a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-content wmin-md-150">
                        <a href="{{ route('homepage') }}" class="dropdown-item">My Pipeline</a>
                        <a href="{{ route('activities-index') }}" class="dropdown-item">My Activities</a>
                        <a href="{{ route('quotation-index') }}" class="dropdown-item">My Quotations</a>
                        <a href="{{ route('teams-index') }}" class="dropdown-item">Teams</a>
                        <a href="{{ route('customer-index') }}" class="dropdown-item">Customer</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="{{route('leads-index')}}" class="navbar-nav-link dropdown-toggle legitRipple py-0" >
                        Leads
                    </a>
                </li>



                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple py-0" data-toggle="dropdown">
                        Reporting
                    </a>

                    <div class="dropdown-menu dropdown-menu-left dropdown-content wmin-md-150">
                        <a href="{{ route('r-dashboard-index') }}" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('forecast-index') }}" class="dropdown-item">Forecast</a>
                        <a href="{{ route('lead-analysis') }}" class="dropdown-item">Leads</a>
                        <a href="{{ route('pipeline-analysis') }}" class="dropdown-item">Pipeline</a>
                        <a href="{{ route('activities-analysis') }}" class="dropdown-item">Activites</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple py-0" data-toggle="dropdown">
                        Configuration
                    </a>

                    <div class="dropdown-menu dropdown-menu-left dropdown-content wmin-md-150">
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ route('sales-teams') }}" class="dropdown-item">Sales Teams</a>

                        <a href="{{ route('activity-type-index') }}" class="dropdown-item">Activity Types</a>
                        <a href="{{ route('recurring-index') }}" class="dropdown-item">Recurring Plans</a>
                        <div class="dropdown-header  font-size-xs line-height-xs">Pipeline</div>
                        <a href="{{ route('tags-index') }}" class="dropdown-item">Tags</a>
                        <a href="{{ route('lostreason-index') }}" class="dropdown-item">Lost Reasons</a>
                        <div class="dropdown-header  font-size-xs line-height-xs">Lead Generation</div>
                        <a href="{{ route('lead-mining-index') }}" class="dropdown-item">Lead Mining Requests</a>
                        <a href="{{ route('lead-rules-index') }}" class="dropdown-item">Visit to Lead Rules</a>
                    </div>
                </li>
            </ul>

            <!-- right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple position-relative" data-toggle="dropdown">
                        <i class="icon-bubble" style="font-size: 14px;margin-top:5px"></i>
                        <span class="badge badge-info badge-pill badge-float border-2 border-white" style="margin-top:5px">1</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="text-capitalize d-flex justify-content-between align-items-center px-2 pt-1">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="active">all</a>
                                <a href="#">chat</a>
                                <a href="#">channels</a>
                            </div>
                            <a href="#" class="active">new message</a>
                        </div>
                        <div class="dropdown-divider opacity-75"></div>
                        <ul id="allchats" class="px-0 mb-2">
                            <li class="media">
                                <a href="#" class="media">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle mr-3" alt="">

                                    <div class="media-body">
                                        <div class="font-weight-semibold">Otto Gerwald</div>
                                        <span class="font-size-sm text-muted">Front end developer</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle mr-3" alt="">

                                    <div class="media-body">
                                        <div class="font-weight-semibold">Otto Gerwald</div>
                                        <span class="font-size-sm text-muted">Front end developer</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle mr-3" alt="">

                                    <div class="media-body">
                                        <div class="font-weight-semibold">Otto Gerwald</div>
                                        <span class="font-size-sm text-muted">Front end developer</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle mr-3" alt="">

                                    <div class="media-body">
                                        <div class="font-weight-semibold">Otto Gerwald</div>
                                        <span class="font-size-sm text-muted">Front end developer</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
                        <i class="icon-history" style="margin-top:5px"></i>
                        <span class="badge badge-info badge-pill badge-float border-2 border-white" style="margin-top:5px">3</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-150">
                        <a href="#" class="dropdown-item disabled">Congratulation, you're done with your activities</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
                        <i class="icon-toggle"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-150">
                        <a href="#" class="dropdown-item disabled">Congratulation, you're done with your activities</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
                        edu-btal
                    </a>

                    <div class="dropdown-menu dropdown-menu-left dropdown-content wmin-md-150">
                        <div class="form-check">
                            <label class="form-check-label ml-2">
                                <input type="checkbox" class="form-check-input" checked="">
                                Software
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label ml-2">
                                <input type="checkbox" class="form-check-input">
                                IT center

                            </label>

                        </div>

                        <div class="form-check">
                            <label class="form-check-label ml-2">
                                <input type="checkbox" class="form-check-input" checked="">
                                Pondit
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label ml-2">
                                <input type="checkbox" class="form-check-input">
                                Training

                            </label>

                        </div>

                    </div>
                </li>



                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle legitRipple d-flex align-items-center" data-toggle="dropdown">
                        <div class="d-flex text-capitalize" id="profile">
                            <img src="assets/images/image.svg" alt="image" class="mr-2 rounded-circle" style="width:20px;height:20px">
                            <p class="my-0">jalil ahmed pavel</p>
                        </div>                                      
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-250 text-capitalize">
                        <a href="#" class="dropdown-item">documentation</a>
                        <a href="#" class="dropdown-item">support</a>
                        <a href="#" class="dropdown-item">shortcuts</a>
                        <div class="dropdown-divider opacity-75"></div>
                        <a href="#" class="dropdown-item">my profile</a>
                        <a href="#" class="dropdown-item">my databases</a>
                        <a href="#" class="dropdown-item">my oddo.com subscription</a>
                        <div class="dropdown-divider opacity-75"></div>
                        <a href="#" class="dropdown-item">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>