<?
include 'sqlLib.php';

$query = 'delete from member';

mysqli_query($connect, $query);


// 다시 1 인덱스부터 시작됩니다.

$query = 'alter table member auto_increment=1';
mysqli_query($connect, $query);


?>

<script>
    location.href = 'index.php';
</script>