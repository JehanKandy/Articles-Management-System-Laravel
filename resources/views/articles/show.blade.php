@include('layouts.header')

<style>
    .article-content{
        background-color: #c1e0ef;
        padding: 20px 0;
    }
    .cover-img{
        width: 100%;
    }
    .tag{
        background-color: rgb(91, 91, 248);
        color: white;
        padding: 5px;
        border-radius: 5px; 
    }
</style>
<div class="article-content">
    <div class="container">
        <div class="admin-card">
            <a href="{{ url('/articles') }}"><button class="btn btn-primary">Back</button></a><br><br>
            <hr>
            <img src="/cover/{{ $articles->cover }}" class="cover-img" alt="Cover Image">
            <br><br>
            <h1>{{ $articles->article_name }}</h1>
            <p>
                {{ $articles->article_data }}
            </p>
            <p>
                <span class="tag">#{{ $articles->tags }}</span>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <span>Created at : {{ $articles->tags }}</span>
                </div>
                <div class="col-lg-6">
                    <span>Last Update at : {{ $articles->tags }}</span>
                </div>
            </div>
        </div>
    </div>
</div>