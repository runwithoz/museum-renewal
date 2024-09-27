<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/member.css" />
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
    <script>
        function check_input(){ /* 저장하기 */

            if (!document.member_form.id.value.trim()) {
                alert("아이디를 입력하세요!");
                document.member_form.id.focus();
                return;
            };

            if (!document.member_form.pass.value.trim()) {
                alert("비밀번호를 입력하세요!");
                document.member_form.pass.focus();
                return;
            };

            if (!document.member_form.pass_confirm.value.trim()) {
                alert("비밀번호확인을 입력하세요!");
                document.member_form.pass_confirm.focus();
                return;
            };

            if (!document.member_form.name.value.trim()) {
                alert("이름을 입력하세요!");
                document.member_form.name.focus();
                return;
            };

            if (!document.member_form.email1.value.trim()) {
                alert("이메일을 입력하세요!");
                document.member_form.email1.focus();
                return;
            };

            if (!document.member_form.email2.value.trim()) {
                alert("이메일을 입력하세요!");
                document.member_form.email2.focus();
                return;
            };

            /* 비밀번호와 비밀번호 확인 입력창에 입력된 데이터가 같은지 비교 */
            if (document.member_form.pass.value.trim() != document.member_form.pass_confirm.value.trim()) {
                alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!")
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

            document.member_form.submit();

        };

        function reset_form () { /* 입력한 데이터 초기화 함수 */
            document.member_form.id.value = "";
            document.member_form.pass.value = "";
            document.member_form.pass_confirm.value = "";
            document.member_form.name.value = "";
            document.member_form.email1.value = "";
            document.member_form.email2.value = "";
            document.member_form.id.focus();
            return;
        }

        function check_id() { /* 아이디 중복확인 */
            window.open("member_check_id.php?id=" + document.member_form.id.value,
                "IDcheck",
                "left=700, top=300, width=350, height=200, scrollbars=no, resizeable=yes"
            );
        }
    </script>
  </head>

  <body>
    <!-- 헤더 영역 -->
    <?php include "./header.php" ?>

    <!-- 서브 내비게이션 -->
    <div id="sub-nav">
      <ul>
        <li class="main-icon">
          <a href="./index.html"><i class="fa-solid fa-house"></i></a>
        </li>
        <li><a href="#">마이페이지</a></li>
        <li><a href="#">회원가입</a></li>
      </ul>
    </div>

    <!-- 컨텐츠 영역 -->
    <section id="section-member">
    <h2>회원 가입</h2>
    <div id="main_img_bar">
        </div>
        <div id="main_content">
            <div id="join_box">
                <form action="member_insert.php" method="post" name="member_form">
                    
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
                            <input type="text" name="id">
                        </div>
                        <div class="col3">
                            <a href="#"><div class="check-btn" onclick="check_id()">중복확인</div></a>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1">@<input type="text" name="email2">
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="bottom_line"></div>
                    <div class="buttons">
                    <div id="reset_button" onclick="reset_form()" style='cursor:pointer;'>취소하기</div>
                    &nbsp;
                        <div onclick="check_input()" style='cursor:pointer;'>가입하기</div>
                    </div>


                </form>
            </div>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    <script src="./js/common.js"></script>
  </body>
</html>
