<?
include "sqlLib.php";

$query = "select * from member";

$result = mysqli_query($connect, $query);

?>

<h2 class="mb-3">-멤버 리스트-</h2>
<div class="p-3"></div>
<table class="table" border="1" >
    <thead>
        <tr >
            <td>NO.</td>
            <td>이름</td>
            <td>나이</td>
            <td>이메일</td>
            <td>한마디</td>
            <td>삭제</td>
            <td>수정</td>
        </tr>
    </thead>




    <?
    while ($a = mysqli_fetch_assoc($result)) {
        $id = $a['id'];
        $name = $a['name'];
        $age = $a['age'];
        $email = $a['email'];
        $word = $a['word'];

    ?>
    
        <tr>
            <td><?= $id ?></td>
            <td><?= $name ?></td>
            <td><?= $age ?></td>
            <td><?= $email ?></td>
            <td><?= $word ?></td>
            <td> <a href="memberDel.php?id=<?= $id ?>" onclick="return confirm('정말 삭제할까요?')">삭제</a> </td>
            <td> <a href="#" onclick="onEdit('<?= $id ?>');">수정</a> </td>

        </tr>

    <? } ?>


</table>
<script>
    function onEdit(id) {
        const word = prompt('수정할 내용을 적으시오');
        location.href = 'memberEdit.php?id=' + id + "&word=" + word;

    }
</script>