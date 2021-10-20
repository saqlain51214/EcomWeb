<div>
    <div class="container" style="padding:39px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success! </strong> {{Session::get('success_message')}}
                        </div>
                        @endif
                        <form class="form-horizontal" action="" wire:submit.prevent="updateProduct" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input wire:model="name" wire:keyup="generateSlug" type="text" name="" id="" class="form-control input-md" placeholder="Product Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-4">
                                    <input wire:model="slug" type="text" name="" id="" class="form-control input-md" placeholder="Product Slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-4">
                                    <textarea wire:model="short_description" name="" id="" class="form-control input-md" placeholder="Short Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea wire:model="description" name="" id="" class="form-control input-md" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input wire:model="regular_price" type="text" name="" id="" class="form-control input-md" placeholder="Regular Price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input wire:model="sale_price" type="text" name="" id="" class="form-control input-md" placeholder="Sale Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input wire:model="SKU" type="text" name="" id="" class="form-control input-md" placeholder="SKU">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status" name="" id="" required>
                                       
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured" name="" id="" required>
                                        
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input wire:model="quantity" type="text" name="" id="" class="form-control input-md" placeholder="Quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input wire:model="newimage" type="file" name="" id="" class="input-file" placeholder="Product Image">
                                    @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" alt="" width="120">
                                    @else
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" alt="" width="120">

                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id" name="" id="" required>
                                        <option value="">Select Category</option>
                                       @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                           
                                       @endforeach
                                    </select>
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
