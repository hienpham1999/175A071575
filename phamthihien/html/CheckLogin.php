<?php
$TenTK = $_POST['TenTK'];
$MaTK = $_POST['MaTK'];

$conn = mysqli_connect('localhost','root','','carotcu');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}

else{

    $sql = " SELECT * FROM taikhoan where '$TenTK' = tentaikhoan and '$MaTK' = matkhau  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
         echo'áds';
                if($row['phanquyen']=='0'){
                       header("location:quanly.php");
                }else{
                    
                    header("Location:quanLyHP.php");
                }
                 
         
        }
        }
        else{
            header("location:dangnhap.php");

        }



}



?>