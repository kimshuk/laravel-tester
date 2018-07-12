<h2 class="blog-post-title">Post</h2>
<hr>
<form method="POST" action="/posts">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="text" placeholder="title" name="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" cols="30" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
</form>