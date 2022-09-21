
    <x-layouts.master>
        <x-slot name="title">Dashboard</x-slot>
    <!--header-->
   {{-- <x-layouts.partials.header title="Sales Teams"  buttonIcon="fas fa-download mr-3 iconsize" iconBar="d-none" btnRoute="route('sales-teams-new')"/> --}}
   <x-layouts.all_header.analysis.rdashboard title="Dashboard" />
   
   <section class="container-fluid " style="background-color:#e4e7e4eb">

       
            
                
    <div class="mb-2 mt-2">
        <button class="btn btn-primary btn-sm btn-outline-dark dropdown-toggle " data-toggle="dropdown" aria-expanded="false" style="padding:2px 4px 2px 4px !important">Measures</button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(123px, 38px, 0px);">
                    <a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
                    <a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
                </div>

            
                    <button type="button" class="btn  dropdown-toggle legitRipple btn-sm btn-outline-dark" data-toggle="dropdown" aria-expanded="false"style="padding:2px 4px 2px 4px !important">Dropdown <i class="icon-menu7 ml-2"></i></button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(152px, 38px, 0px);">
                        <a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
                        <a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
                        <a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
                    </div>

                    

                  
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-dark btn-dark btn-icon legitRipple" style="padding:2px 4px 2px 4px !important"><i class="far fa-chart-bar"></i></button>
                        <button type="button" class="btn btn-outline-dark  btn-icon legitRipple"style="padding:2px 4px 2px 4px !important"><i class="fas fa-chart-area"></i></button>
                        <button type="button" class="btn btn-outline-dark btn-icon legitRipple"style="padding:2px 4px 2px 4px !important"><i class="fas fa-chart-pie"></i></button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-dark btn-dark btn-icon legitRipple" style="padding:2px 4px 2px 4px !important"><i class="fas fa-sort-amount-down"></i></button>
                        <button type="button" class="btn btn-outline-dark  btn-icon legitRipple"style="padding:2px 4px 2px 4px !important"><i class="fas fa-sort-amount-up"></i></button>
                       
                    </div>
    </div> 

           
    


        <div class="card">
             

            <div class="card-body">
                

                <div class="chart-container">
                    <div class="chart" id="google-area"></div>
                </div>
            </div>
        </div>
    </x-layouts.master>


