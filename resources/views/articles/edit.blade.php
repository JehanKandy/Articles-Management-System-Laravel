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
            <form action="{{  url('articles/' .$articles->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <input type="hidden" name="">
                    <label for="add_user">Owner</label>
                    <input type="text" name="add_user" value="{{ $articles->add_user }}" class="form-control" disabled>
                    <input type="hidden" name="add_user" value="{{ $articles->add_user }}">
                    
                </div>
            </form>
        </div>
    </div>
</div>