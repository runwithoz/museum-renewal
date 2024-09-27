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
        <li><a href="#">자유게시판</a></li>
      </ul>
    </div>

    <section>
        <div id="main_img_bar"></div>
        <div id="board_box">
            <h3 id="board_title">글 작성</h3>
            <!-- 파일 첨부 기능을 사용할 때는 enctype 속성을 multipart/form-data로 설정 -->
            <form action="board_insert.php" method="post" name="board_form" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2"><?=$username?></span>
                    </li>
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2"><input type="text" name="subject"></span>
                    </li>
                    <li id="text_area">
                        <span class="col1">내용 : </span>
                        <span class="col2"><textarea name="content"></textarea></span>
                    </li>
                    <li>
                        <span class="col1">첨부파일 </span>
                        <span class="col2"><input type="file" name="upfile"></span>
                    </li>
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input()">완료</button></li>
                    <li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
                </ul>

            </form>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    <script>
        //사용자가 입력창에 내용을 입력했는지 검사
        function check_input () {
            if (!document.board_form.subject.value.trim()) { //trim은 공백을 없애줌
                alert('제목을 입력하세요!')
                document.board_form.subject.focus()
                return;

            }
            if (!document.board_form.content.value.trim()) { //trim은 공백을 없애줌
                alert('내용을 입력하세요!')
                document.board_form.content.focus()
                return;
            }
            document.board_form.submit();
        }
    </script>
    <script src="./js/common.js"></script>
  </body>
</html>