<?
include "sqlLib.php";

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$word = $_POST['word'];

// MySQL 쿼리를 안전하게 만드는 데 중요한 역할

$name = mysqli_real_escape_string($connect, $name);
$age = mysqli_real_escape_string($connect, $age);
$email = mysqli_real_escape_string($connect, $email);
$word = mysqli_real_escape_string($connect, $word);


$query = "insert into member(name,age,email,word) values('$name','$age','$email','$word')";


mysqli_query($connect, $query);

?>
<script>
    location.href = 'index.php';
</script>