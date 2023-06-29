@include('layouts.header')

<style>
    .article-content{
        background-color: #c1e0ef;
        padding: 20px 0;
    }
    .update-cover{
        width: 50%;
    }
    .tag{
        background-color: rgb(91, 91, 248);
        color: white;
        padding: 5px;
        border-radius: 5px; 
    }
</style>

@if (Auth::user->name != $articles->add_user)
<script>window.location = "/articles";</script>
@endif

<div class="article-content">
    <div class="container">
        <div class="admin-card">
            <a href="{{ url('/articles')}}"><button class="btn btn-primary">Back</button></a><br><br>
            <form action="{{  url('articles/' .$articles->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="hidden" name="">
                            <label for="add_user">Owner</label>
                            <input type="text" name="add_user" value="{{ $articles->add_user }}" class="form-control" disabled>
                            <input type="hidden" name="add_user" value="{{ $articles->add_user }}">                    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="article_name">Article Title</label>
                            <input type="text" name="article_name" value="{{ $articles->article_name }}" class="form-control"><br>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="article_data">Body of The Article</label>
                        <textarea name="article_data" cols="30" rows="10" class="form-control" style="resize: none;">{{ $articles->article_data }}</textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="tags">Tag</label>
                        <input type="text" name="tags" value="{{ $articles->tags }}" class="form-control"><br>
                    </div>
                </div>
                <div class="row">
                    Cover Image <br><br>
                    <div class="col-lg-6">
                        <img src="/cover/{{ $articles->cover }}" alt="Update Cover Image" class="update-cover">
                    </div>
                    <div class="col-lg-6">
                        <input type="file" id="input-file-now-custom-3" class="form-control" name="cover"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="submit" value="Update Article" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>