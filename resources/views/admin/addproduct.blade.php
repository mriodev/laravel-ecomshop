@extends('admin.layout.template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create Product </h4>
        </div>
        <form action="" method="POST">


            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category_name">Category</label>
                        <input type="text" id="category_name" name="category_name" class="form-control" id="inputEmail4"
                            placeholder="Electronics">
                    </div>
                </div>


            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
