@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add News Category Page </h4> <br><br>
            
            <form method="post" id="myForm" action="{{ route('store.news.category') }}" >
                @csrf
            <div class="row mb-3">
                <label for="category_name_en" class="col-sm-2 col-form-label">Category Name (English)</label>
                <div class="form-group col-sm-10">
                    <input name="category_name_en" class="form-control" type="text" id="category_name_en">
                    @error('category_name_en')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="category_name_th" class="col-sm-2 col-form-label">Category Name (Thai)</label>
                <div class="form-group col-sm-10">
                    <input name="category_name_th" class="form-control" type="text" id="category_name_th">
                    @error('category_name_th')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->
  
        
           <input type="submit" class="btn btn-secondary waves-effect waves-light" value="Insert News Category">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

@endsection 