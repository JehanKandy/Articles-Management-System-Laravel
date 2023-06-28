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
                <div class="row">
                    <div class="col-lg-6">
                        <label for="add_user">Owner</label>
                        @php
                            $user = Auth::user()->name;
                        @endphp
                        <input type="text" name="add_user" value=" @php echo Auth::user()->name; @endphp" class="form-control" disabled>
                    </div>
                    <div class="col-lg-6">
                        <label for="article_name">Article Title</label>
                        <input type="text" name="article_name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="article_data">Body of The Article</label>
                        <textarea name="article_data" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>