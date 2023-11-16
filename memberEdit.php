<?
include 'sqlLib.php';

$id = $_GET['id'];
$word = $_GET['word'];

$query = "update member set word='$word' where id='$id' ";

mysqli_query($connect, $query);

?>
<script>
    location.href = 'index.php';
</script>