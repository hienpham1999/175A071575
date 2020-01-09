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
         $tmm = $_POST['tmm'];
         $ttm = $_POST['ttm'];
         $tmn = $_POST['tmn'];
         $tstc =$_POST['tstc'];
         $tnh = $_POST['tnh'];
         $thk = $_POST['thk'];
         $tgd = $_POST['tgd'];
         
         $conn = mysqli_connect('localhost','root','','carotcu');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
           if($tmn==''){

           }
           else{
            $sql ="INSERT INTO `monhoc`(`MaMon`, `TenMon`, `MaNganh`, `SoTC`, `NamHoc`, `HocKy`, `GiaiDoan`) VALUES ('$tmm','$ttm','$tmn','$tstc','$tnh','$thk','$tgd')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<p> ok </p>';
            }
           }
           
         }
                            ?>

      <div class="min">
          <h2><b>THÊM MÔN</b></h2>
          <form action="themMon.php" method="post">
          Thêm mã môn <br><input class="a" type="text" name="tmm"><br><br>
          Thêm tên môn <br><input class="a" type="text" name="ttm"><br><br>
          Thêm mã ngành <br> <input class="a"type="text" name="tmn"><br><br>
          Thêm số tín chỉ <br> <input class="a"type="text" name="tstc"><br><br>
          Thêm năm học <br> <input class="a"type="text" name="tnh"><br><br>
          Thêm học kỳ <br> <input class="a"type="text" name="thk"><br><br>
          Thêm giai đoạn <br> <input class="a"type="text" name="tgd"><br><br>
          <input type="submit" value="Thêm">
      </div>
      
</form>
      <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>