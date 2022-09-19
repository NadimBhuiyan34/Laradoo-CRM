
    <x-layouts.master>
        <x-slot name="title">Activities New</x-slot>
    <!--header-->
   <x-layouts.all_header.activities.create title="Activities/ New"/>

   <section class="container-fluid " style="background-color:#e4e7e4eb">
   <div class="card w-75 mt-2 mx-auto">
     <div class="card-body">
       <form action="" class="fw-bold" style="font-size:0.9em;">
        <div class="col-md-8">
            <label for="" style="padding:0px" class="fw-bold">Sales Teams</label>
            <input type="text" class="form-control" placeholder="e.g. North America" .="" style="height:20px ">
        </div>
             
            <div class="form-check mt-2 col-md-8">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Quotations
                </label>
            
           <div class="d-flex mt-1">
            {{-- <input type="checkbox" class="form-check-input mr-2">Pipeline --}}
           
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
            Pipeline
            </label>
        
            
                <label class="form-check-label ml-4">
                    <input type="checkbox" class="form-check-input">
                    Leads
                </label>
           
            {{-- <input type="checkbox" class="form-check-input ml-5"><span class="ml-5">Leads</span> --}}
            
            </div>
            
           </div>
         <div class="col-md-8 mt-3">
            <label for="">Teams Details</label>
            <hr class="m-0">
         </div>
        
         <div class="form-group row" data-select2-id="45" style="margin-left:1px ">
            <label class="col-lg-2 col-form-label py-0 mt-1">Teams Name</label>
            <div class="w-50 p-0 mt-1" data-select2-id="44" style="height:25px">
                <select  class="form-control form-control-select2 select2-hidden-accessible p-0"  data-fouc=""  tabindex="-1" aria-hidden="false" style="height:20px">
                   
                   <option value="" class="disabled P-5 mt-2"></option>
                        <option value="AK" data-select2-id="57">Nadim</option>
                        <option value="HI" data-select2-id="58">Hawaii</option>
                     
                   
                
                    
                </select>
                
            </div>
        </div>
        <div class="form-group row"style="margin-left:1px ">
            <label class="col-lg-2 col-form-label">Email Alias</label>
            <div class="col-lg-9 d-flex">
                <input type="text" class="form-control w-50" placeholder="" style="height: 10px">
                <span style="">@edu-btal1.odoo.com</span>
            </div>
        </div>
         <div class="form-group row" data-select2-id="45" style="margin-left:1px ">
            <label class="col-lg-2  py-0">Accept Emails Form</label>
            <div class="w-50 p-0 mt-1" data-select2-id="44" style="height:25px">
                <select  class="form-control form-control-select2 select2-hidden-accessible p-0"  data-fouc=""  tabindex="-1" aria-hidden="false" style="height:20px">
                   
                   <option value="" class="disabled P-5 mt-2"></option>
                        <option value="AK" data-select2-id="57">Nadim</option>
                        <option value="HI" data-select2-id="58">Hawaii</option>
                     
                   
                
                    
                </select>
                
            </div>
        </div>
         <div class="form-group row py-0" data-select2-id="45" style="margin-left:1px ">
            <label class="col-lg-2  py-0">Company</label>
            <div class="w-50 p-0 mt-1" data-select2-id="44" style="height:25px">
                <select  class="form-control form-control-select2 select2-hidden-accessible p-0 m-0"  data-fouc=""  tabindex="-1" aria-hidden="false" style="height:20px">
                   
                   <option value="" class="disabled P-5 mt-2"></option>
                        <option value="AK" data-select2-id="57">Nadim</option>
                        <option value="HI" data-select2-id="58">Hawaii</option>
                     
                   
                
                    
                </select>
                
            </div>
        </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Members</a></li>
               
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="basic-tab1">
                   <button class="btn btn-white btn-sm px-1 ml-4">ADD</button>
                    
                </div>

                

                
            </div>
        </div>
       </form>
     </div>
   </div>
        
    
    </x-layouts.master>


