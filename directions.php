<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/directions.css" />
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
        <li><a href="#">이용안내</a></li>
        <li><a href="#">찾아오시는 길</a></li>
      </ul>
    </div>

    <!-- 컨텐츠 영역 -->
    <section id="section-directions">
      <div id="map" style="width:1440px;height:400px;"></div>

      <div class="address">
        <h3>수원화성박물관 주소</h3>
        <span>16255 경기도 수원시 팔달구 창룡대로 21 (매향동)</span>
      </div>
      <div class="guide">
        <div class="public-transport">
          <div class="title">
            <img src="./images/directions-public.png" alt="대중교통" />
            <h3>대중교통</h3>
          </div>
          <div class="detail">
            <ul>
              <li>
                <p class="way-type">팔달구청, 수원화성박물관에서 내리는 버스</p>
                <p class="way">2-2, 7-2, 60, 400, 400-4, 700-2, 1, 1007</p>
              </li>
              <li>
                <p class="way-type">화성행궁에서 내리는 버스</p>
                <p class="way">
                  3, 4-1, 7, 7-2, 11, 13, 25, 25-2, 25-5, 27, 35, 60, 61, 62-1,
                  63, 64, 65, 66, 66-4, 83-1, 88, 98, 112, 700-2, 1007
                </p>
              </li>
              <li>
                <p class="way-type">지하철</p>
                <p class="way">
                  - 수원역(1호선, 분당선) 하차 → <strong>9번 출구</strong> 앞
                  매산시장역 버스탑승(2-2, 400, 400-4) → 팔달구청,
                  수원화성박물관 하차
                </p>
                <p class="way">
                  - 수원역(1호선, 분당선) 하차 →
                  <strong>7번 출구</strong> 수원역.AK플라자역 버스 탑승(7-2, 60)
                  → 팔달구청, 수원화성박물관 하차
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="own-car">
          <div class="title">
            <img src="./images/directions-car.png" alt="자가용" />
            <h3>자가용</h3>
          </div>
          <div class="detail">
            <ul>
              <li>
                <p class="way-type">고속도로를 이용할 경우</p>
                <p class="way">
                  영동고속도로 동수원 TG → 43번 국도 (수원시내 방향 직진) →
                  경기대후문 → 창룡문 → 화성행궁 방향 → 수원화성박물관
                </p>
              </li>
              <li>
                <p class="way-type">수원역쪽에서 올 때</p>
                <p class="way">
                  수원역 → 도청사거리 → 교동사거리 → 팔달문 → 종로 → 동수원IC,
                  창룡문 방향 → 매향교 → 수원화성박물관
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- 푸터 영역 -->
    <?php include "./footer.php" ?>
    <script src="./js/common.js"></script>
    <script src="./js/directions.js"></script>
  </body>
</html>
