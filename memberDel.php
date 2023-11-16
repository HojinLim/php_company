<?
include 'sqlLib.php';

$id = $_GET['id'];

$query = "delete from member where id= '$id'";

mysqli_query($connect, $query);

?>



<script>
    location.href = "index.php";
</script>