<!-- 관리자만 게시판 삭제 가능하도록 -->
<?php

include "define.php";

session_start();

//세션에 저장된 사용자 레벨 확인
if (isset($_SESSION["userlevel"])) {
    $userlevel = $_SESSION["userlevel"]; //사용자 레벨이 세션에 존재하면 변수에 저장
} else {
    $userlevel = ""; //그렇지 않으면 초기화

}
//사용자 레벨이 관리자가 아닌 경우
if ($userlevel != 1) {
    echo("
        
        <script>
            alert('삭제는 관리자만 가능합니다.');
            history.go(-1);
        </script>

    ");
    exit;
}

$num = $_GET["num"]; 
$page = $_GET["page"]; 

//삭제할 첨부파일명 가져오기
$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
$sql = "select * from board where num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$copied_name = $row["file_copied"];

//첨부파일 삭제
if($copied_name) {
    $file_path = "./data/".$copied_name;
    unlink($file_path); //서버에 저장된 첨부파일 삭제
}

//DB에서 해당 레코드 삭제
$sql = "delete from board where num = $num";
mysqli_query($con, $sql);
mysqli_close($con);     

echo"
    <script>
        //페이지 이동
        location.href = 'board_list.php?page=$page';
    </script>


"





?>