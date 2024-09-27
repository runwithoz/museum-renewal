<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/swiper.min.css" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/popup.css" />
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script> -->
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script
      src="https://kit.fontawesome.com/a48f863fee.js"
      crossorigin="anonymous"
    ></script>
  </head>
<body>
  <!-- 팝업 -->
  <div id="popWrap">
      <div id="popup">
        <ul>
          <li><img src="./images/popup.png" alt="팝업배너" /></li>
          <li>
            <form action="#" name="notice_form">
              <div class="bottomBtn">
                <div>
                  <input type="checkbox" name="checkbox" value="checkbox" />
                  오늘 하루 열지 않습니다.
                </div>
                <div>
                  <a href="javascript:closeWin();">닫기 </a>
                </div>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <header>
        <?php include "./header.php" ?>
    </header>

    <section>
        <?php include "./main.php" ?>
    </section>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
<script src="./js/main.js"></script>
<script src="./js/popup.js"></script>
</body>
</html>