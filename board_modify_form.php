<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/board.css" />
    <link rel="icon" href="./images/hs-favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/gh/sun-typeface/SUIT/fonts/variable/woff2/SUIT-Variable.css"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script
      src="https://kit.fontawesome.com/a48f863fee.js"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript"
				src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f6f36a358032aa1dd863e1b4a869c3b6"></script>
  </head>

  <body>
    <!-- 헤더 영역 -->
    <?php include "./header.php" ?>

    <!-- 서브 내비게이션 -->
    <div id="sub-nav">
      <ul>
        <li class="main-icon">
          <a href="./index.php"><i class="fa-solid fa-house"></i></a>
        </li>
        <li><a href="#">열린마당</a></li>
        <li><a href="#">관람후기</a></li>
      </ul>
    </div>

    <section>
	<div id="main_img_bar">
		<!-- <img src="./img/main_img.png"> -->
	</div>
	<div id="board_box">
		<h3 id="board_title">
			게시글 수정
		</h3>
<?php

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
                alert('수정은 관리자만 가능합니다.');
                history.go(-1);
            </script>

        ");
        exit;
    }


	//글 내용보기 페이지(board_view.php)로 부터 레코드 번호와 페이지 번호 전달받기 
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	//DB에서 글 정보 가져오기.
	//board 테이블에서 글쓴이, 제목, 내용, 파일명 정보를 가져와 $name, $subject, $content, $file_name에 저장.
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
		<!--// 아래 action을 board_modify.php?num=... ?> 같이 입력하는 이유는 
      		// board_modify.php 파일에서 글 수정 폼 양식의 데이터를 전달받아 DB에 업데이트 한다는 의미 -->
		<form  name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
			<ul id="board_form">
				<li> <!-- 이름: 옆에 글쓴이 이름인 $name을 출력한다. -->
					<span class="col1">이름 : </span>
					<span class="col2"><?=$name?></span>
				</li>		
				<li> <!-- 입력창에 글제목 삽입(제목:옆의 입력창에 수정전 제목인 $subject를 삽입) -->
					<span class="col1">제목 : </span>
					<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
				</li>
				<li id="text_area">	
					<!--  // 내용 옆의 text_area에 수정 전 내용인 $content를 삽입 -->
					<span class="col1">내용 : </span>
					<span class="col2">
						<textarea name="content"><?=$content?></textarea>
					</span>
				</li>
				<li> <!-- 첨부 파일명인 $file_name을 출력 -->
					<span class="col1"> 첨부 파일 : </span>
					<span class="col2"><?=$file_name?></span>
				</li>
			</ul>
			<ul class="buttons"> <!-- 수정하기버튼:  -->
				<!--// <수정하기> 버튼 삽입 : check_input()을 호출하여 데이터가 입력되었는지 검사하고 이상이 없으면,
					// action 속성에 설정된 board_modify.php로 이동하여 폼 양식에 입력된 데이터로 DB를 업데이트-->
				<li><button type="button" onclick="check_input()">수정하기</button></li>
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
		</form>
	</div> <!-- board_box -->
</section> 

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>

    <script>
        function check_input() {
            if (!document.board_form.subject.value)
            {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if (!document.board_form.content.value)
            {
                alert("내용을 입력하세요!");    
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }
    </script>
    <script src="./js/common.js"></script>
  </body>
</html>