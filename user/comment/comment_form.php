<style>
    .dn{
        color: red;
        font-weight: bold;
        font-size: 30px;
    }
</style>
<?php
session_start();
include "../../model/pdo.php";
include "../../model/comment.php";
include "../../model/product.php";


$id_pro = $_REQUEST['id_pro']; //dung doi tuong request de doc gia tri id_sp trong phan chuyen data cua ham load trang ctsp
$dsbl = loadall_bll($id_pro);
$onesp = loadone_pro($id_pro);
extract($onesp);
if (!isset($_SESSION['user'])) {
    // Người dùng chưa đăng nhập, hãy chuyển hướng hoặc hiển thị thông báo yêu cầu đăng nhập
    echo "<div class='dn'>You must be login in to comment!!</div>";
    echo '<div class="row">
  <div class="col-md-6">
      <h4 class="mb-4">Review for '.$name_pro.'</h4>
      <div class="media mb-4">
          <div class="media-body">';
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '<h6>
   ' . $username . '<small> - <i>' . $date_com . '</i></small>
</h6>
<div class="text-primary mb-2">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
   <i class="far fa-star"></i>
</div>
<p>' . $content . '
</p>';
    }
    echo ' </div>
    </div>
</div>
</div>';
    exit(); // Kết thúc kịch bản để đảm bảo không có mã HTML/CSS/JS nào được thực thi
}
?>
<div class="row">
    <div class="col-md-6">
        <h4 class="mb-4">Review for <?= $name_pro ?></h4>
        <div class="media mb-4">
            <div class="media-body">
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<h6>
           ' . $username . '<small> - <i>' . $date_com . '</i></small>
       </h6>
       <div class="text-primary mb-2">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
           <i class="far fa-star"></i>
       </div>
       <p>' . $content . '
       </p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <h4 class="mb-4">Leave a review</h4>
    <small>Your email address will not be published. Required fields are
        marked *</small>
    <div class="d-flex my-3">
        <p class="mb-0 mr-2">Your Rating * :</p>
        <div class="text-primary">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
    </div>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
        <div class="form-group">
            <label for="message">Your Review *</label>
            <textarea id="message" cols="30" rows="5" class="form-control" name="content"></textarea>
        </div>
        <div class="form-group mb-0">
            <input id="submit_button" name="guibl" type="submit" value="Leave Your Review" class="btn btn-primary px-3" />
        </div>
    </form>
    <?php
    if (isset($_POST['guibl']) && ($_POST['guibl'])) {
        $content = $_POST['content'];
        $id_pro = $_POST['id_pro'];
        $id_user = $_SESSION['user']['id_user'];
        // $ngaybl = date("h:i:sa d/m/Y");
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date_com = date("Y-m-d H:i:s", time());
        insert_bl($content, $date_com, $id_user, $id_pro);
        header("location:" . $_SERVER['HTTP_REFERER']);
    }
    ?>
</div>