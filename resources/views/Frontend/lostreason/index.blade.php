    
    <x-layouts.master>
        <x-slot name="title">Lost Reasons</x-slot>
    <!--header-->
   {{-- <x-layouts.partials.header title="Sales Teams"  buttonIcon="fas fa-download mr-3 iconsize" iconBar="d-none" btnRoute="route('sales-teams-new')"/> --}}
   <x-layouts.all_header.lostreason.index title="Lost Reasons" />
   
   <section class="container-fluid " style="background-color:#e4e7e4eb">

        <table class="table datatable-sorting border mt-1 bg-white">
            <thead class="">
                <tr class="" style="height: 10px">
                    
                    <th>Number</th>
                    <th>Creation Date</th>
                    <th>Customer</th>
                    <th>Sales Person</th>
                    <th>Next Activity</th>
                    <th>Company</th>
                    <th>Total</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
              
                
                
               
          
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    
                </tr>
            </tbody>
        </table>
    
    </x-layouts.master>


