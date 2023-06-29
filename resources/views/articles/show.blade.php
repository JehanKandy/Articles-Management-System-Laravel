@include('layouts.header')

<style>
    .article-content{
        background-color: #c1e0ef;
        padding: 20px 0;
    }
    .cover-img{
        width: 100%;
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
        </div>
    </div>
</div>