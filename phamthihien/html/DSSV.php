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
    
    <div class="min">
    <h2><b>DANH SÁCH SINH VIÊN</b></h2>
    <form action="" method="post">
    <select name="lophp">
          <?php 
                            $conn = mysqli_connect('localhost','root','','carotcu');
                            if(!$conn){
                                die('loi'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT * FROM `lophocphan`  ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<option value="'.$row['TenLHP'].'">'.$row['TenLHP'].'</option>';
                                       }
                                      }
                                    else{
                                    }
                            }
                            ?>
            </select>
            <input type="submit" value="đasaad">
            </form>

          <table border=1 style="text-align: center; width: 40%; margin-left: 30%;">
            <tr>
                <th>STT</th>
                <th>Mã SV</th>
                <th>CMT</th>
                <th>Họ Tên SV</th>
                <th>SĐT</th>
            </tr>
        
            <?php 
                    $lophp=$_POST['lophp'];
                            $conn = mysqli_connect('localhost','root','','carotcu');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                // SELECT d.MaSV,d.DiemQT,d.DiemThi,d.DiemTK,d.MaMon from sinhvien sv join diem d JOIN monhoc mh join lophocphan lhp on sv.MaSV=d.MaSV and sv.MaSV=d.MaSV and d.MaMon=mh.MaMon and mh.MaMon=lhp.MaMon WHERE lhp.MaLHP='Hệ điều hành'
                                $sql = " SELECT sv.MaSV,sv.CMT,sv.HoTenSV,sv.SDT from sinhvien sv join diem d JOIN monhoc mh join lophocphan lhp on sv.MaSV=d.MaSV and sv.MaSV=d.MaSV and d.MaMon=mh.MaMon and mh.MaMon=lhp.MaMon WHERE lhp.TenLHP='$lophp'";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo'<tr><th scope="row">'.$bien.'</th>
                                        <td>'.$row['MaSV'].'</th>
                                        <td>'.$row['CMT'].'</td>
                                        <td>'.$row['HoTenSV'].'</td>
                                        <td>'.$row['SDT'].'</td>
                                        </tr>';
                                    }
                                    }
                                    else{
                                    }
                            }
                            ?>
                            </table>
          
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php include "footer.php"; ?>
