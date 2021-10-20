<div>
    <div class="container" style="padding:39px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Slider
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Slider</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success! </strong> {{Session::get('success_message')}}
                        </div>
                        @endif
                        <form class="form-horizontal" action="" wire:submit.prevent="addSlider" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input wire:model="title" type="text" name="" id="" class="form-control input-md" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sub title</label>
                                <div class="col-md-4">
                                    <input wire:model="subtitle" type="text" name="" id="" class="form-control input-md" placeholder="Sub title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Price</label>
                                <div class="col-md-4">
                                    <input wire:model="price" name="" id="" class="form-control input-md" placeholder="Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Link</label>
                                <div class="col-md-4">
                                    <input wire:model="link" name="" id="" class="form-control input-md" placeholder="Link">
                                </div>
                            </div>

                          

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status" name="" id="" required>
                                        
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

     

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slider Image</label>
                                <div class="col-md-4">
                                    <input wire:model="image" type="file" name="" id="" class="input-file" placeholder="Slider Image">
                                    @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" alt="" width="120">
                                    @endif
                                </div>
                            </div>
                            


                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
