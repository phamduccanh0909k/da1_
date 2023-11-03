<div class="container-fluid mt-4 px-4">
  <h1 class="mt-4">Add category</h1>
  <form action="?act=add_cat" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <a href="?act=list_cat">
        <input class="btn" type="button" value="LIST_CAT" id="t">
      </a>
  </form>
</div>