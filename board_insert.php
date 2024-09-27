<meta charset="utf-8">
<?php
	include "define.php";


	session_start();
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
	else $userid = "";
	if (isset($_SESSION["username"])) $username = $_SESSION["username"];
	else $username = "";



	if ( !$userid )
	{
		echo("
			<script>
			alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
			history.go(-1)
			</script>
		");
		exit;
	}


	// 글 제목과 내용 전달받기

    $subject = $_POST["subject"];
    $content = $_POST["content"];


	$subject = htmlspecialchars($subject, ENT_QUOTES); 
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장


	//업로드 폴더 설정
	//업로드 파일을 저장할 폴더인 $upload_dir 값을 ./data로 설정.
	$upload_dir = './data/';

	$upfile_name	 = $_FILES["upfile"]["name"];		// 업로드 파일명
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];	// 실제 서버에 저장되는 임시 파일명
	$upfile_type     = $_FILES["upfile"]["type"];		// 업로드 파일의 형식
	$upfile_size     = $_FILES["upfile"]["size"];		// 업로드 파일의 크기
	$upfile_error    = $_FILES["upfile"]["error"];		// 오류 발생



	if ($upfile_name && !$upfile_error)
	{
		//explode( ) 함수를 이용하여 업로드 파일인 $upfile_name에서 파일명과 확장자를 분리.

		$file = explode(".", $upfile_name); //파일명과 확장자 분리
		$file_name = $file[0];
		$file_ext  = $file[1];


		//실제 업로드 파일명 구하기
		//date( ) 함수로 실제 업로드할 파일명을 구한 다음 확장자와 붙여서 $copied_file_name에 저장.
		//$uploaded_file에는 저장할 폴더인 ./data를 포함.



		$new_file_name = date("Y_m_d_H_i_s"); // 'Y_m_d_H_i_s' 포맷은 연도_월_일_시_분_초 



		$copied_file_name = $new_file_name.".".$file_ext; // 파일명에 확장자를 붙여 최종 파일명을 생성합니다.

		
		$uploaded_file = $upload_dir.$copied_file_name; // 파일이 저장될 전체 경로를 설정합니다.






		//업로드 파일의 크기 제한
		//업로드 파일의 크기가 1,000,000바이트(약 1메가바이트)를 초과하면 경고 메시지를 출력.

		if( $upfile_size  > 1000000 ) {
			echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(1MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
				history.go(-1)
				</script>
			");
			exit;
		}


		// 업로드 파일을 ./data 폴더에 저장.

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
			echo("
				<script>
				alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
				history.go(-1)
				</script>
			");
			exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}
	
	// DB에 게시글 저장

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);


	$sql = "insert into board (id, name, subject, content, regist_day, hit, file_name, file_type, file_copied) ";

	$sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0, ";

	$sql .= "'$upfile_name', '$upfile_type', '$copied_file_name')";


	mysqli_query($con, $sql);



	// 포인트 부여하기

/* 	$point_up = 100;


	$sql = "select point from members where id='$userid'";

	
	$result = mysqli_query($con, $sql);

	
	$row = mysqli_fetch_array($result);


	$new_point = $row["point"] + $point_up;  */


	//DB에 포인트 업데이트
/* 	$sql = "update members set point=$new_point where id='$userid'";
	mysqli_query($con, $sql); */


	mysqli_close($con);  // DB 연결 끊기


	/*글 목록 보기 페이지로 이동*/

	echo "
		<script>
		location.href = 'board_list.php';
		</script>
	";
?>