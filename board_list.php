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

    <!-- 컨텐츠 영역 -->
    <section>
        <div id="main_img_bar">
        </div>
        <div id="board_box">
            <h3>
                관람후기
            </h3>
            <ul id="board_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">제목</span>
                    <span class="col3">글쓴이</span>
                    <span class="col4">첨부</span>
                    <span class="col5">등록일</span>
                    <span class="col6">조회</span>
                </li>
                <?php


	if (isset($_GET["page"])) //GET 방식으로 페이지 번호 전달받기
		$page = $_GET["page"];
	else
		$page = 1;


	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수


	//한 페이지에 표시되는 행의 개수
	$scale = 10; 
	



	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale); //전체 페이지 수    
	else
		$total_page = floor($total_record/$scale) + 1; 
 

	$start = ($page - 1) * $scale; //시작 레코드 번호    

	$number = $total_record - $start; //글의 일련번호




	//DB에서 글 목록을 가져오기 위해 반복 루프 설정.
	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		//글 목록의 항목 가져오기
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result); // 글 목록의 한 행, 즉, 레코드 하나를 가져와 $row에 저장.
		// 하나의 레코드 가져오기
		$num         = $row["num"]; 
		$id          = $row["id"]; 
		$name        = $row["name"]; 
		$subject     = $row["subject"]; 
		$file_image  = $row["file_image"]; 
		$regist_day  = $row["regist_day"]; 
		$hit         = $row["hit"]; 


		if ($row["file_name"])
			$file_image = "<img src='./img/file.gif'>";
		else
			$file_image = " "; //공백저장
?>
                <li>
                    <span class="col1"><?=$number?></span> <!-- 글 목록의 항목 출력.게시글번호 -->
                    <!-- 글 목록의 각 항목을 화면에 출력. -->
                    <span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
                    <!-- 제목 -->
                    <span class="col3"><?=$name?></span>
                    <span class="col4"><?=$file_image?></span>
                    <span class="col5 b-date"><?=$regist_day?></span>
                    <span class="col6"><?=$hit?></span>
                </li>
                <?php
		$number--; 
	}
	mysqli_close($con);
?>
            </ul>
            <ul id="page_num">


                <?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
            </ul> <!-- page -->

            <ul class="buttons">
                <li><button onclick="location.href='board_list.php'">목록</button></li>
                <li>
                    <?php 
	if($userid) {
?>
                    <button onclick="location.href='board_form.php'">글쓰기</button>
                    <?php
	} else {
?>
                    <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글작성</button></a>
                    <?php
	}
?>
                </li>
            </ul>
        </div> <!-- board_box -->
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    <script src="./js/common.js"></script>
    <script src="./js/directions.js"></script>
  </body>
</html>