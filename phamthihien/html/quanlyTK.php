<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php include "header.php"; ?>
  <div class="min">
  <h2><b>Đăng ký tài khoản</b></h2>
  <?php
         error_reporting(0);
         $magv = $_POST['magv'];
         $mkgv = $_POST['mkgv'];
         $tkql = $_POST['tkql'];
         $mkql =$_POST['mkql'];
        
         $conn = mysqli_connect('localhost','root','','carotcu');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
           if($mkgv==''){

           }
           else{
            $sql ="INSERT INTO `lophocphan`(`MaLHP`, `TenLHP`, `MaMon`, `MaGV`) VALUES ('$tmlhp','$ttlhp','$tmm','$tmgv')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<p> ok </p>';
            }
           }
           
         }
                            ?>
  <div class="_a">

     

      <div class="_c">
      <h2><b>Tài Khoản Quản Lý</b></h2>
      <form action="" method="post">

        
          Tài Khoản  : <br> <input class="a"type="text" name="tkql">  
            <br><br>
          Mật Khẩu : <br> <input class="a"type="text" name="mkql"><br><br>
          <input type="submit" value="Thêm"></form>
      </div>
  </div>
 
  
  <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>