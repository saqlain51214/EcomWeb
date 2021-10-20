<div>
    <div class="container" style="padding:39px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.category')}}" class="btn btn-success pull-right">All Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success! </strong> {{Session::get('success_message')}}
                        </div>
                        @endif
                        <form class="form-horizontal" action="" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input wire:model="name" wire:keyup="generateslug" type="text" name="" id="" class="form-control input-md" placeholder="Category Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Slug</label>
                                <div class="col-md-4">
                                    <input wire:model="slug" type="text" name="" id="" class="form-control input-md" placeholder="Category Slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
