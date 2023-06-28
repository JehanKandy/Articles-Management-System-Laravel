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
            <a href="{{ url('/articles') }}"><button class="btn btn-primary">Back</button></a>
            <h3>Create New Article</h3>
            <hr>
        </div>
    </div>    
</div>