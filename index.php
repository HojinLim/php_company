<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 부트스트랩 적용 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <!-- 멤버 리스트를 DB에서 가져옴 -->
    <? include "memberList.php" ?>

    <!-- 멤버 리스트 작성폼 -->
    <h2 class="mb-5 mt-5">-입력폼-</h2>
    <form action="memberAdd.php" method="post" class="mt-5">

        <table class="table" border="1">
            <tr>
                <td>
                    이름
                </td>
                <td>
                    나이
                </td>
                <td>
                    이메일
                </td>
                <td>
                    한마디
                </td>

            </tr>
            <tr>
                <td>
                    <input placeholder="이름" type="text" name="name"></input>
                </td>
                <td>
                    <input placeholder="나이" type="text" name="age"></input>
                </td>
                <td>
                    <input placeholder="이메일" type="text" name="email"></input>
                </td>
                <td>
                    <input placeholder="한마디" type="text" name="word"></input>
                </td>

            </tr>
        </table>
        <button type="submit" class="btn btn-primary text-right">제출하기</button>
        <button type="button" class="btn btn-danger text-right" onclick="confirmDelete()">전체삭제</button>

    </form>


    <script>
        function confirmDelete() {
            const doIt = confirm('정말 전체 삭제할까요?');
            if (doIt) {
                // 확인을 누르면 서버에 요청을 보내서 삭제 작업을 수행
                deleteAll();
            } else {
                // 취소를 누르면 아무 작업도 하지 않음
                return;
            }
        }

        function deleteAll() {
            // JavaScript를 사용하여 서버에 AJAX 요청을 보냄
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "memberDelAll.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // 서버의 응답에 대한 처리 (optional)
                    console.log(xhr.responseText);
                    window.location.reload();
                }
            };
            xhr.send();
        }
    </script>




</body>

</html>