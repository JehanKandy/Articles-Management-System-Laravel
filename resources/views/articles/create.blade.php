@include('layouts.header')

<style>
    .article-content{
        background-color: #c1e0ef;
        padding: 20px 0;
    }
</style>

<div class="article-content">
    <div class="container">
        <div class="admin-card">
            <a href="{{ url('/articles') }}"><button class="btn btn-primary">Back</button></a><br><br>
            <h3>Create New Article</h3>
            <hr>
            <form action="{{ url('articles') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="add_user">Owner</label>
                        @php
                            $user = Auth::user()->name;
                        @endphp
                        <input type="text" value=" @php echo Auth::user()->name; @endphp" class="form-control" disabled>
                        <input type="hidden" name="add_user" value=" @php echo Auth::user()->name; @endphp"> 
                    </div>
                    <div class="col-lg-6">
                        <label for="article_name">Article Title</label>
                        <input type="text" name="article_name" class="form-control"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="article_data">Body of The Article</label>
                        <textarea name="article_data" cols="30" rows="10" class="form-control" style="resize: none;"></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="tags">Article Tag</label>
                        <input type="text" name="tags" class="form-control"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="article_data">Cover Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control" name="cover"><br>
                    </div>
                    {{-- <div class="col-lg-6">
                        <label for="article_data">Images</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple><br>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="reset" value="Clear" class="btn btn-secondary" style="width: 100%">
                    </div>
                    <div class="col-lg-6">
                        <input type="submit" value="Add Article" class="btn btn-success" style="width: 100%">
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>