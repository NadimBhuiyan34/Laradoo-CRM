<header class="py-2 container-fluid bg-white" style="border-bottom: 1px solid rgb(177, 177, 177) !important; height:90px !important">
    <div class="row">
        <div class="col-md-6 justify-content-md-start">
            <h5>{{ $title }}</h5>
        </div>
        <!--search bar-->
      
        

    </div>


    <div class="row">

        <!--data-table-header-->
        {{-- <x-layouts.header_part.button buttonIcon="{{ $buttonIcon }}" btnText1="{{ $btnText1 }}" btnText2="{{ $btnText2 }}" btnRoute="{{ $btnRoute }}"/> --}}
   
        <div class="col-xl-6 justify-content-md-start" id="data-table-header">
            <div class="py-0">
                
               <a href="{{ route('sales-teams-new') }}"> <td><button type="button" class="btn btn-success btn-sm legitRipple rounded" data-toggle="modal" data-target="#modal_form_horizontal" style="background-color:hsl(126, 95%, 23%); color: white; padding:3px 10px 3px 10px">SAVE</button></td></a>
                <td><button type="button" class="btn  btn-sm legitRipple py-1 px-2 " data-toggle="modal" data-target="#modal_large" style="background-color:rgb(255, 255, 255); color: rgb(5, 71, 3);">DISCARD</button></td>
        
        
               
                
                
        
               
        
        
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
         
           {{-- <x-layouts.header_part.iconbar iconBar="{{ $iconBar }}"/> --}}

           

        </div>

    </div>
</header>