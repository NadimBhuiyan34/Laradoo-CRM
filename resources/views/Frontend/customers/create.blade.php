
    <x-layouts.master>
        <x-slot name="title">Customers</x-slot>
    <!--header-->
   {{-- <x-layouts.partials.header title="Sales Teams"  buttonIcon="fas fa-download mr-3 iconsize" iconBar="d-none" btnRoute="route('sales-teams-new')"/> --}}
   <x-layouts.header_part.create title="Customers/ New" />
   
  
   <form action="">
    <div class="card mx-auto mt-2 w-75 pb-3">
        <table class="table table-bordered ">
            <thead class="border">
                <th>Meeting</th>
                <th>Opportunity</th>
                <th>Sales</th>
                <th>Purchases</th>
                <th>On-Time Rate</th>
                <th>Invoiced</th>
                <th>Vendor Bills</th>
                <th>Partner Ledger</th>
            </thead>
        </table>



        <div class="row mt-3" style="height:90px">
            <div class="form-check fw-bold  col-md-6">
          
               <div class="ml-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                Individual
                </label>
           
                <input class="form-check-input ml-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label ml-4" for="flexRadioDefault1">
                Company
                </label>
               </div>
                <input type="text" class="form-control mt-2" placeholder="e.g. North America" .="" style="height:25px">
              
                <div class="w-100 p-0 mt-1" data-select2-id="44" style="height:25px">
                    <select  class="form-control form-control-select2 select2-hidden-accessible p-0"  data-fouc="" tabindex="-1" aria-hidden="false" placeholder="Company">
                       
                       <option value="" class="disabled P-5 mt-2"></option>
                            <option value="AK" data-select2-id="57">Nadim</option>
                            <option value="HI" data-select2-id="58">Hawaii</option>
                        
                    </select>
                    
                </div>
         
           </div>

            <div class="col-md-6">
              <div class="my-auto mt-3">
                <input type="file" style="height: 200px;width:200px" class="float-end my-auto mt-3">
              </div>
            </div>

        </div>

   <div class="row">
    <div class="row ml-2 col-md-6">
        <div class="col-md-4">
            <div class="w-100 p-0 mt-1" data-select2-id="44" style="height:25px">
                <select  class="form-control form-control-select2 select2-hidden-accessible p-0"  data-fouc="" tabindex="-1" aria-hidden="false" placeholder="Company">
                   
                   <option value="" class="disabled P-5 mt-2">Contact</option>
                        <option value="AK" data-select2-id="57">Nadim</option>
                        <option value="HI" data-select2-id="58">Hawaii</option>
                    
                </select>
                
            </div>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control mt-2" placeholder="e.g. North America" .="" style="height:25px">
            <input type="text" class="form-control mt-2" placeholder="e.g. North America" .="" style="height:25px">
             <div class="row justify-content-between p-0">
                <input type="text" class="form-control mt-2 col-md-3" placeholder="City" .="" style="height:25px">
                <input type="text" class="form-control mt-2 col-md-3" placeholder="Sate" .="" style="height:25px">
                <input type="text" class="form-control mt-2 col-md-3" placeholder="ZIP" .="" style="height:25px">
             </div>
             <div class="w-100 p-0 mt-1" data-select2-id="44" style="height:25px">
                <select  class="form-control form-control-select2 select2-hidden-accessible p-0"  data-fouc="" tabindex="-1" aria-hidden="false" placeholder="Company">
                   
                   <option value="" class="disabled P-5 mt-2">Country</option>
                        <option value="AK" data-select2-id="57">Nadim</option>
                        <option value="HI" data-select2-id="58">Hawaii</option>
                    
                </select>
                
            </div>
        </div>
        <div class="form-group row mt-3"style="margin-left:20px ">
            <label class="col-lg-2 col-form-label">Tax Id</label>
            <div class="col-md-8 ml-5">
                <input type="text" class="form-control w-100" placeholder="" style="height: 10px">
                 
            </div>
        </div>
       
     <div>
    </div>
          
       <div class="col-md-4">
          
        </div> 
    </div>
   </form>
  
   
       
    
    </x-layouts.master>


