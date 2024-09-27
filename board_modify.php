<?php
    include "define.php";

    // 레코드 번호, 페이지 번호, 내용 전달받기
    //글 수정 페이지(board_modify_form.php)로부터
    $num = $_GET["num"]; 
    $page = $_GET["page"]; 

    $subject = $_POST["subject"]; 
    $content = $_POST["content"]; 

    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

    //수정된 글 제목과 내용으로 DB업데이트

    $sql = "update board set subject='$subject', content='$content' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);
    mysqli_close($con);     

    echo "
        <script>
        // 글 목록 보기 페이지 board_list.php로 이동. 
        // GET방식으로 전달하여 글 목록 보기 페이지에서 수정된 글 제목을 볼 수 있음.
            location.href = 'board_list.php?page=$page';
        </script>
    ";
?>