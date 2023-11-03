<div class="container-fluid mt-4 px-4">
  <h1 class="mt-4">Update product</h1>
  <form enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Category</label>
      <select class="form-select">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="file" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" placeholder="Leave a description product here" style="height: 100px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>