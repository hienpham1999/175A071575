<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php include "header.php"; ?>
    <div class="b">
        <a href="">Trang Chủ</a>|<a href="dangnhap.php">Đăng Nhập</a>|<a href="">Hỏi Đáp</a>|<a href="">Trợ Giúp</a>
      </div>
      <?php
      error_reporting(0);
       $mmc = $_POST['mmc'];
       $tm = $_POST['tm'];
       $stc = $_POST['stc'];
       $nh = $_POST['nh'];
       $hk = $_POST['hk'];
       $gd = $_POST['gd'];
       $conn = mysqli_connect('localhost','root','','carotcu');
       if(!$conn){
           die('loi'.mysqli_connect_error() );
       }
       elseif($mmc==''){

         }
         else{
          $sql ="UPDATE `monhoc` SET `TenMon`='$tm',`SoTC`='$stc',`NamHoc`='$nh',`HocKy`='$hk',`GiaiDoan`='$gd' where mamon ='$mmc'";
          $result = mysqli_query($conn,$sql);
          if($result){
              echo '<p> ok </p>';
          }
         }
        
       ?>
      <div class="min">
          <h2><b>SỬA MÔN</b></h2>
          <form action="suaMon.php" method="post">
          Mã môn cũ
          <select name="mmc">
          <?php 
                            $conn = mysqli_connect('localhost','root','','carotcu');
                            if(!$conn){
                                die('loi'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT * FROM `monhoc`  ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<option value="'.$row['MaMon'].'">'.$row['MaMon'].'</option>';
                                       }}
                                    else{
                                    }
                            }
                            ?>
            </select></br></br>
            Sửa tên môn <br><input class="a" type="text" name="tm"><br><br>
            Sửa STC <br><input class="a" type="text" name="stc"><br><br>
            Sửa năm học <br><input class="a" type="text" name="nh"><br><br>
            Sửa học kỳ <br><input class="a" type="text" name="hk"><br><br>
            Sửa giai đoạn <br><input class="a" type="text" name="gd"><br><br>
          <button class="a"  >Sửa</button>
      </div>
      
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>