<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/login-form.css" />
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
        <li><a href="#">로그인</a></li>
      </ul>
    </div>

    <!-- 컨텐츠 영역 -->
    <section id="section-login">
      <h2>로그인</h2>
      <form id="loginForm" action="login.php" name="login_form" method="post">
        <fieldset>
          <legend>member login</legend>
          <div class="wrap">
            <div id="login">
              <p>
                <label for="userId">아이디</label>
                <input
                  type="text"
                  id="userId"
                  placeholder="아이디를 입력해 주세요."
                  name="id"
                  value=""
                />
              </p>
              <p>
                <label for="userPWD">비밀번호</label>
                <input
                  type="password"
                  id="userPWD"
                  placeholder="비밀번호를 입력해 주세요."
                  name="pass"
                  value=""
                />
              </p>
            </div>
            <input type="submit" value="로그인" id="btnLogin" onclick="check_input()"/>
          </div>
          <div id="search">
            <input type="button" value="아이디찾기" id="btnSearch" />
            <span>|</span>
            <input type="button" value="비밀번호찾기" id="btnSearch" />
            <span>|</span>
            <input type="button" value="회원가입" id="btnJoin" onClick="window.open('member_form.php')"/>
          </div>
        </fieldset>
      </form>
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    <script src="./js/common.js"></script>
  </body>
</html>
