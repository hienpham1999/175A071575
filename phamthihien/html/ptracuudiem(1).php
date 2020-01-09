<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body><?php include "header.php"; ?>
<div class="b">
        <a href="">Trang Chủ</a>|<a href="">Đăng Nhập</a>|<a href="">Hỏi Đáp</a>|<a href="">Trợ Giúp</a>
    </div>
    <div class="min">
    
    <div class="ttsv row">
        <div class="col-md-4 flex">
            <div class="_1">
                <p class="t">Mã Sinh Viên : </p>
            </div>
            <div class="_1">
                <p class="s"><?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM sinhvien  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['MaSV'];
            }
        }
        else{
            header("location:admin.php");
        }
}
?></p>
            </div>
        </div>




        <div class="col-md-4 flex">
            <div class="_1">
                <p class="t">Họ Tên : </p>
            </div>
            <div class="_1">
                <p class="s"><?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM sinhvien  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['HoTen'];
            }
        }
        else{
            header("location:admin.php");
        }
}
?></p>
            </div>
        </div>



        <div class="col-md-4 flex">
            <div class="_1">
                <p class="t">Khoa : </p>
            </div>
            <div class="_1">
                <p class="s"><?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM sinhvien  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['Khoa'];
            }
        }
        else{
            header("location:admin.php");
        }
}
?></p>
            </div>
        </div>




        <div class="col-md-4 flex">
            <div class="_1">
                <p class="t">Nghành : </p>
            </div>
            <div class="_1">
                <p class="s"><?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM sinhvien  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['Nganh'];
            }
        }
        else{
            header("location:admin.php");
        }
}
?></p>
            </div>
        </div>




        <div class="col-md-4 flex">
            <div class="_1">
                <p class="t">Lớp : </p>
            </div>
            <div class="_1">
                <p class="s"><?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM sinhvien  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['Lop'];
            }
        }
        else{
            header("location:admin.php");
        }
}
?></p>
            </div>
        </div>
    </div>



    <div class="diem">

        <table border=1px>
            <tr>
                <th>
                    <p>Mã Học Phần</p>
                </th>
                <th>
                    <p>STT</p>
                </th>
                <th>
                    <p>Mã sinh viên</p>
                </th>
                <th>
                    <p>Điểm Quá Trình</p>
                </th>
                <th>
                    <p>Điểm Thi</p>
                </th>
                <th>
                    <p>Điểm KTHP</p>
                </th>
            </tr>

            <?php
$MaSV = $_POST['MaSV'];
$conn = mysqli_connect('localhost','root','','hien');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM diem  where '$MaSV' = MaSV ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr><td> <p>'.$row['MaHP'].'</p></td><td> <p>'.$row['STT'].'</p></td><td> <p>'.$row['MaSV'].'</p></td><td> <p>'.$row['DiemQuaTrinh'].'</p></td><td> <p>'.$row['DiemThi'].'</p></td><td> <p>'.$row['DiemKTHP'].'</p></td></tr>';
            }
        }
        else{
            header("location:admin.php");
        }
}
?>
        </table>
       

    </div>
    </div>


    <?php include "footer.php"; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>