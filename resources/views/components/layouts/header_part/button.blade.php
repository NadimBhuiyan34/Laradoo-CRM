@props(['buttonIcon'=>"",'btnText1'=>"Create",'btnText2'=>"",'btnRoute'])
<div class="col-xl-6 justify-content-md-start" id="data-table-header">
    <div class="py-0">
        
       <a href="{{$btnRoute}}"> <td><button type="button" class="btn btn-success btn-sm legitRipple rounded" data-toggle="modal" data-target="#modal_form_horizontal" style="background-color:hsl(126, 95%, 23%); color: white; padding:3px 10px 3px 10px">{{ $btnText1 }}</button></td></a>
        <td><button type="button" class="btn  btn-sm legitRipple py-1 px-2 {{ $buttonIcon }}" data-toggle="modal" data-target="#modal_large" style="background-color:rgb(255, 255, 255); color: rgb(5, 71, 3);">{{ $btnText2 }}</button></td>


        <a href="#" class="btn legitRipple btn-sm px-1 float-end mt-1 d-none" id="action" data-toggle="dropdown" aria-expanded="true" style="padding-top:3px;padding-bottom:3px "><i class="icon-cog2 show-at-hover mr-1 fw-bold icon-sm"style="font-size: 0.6em;"></i><span style="font-size: 1em;" class="text-capitalize">Action</span></a>
        

        <x-layouts.modal.lead/>


        {{-- <button class="btn btn-icon legitRipple" type="button">
            <i class="icon-download7 text-teal-800"></i>
        </button> --}}

    </div>
</div>