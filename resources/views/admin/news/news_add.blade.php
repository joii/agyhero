@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add News Page </h4>
            <form method="post" action="{{ route('store.news') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                    <select name="news_category_id" class="form-select" aria-label="News Category">
                    <option selected="">Open this select menu</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category_name_en }}</option>
                    @endforeach
                    </select>
               </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_title_en" class="col-sm-2 col-form-label">Title (English) </label>
                <div class="col-sm-10">
                    <input name="news_title_en" class="form-control" type="text" id="news_title_en">
                    @error('news_title_en')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_title_th" class="col-sm-2 col-form-label">Title (Thai) </label>
                <div class="col-sm-10">
                    <input name="news_title_th" class="form-control" type="text" id="news_title_th">
                    @error('news_title_th')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_description_en" class="col-sm-2 col-form-label">Description (English) </label>
                <div class="col-sm-10">
                    <input name="news_description_en" class="form-control" type="text" id="news_description_en">
                    @error('news_description_en')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_description_th" class="col-sm-2 col-form-label">Description (Thai) </label>
                <div class="col-sm-10">
                    <input name="news_description_th" class="form-control" type="text" id="news_description_th">
                    @error('news_description_th')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="elm1" class="col-sm-2 col-form-label">Detail (English) </label>
                <div class="col-sm-10">
                <textarea id="elm1" name="news_detail_en"></textarea>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_detail_th" class="col-sm-2 col-form-label">Detail (Thai) </label>
                <div class="col-sm-10">
                <textarea id="elm2" name="news_detail_th"></textarea>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_date" class="col-sm-2 col-form-label">News date </label>
                <div class="col-sm-10">
                    <input name="news_date" class="form-control" type="date" id="news_date" placeholder="2024-02-19" value="">
                    
                    @error('news_date')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_image" class="col-sm-2 col-form-label">Image (1000x750px)</label>
                <div class="col-sm-10">
                <input name="news_image" class="form-control" type="file" id="news_image">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                <img id="showImage1" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="news_thumbnail" class="col-sm-2 col-form-label">Thumbnail (400x400px)</label>
                <div class="col-sm-10">
                <input name="news_thumbnail" class="form-control" type="file" id="news_thumbnail">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                <img id="showImage2" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

            <input type="submit" class="btn btn-secondary waves-effect waves-light" value="Insert News Data">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#news_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage1').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#news_thumbnail').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 