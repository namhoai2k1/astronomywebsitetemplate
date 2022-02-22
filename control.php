<?php 
    include('connect.php'); 
    
    class Data {
        public function in_contact($name, $email, $subject, $message, $term, $subcribe) {
            global $conn;
            $sql = "INSERT INTO users (username, email, subject, message, term, subcribe) VALUES ('$name', '$email', '$subject', '$message', '$term', '$subcribe')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        public function login($username, $password) {
            global $conn;
            $sql = "SELECT * FROM login WHERE userName = '$username' AND passWord = '$password'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            return $row;
        }

        public function changePassword($username, $password) {
            global $conn;
            $sql = "UPDATE login SET passWord = '$password' WHERE userName = '$username'";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        public function register($hoten, $password, $ngaysinh,$file, $gioitinh, $address, $sothich) {
            global $conn;
            $sql = "INSERT INTO `register`(`name`, `password`, `age`, `file`, `sex`, `address`, `interest`) VALUES  ('$hoten', '$password', $ngaysinh,'$file', '$gioitinh', '$address', '$sothich')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        public function signin($user, $password) {
            global $conn;
            $sql = "INSERT INTO login (userName, passWord) VALUES ('$user', '$password')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }
    }
?>

