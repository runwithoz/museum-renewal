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
        <div id="main_img_bar"></div>
        <div id="board_box">
            <h3 class="title">글 내용</h3>
            <?php
                $num = $_GET["num"];
                $page = $_GET["page"];

                //DB에서 해당 게시글 정보 가져오기
	            $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
                $sql = "select * from board where num=$num";
                $result = mysqli_query($con, $sql);

                //$result에서 데이터 가져오기
                $row = mysqli_fetch_array($result);
                $id = $row["id"];
                $regist_day = $row["regist_day"];
                $subject = $row["subject"];
                $content = $row["content"];
                $file_name = $row["file_name"];
                $file_type = $row["file_type"];
                $file_copied = $row["file_copied"];
                $hit = $row["hit"];

                //공백과 줄 바꿈 코드 변경
                $content = str_replace(" ", "&nbsp;", $content);
                $content = str_replace("\n", "<br>", $content);

                //조회수 값 증가, DB 업데이트
                $new_hit = $hit + 1;
                $sql = "update board set hit=$new_hit where num=$num";
                mysqli_query($con, $sql);

            ?>

            <ul id="view_content">
                <li>
                    <!-- 제목, 글쓴이, 작성시간 -->
                     <span class="col1">제목 : <?=$subject?></span>
                     <span class="col2 b-date"><?=$name?>| <?=$regist_day?></span>
                </li>
                
                <li>
                
                    <?php
                        if ($file_name) { /* 첨부파일 정보 출력 */
                            $real_name = $file_copied;
                            $file_path = "./data/".$real_name;
                            $file_size = filesize($file_path);
                            
                            echo "▷첨부파일 : $file_name($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
                        }
                    ?>
                    <?=$content?>
                </li>
            </ul>
            <ul class="buttons">
                <li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
                <li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
                <li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
                <li><button onclick="location.href='board_form.php'">글쓰기</button></li>


            </ul>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    
    <script src="./js/common.js"></script>
  </body>
</html>