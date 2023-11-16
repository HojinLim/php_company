<?

error_reporting(1);
ini_set("display_errors", 1);

// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
$connect = new mysqli("localhost", "root", "", "company");

if (mysqli_connect_error()) {
    echo "mysql 접속중 오류가 발생했습니다. ";
    echo mysqli_connect_error();
}
