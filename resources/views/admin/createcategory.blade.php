        @extends('admin.layouts.template')
        @section('pagetitle')
        Create category    
        @endsection
        @section('content')

        <form action="" method="Post">
        <div class="card">
                        <div class="card-header">
                            <h4>Create Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                            
                            </div>
                            <div class="form-group">
                            <label for="category-name">Enter Category Name</label>
                            <input type="text" class="form-control" id="inputAddress" name="category-name" placeholder="clothes">
                            </div>
                            
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Submit</button>
                        </div>
        </div>
        </form>

        @endsection