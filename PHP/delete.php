<?php
require("../connect.php")
               //B1: kEETS NOOIS VAO DT server
               $conn = mysqli.connect('localhost','root','','hien');
               if(!$con){7
                 die('ket noi k thanh cong: '.mysqli_connect_error());
               }
               //B2: khai baos lenh thuc thi va thuc thi lenh
               $sql = "";
               mysqli_set_charset($conn, 'UTF8');
               $result = mysqli_query($conn, $sql);
               // B3: xu ly ket qua 
               if(mysqli_num_rows($result)>0){
                 while($row = mysqli.fetch_assoc($result)){
                 echo '<h3>'.$row[''].'</h3>';
                 }
               }
               mysqli_close($conn);
               ?>