<div class="container-fluid mt-4 px-4">
    <h1 class="mt-4">Add account</h1>
    <form action="?act=add_acc" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="img">
        </div>
        <input type="submit" class="btn btn-primary" value="Add" name="them">
        <a href="?act=list_account">
            <input type="button" class="btn btn-primary" value="LIST_ACC">
        </a>
    </form>
</div>