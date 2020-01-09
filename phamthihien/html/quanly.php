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
    <div class="body">

    <div class="min">
            <div class="tren">
              <div class="Nganh">
                <h2><b>NGÀNH</b></h2>
                  <form action="themNganh.php">
                    <input type="submit" value=Thêm >
                  </form>
                  <form action="suaNganh.php">
                    <input type="submit" value=Sửa>
                  </form>
                  <form action="xoaNganh.php">
                    <input type="submit" value=Xóa>
                  </form>
                  <form action="DSNganh.php">
                    <input type="submit" value="Danh Sách Ngành">
                  </form>
              </div>
              <div class="Mon">
                <h2><b>MÔN</b></h2>
                  <form action="themMon.php">
                    <input type="submit" value=Thêm >
                  </form>
                  <form action="suaMon.php">
                    <input type="submit" value=Sửa>
                  </form>
                  <form action="xoaMon.php">
                    <input type="submit" value=Xóa>
                  </form>
                  <form action="DSMon.php">
                    <input type="submit" value="Danh Sách Môn">
                  </form>
              </div>
              <div class="Lop">
                <h2><b>LỚP</b></h2>
                  <form action="themLop.php">
                    <input type="submit" value=Thêm >
                  </form>
                  <form action="suaLop.php">
                    <input type="submit" value=Sửa>
                  </form>
                  <form action="xoaLop.php">
                    <input type="submit" value=Xóa>
                  </form>
                  <form action="DSLop.php">
                    <input type="submit" value="Danh Sách Lớp">
                  </form>
              </div>
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