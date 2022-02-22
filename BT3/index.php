<?php
    include '../control.php';
    $get_data = new Data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Dang ky thong tin sinh vien</title>
</head>
<body>
    <!-- tao trang dang ky thong tin -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h1 class="page-header text-center text-uppercase heading__title">Dang ky thong tin sinh vien</h1>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 form__register">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="hoten" placeholder="Nhap ho ten">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Nhap mat khau">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="checkpass" placeholder="Nhap lai mat khau">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="ngaysinh" placeholder="Nhap ngay sinh">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="file" placeholder="nham file">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label p-0">Gioi tinh</label>
                        <input type="radio" name="gioitinh" value="nam">Nam
                        <input type="radio" name="gioitinh" value="nu">Nu
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="address">
                            <option value="">Chon dia chi</option>
                            <option value="hcm">Hai Chau</option>
                            <option value="hanoi">Ha Noi</option>
                            <option value="da nang">Da Nang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label p-0">So thich</label>
                        <input type="checkbox" name="sothich[]" value="nghe nhac">Nghe nhac
                        <input type="checkbox" name="sothich[]" value="doc sach">Doc sach
                        <input type="checkbox" name="sothich[]" value="di chuyen">Di chuyen
                    </div>
                    <!-- tao button -->
                    <button type="submit" class="btn btn-primary" name="submit">Dang ky</button>
                </form>
            </div>
        </div>
        <?php
            // kiem tra submit
            if(isset($_POST['submit'])){
                // insert data dung try catch
                $sothich = implode(", ", $_POST['sothich']);
                // kiem tra submit
                if(empty($_POST['hoten']) || empty($_POST['password']) || empty($_POST['checkpass']) || empty($_POST['ngaysinh']) || empty($_POST['address']) || empty($_POST['gioitinh']) || empty($_POST['sothich'])){
                    echo "<p class='text-danger text-center'>Vui long nhap day du thong tin</p>";
                } else {
                    try {
                        $get_data->register($_POST['hoten'], $_POST['password'], $_POST['checkpass'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['address'], $sothich, $_FILES['file']);
                        // thong bao khi nhap dung
                        echo "<script>alert('Dang ky thanh cong')</script>";

                    } catch (Exception $e) {
                        echo "<p class='text-danger text-center'>".$e->getMessage()."</p>";
                    }
                }
            }
        ?>
</body>
</html>