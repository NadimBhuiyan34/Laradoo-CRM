 
<header class="py-2 container-fluid bg-white" style="border-bottom: 1px solid rgb(177, 177, 177) !important; height:90px !important">
    <div class="row">
        <div class="col-md-6 justify-content-md-start">
            <h5>{{ $title }}</h5>
        </div>
        <!--search bar-->
        <x-layouts.header_part.searchbar/>

    </div>


    <div class="row">

        <!--data-table-header-->
        {{-- <x-layouts.header_part.button buttonIcon="{{ $buttonIcon }}" btnText1="{{ $btnText1 }}" btnText2="{{ $btnText2 }}" btnRoute="{{ $btnRoute }}"/> --}}
   
        <div class="col-xl-6 justify-content-md-start" id="data-table-header">
            <div class="py-0">
                
               <a href="{{ route('sales-teams-new') }}"> <td><button type="button" class="btn btn-success btn-sm legitRipple rounded" data-toggle="modal" data-target="#modal_form_horizontal" style="background-color:hsl(126, 95%, 23%); color: white; padding:3px 10px 3px 10px">Create</button></td></a>
                <td><button type="button" class="btn  btn-sm legitRipple py-1 px-2 fas fa-download mr-3 iconsize" data-toggle="modal" data-target="#modal_large" style="background-color:rgb(255, 255, 255); color: rgb(5, 71, 3);"></button></td>
        
        
                <a href="#" class="btn legitRipple btn-sm px-1 float-end mt-1 d-none" id="action" data-toggle="dropdown" aria-expanded="true" style="padding-top:3px;padding-bottom:3px "><i class="icon-cog2 show-at-hover mr-1 fw-bold icon-sm"style="font-size: 0.6em;"></i><span style="font-size: 1em;" class="text-capitalize">Action</span></a>
                
        
               
        
        
                {{-- <button class="btn btn-icon legitRipple" type="button">
                    <i class="icon-download7 text-teal-800"></i>
                </button> --}}
        
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

           {{-- this is filter option --}}
           {{-- <x-layouts.header_part.filter filterDisplay="{{ $filterDisplay }}"/> --}}
           <div class="btn-group justify-content-md-start">
            <div class="dropdown my-1 ">
                <a href="#" class="btn legitRipple btn-sm px-1 " data-toggle="dropdown" aria-expanded="true" style="padding-top:3px;padding-bottom:3px "><i class="icon-filter3 mr-1 "style="font-size: 0.73em;"></i><span style="font-size: 1em;" class="text-capitalize">FIlters</span></a>
        
              
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a href="#" class="dropdown-item">My Pipeline</a>
                    <a href="#" class="dropdown-item">Unassigned</a>
                    <a href="#" class="dropdown-item">Open Opportunities</a>
                    
        
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Unread Message</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Creation Date</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">August</a>
                            <a href="#" class="dropdown-item">July</a>
                            <a href="#" class="dropdown-item">June</a>
                            <a href="#" class="dropdown-item">Q4</a>
                            <a href="#" class="dropdown-item">Q3</a>
                            <a href="#" class="dropdown-item">Q2</a>
                            <a href="#" class="dropdown-item">Q1</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">2022</a>
                            <a href="#" class="dropdown-item">2021</a>
                            <a href="#" class="dropdown-item">2020</a>
        
                        </div>
                    </div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Closed Date</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">August</a>
                            <a href="#" class="dropdown-item">July</a>
                            <a href="#" class="dropdown-item">June</a>
                            <a href="#" class="dropdown-item">Q4</a>
                            <a href="#" class="dropdown-item">Q3</a>
                            <a href="#" class="dropdown-item">Q2</a>
                            <a href="#" class="dropdown-item">Q1</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">2022</a>
                            <a href="#" class="dropdown-item">2021</a>
                            <a href="#" class="dropdown-item">2020</a>
        
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Won</a>
                    <a href="#" class="dropdown-item">Lost</a>
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
            <div class="dropdown my-1 ">
                
                <a href="#" class="btn legitRipple btn-sm px-1 " data-toggle="dropdown" aria-expanded="true" style="padding-top:3px;padding-bottom:3px "><i class="icon-paragraph-justify3 mr-1 "style="font-size: 0.73em;"></i><span style="font-size: 1em;" class="text-capitalize">Group By</span></a>
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
            <div class="dropdown my-1">
                
                <a href="#" class="btn legitRipple btn-sm px-1 " data-toggle="dropdown" aria-expanded="true" style="padding-top:3px;padding-bottom:3px "><i class="icon-star-full2 mr-1 "style="font-size: 0.73em;"></i><span style="font-size: 1em;" class="text-capitalize">Favorites</span></a>
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
           <x-layouts.header_part.iconbar/>

           

        </div>

    </div>
</header>