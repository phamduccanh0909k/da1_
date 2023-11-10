<?php
if (is_array($suaacc)) {
    extract($suaacc);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100'>";
} else {
    $hinh = "No photo";
}
?>
<div class="container-fluid mt-4 px-4">
    <h1 class="mt-4">Update account</h1>
    <form action="?act=update_acc" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="<?= $id_user ?>">
        <div class="mb-3">
            <label class="form-label">UserName</label>
            <input type="text" class="form-control" name="username" value="<?= $username ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select" name="id_role">
                <option value="0" selected>All</option>
                <?php
                foreach ($dsrl as $ds) {
                    if ($ds['id_role'] == $id_role) $s = "selected";
                    else $s = "";
                    echo '<option value="' . $ds['id_role'] . '" ' . $s . '>' . $ds['name_role'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $name ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="<?= $address ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="<?= $phone ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $email ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image" value="<?= $image ?>">
            <?= $image ?>
        </div>

        <input type="submit" class="btn btn-primary" value="Update" name="edit">
        <a href="?act=list_account">
            <input type="button" class="btn btn-primary" value="LIST_Acc">
        </a>
    </form>
</div>