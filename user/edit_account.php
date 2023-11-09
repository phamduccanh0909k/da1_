<?php
if (is_array($_SESSION['user'])) {
    extract($_SESSION['user']);
}
$hinhpath = "./upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template" />
    <meta name="author" content="Bootlab" />

    <title>Edit Account - AppStack - Admin &amp; Dashboard Template</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
</head>

<body>
    <main class="main d-flex w-100 mt-5">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Edit Account</h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <?php
                                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                                        extract($_SESSION['user']);
                                    }
                                    ?>
                                    <form action="?act=edit_account" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="id_user" value="<?= $id_user ?>">
                                            <label>Username</label>
                                            <input class="form-control form-control-lg" type="text" name="username" value="<?= $username ?>" />
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="text" name="password" value="<?= $password ?>" />
                                            <label>Name</label>
                                            <input class="form-control form-control-lg" type="text" name="name" value="<?= $name ?>" />
                                            <label>Address</label>
                                            <input class="form-control form-control-lg" type="text" name="address" value="<?= $address ?>" />
                                            <label>Phone</label>
                                            <input class="form-control form-control-lg" type="text" name="phone" value="<?= $phone ?>" />
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" value="<?= $email ?>" />
                                            <label>Image</label>
                                            <input class="form-control form-control-lg" type="file" name="img" value="<?= $hinh ?>" />
                                            <?= $hinh ?>
                                        </div>
                                        <div class="text-center mt-3">
                                            <input type="submit" href="#" class="btn btn-lg btn-primary" value="Edit" name="capnhap">
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Reset password</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div style="color: red;">
                            <?php
                            if (isset($tb) && ($tb) != "") {
                                echo $tb;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>