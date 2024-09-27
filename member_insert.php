<?php header("Content-Type:text/html; charset=utf-8") ?>

<?php
    include "define.php";


    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;

    $regist_day = date("Y-m-d (H:i)");
    //현재의 연-월-일-시-분 "(2024-06-03(13:09))"

    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

    $sql = "insert into members(id, pass, name, email, regist_day, level, point)"; 

    $checkid = "select * from members where id='$id'";
    $result = mysqli_query($con, $checkid); //계정과 새로 입력한 아이디 값을 실행

    $num_record = mysqli_num_rows($result); //총 레코드 수 반환

    /* 멤버 접근 연산자 */
    /* 기본 레벨9, 포인트 초기값 0으로 설정 */

    $sql .= "values('$id','$pass', '$name', '$email', '$regist_day', 9, 0)";
    /* .= 멤버접근연산자 */

    if ($num_record) {
        echo("
            <script>
                window.alert('아이디가 중복되었습니다. 다른 아이디를 사용해주세요.')
                history.go(-1) /* 이전페이지로 이동 */
            </script>


        ");
    } else {
        mysqli_query($con, $sql); //저장된 명령을 실행
    }
    mysqli_close($con); //서버와 연결 끊기

    echo "
        <script>
            window.alert('회원가입이 완료되었습니다.')
            location.href = 'login_form.php'; /* 회원가입완료 후 로그인페이지로 이동하기 */
        </script>
    "




?>