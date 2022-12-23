@extends('admin.layouts.template')
@section('pagetitle')
Create sub category    
@endsection
@section('content')

<form action="" method="Post">
        <div class="card">
                        <div class="card-header">
                            <h4>Create Sub Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                            
                            </div>
                            <div class="form-group">
                            <label for="sub-category-name">Enter Sub Category Name</label>
                            <input type="text" class="form-control" id="sub-category-name" name="sub-category-name" placeholder="pants">
                            </div>
                                
                            <div class="form-group">
                                <label for="category-name">Select category</label>
                                <select name="category-id" class="form-control">
                                 <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Submit</button>
                        </div>
        </div>
        </form>

@endsection