<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                           Manage Home Categories
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success! </strong> {{Session::get('success_message')}}
                        </div>
                        @endif
                       <form wire:submit.prevent="updateHomeCategory" action="" class="form horizontal">
                           <div class="form-group" wire:ignore>
                               <label for="" class="col-md-4 control-label">Chose Categories</label>
                               <div class="col-md-4">
                                   <select class="sel_categories form-control" name="categories[]" multiple="multiple" id="" wire:model="selected_categories">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach   
                                   </select>
                               </div>
                           </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">No Of Products</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control input-md" name="" id="" wire:model="numberofproducts">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                       </form>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
 <script>
$(document).ready(function () {
    $('.sel_categories').select2();
    $('.sel_categories').on('change', function(e){
        var data = $('.sel_categories').select2('val');
        console.log(data);
        @this.set('selected_categories',data);
    });
})
    
 </script>

@endpush
