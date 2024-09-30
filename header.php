<?php
    include "define.php"; //파일을 현재 위치에 가져오기

    session_start(); //세션 저장, 사용 시 필수

    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];

    else $userid = ""; //로그인 상태가 아닐때

    if (isset($_SESSION["username"])) $username = $_SESSION["username"];

    else $username = "";

    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];

    else $userlevel = "";

    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];

    else $userpoint = "";


?>


<header>
      <div class="topMenu">
        <ul>
          <li class="otherSite">
            <a href="#"
              >수원박물관<img
                class="linkArrow"
                src="./images/arrow-top-right.svg"
                alt="화살표"
                width="13"
            /></a>
          </li>
          <li class="otherSite">
            <a href="#"
              >수원광교박물관<img
                class="linkArrow"
                src="./images/arrow-top-right.svg"
                alt="화살표"
                width="13"
            /></a>
          </li>
          <li class="otherSite">
            <a href="#"
              >수원관광<img
                class="linkArrow"
                src="./images/arrow-top-right.svg"
                alt="화살표"
                width="13"
            /></a>
          </li>
          <li class="langWrap">
            <a href="#" class="language"
              >Language<img
                class="linkArrowBottom"
                src="./images/arrow-bottom.svg"
                alt="화살표"
                width="11"
            /></a>
            <ul class="langSub">
              <li><a href="#">English</a></li>
              <li><a href="#">日本語</a></li>
              <li><a href="#">中文</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="headerContainer">
        <!-- 메인로고 -->
        <div class="itemLogo">
          <h1 class="topLogo">
            <span class="hidden">수원화성박물관</span
            ><a href="./index.php"><img src="./images/logo.svg" alt="로고" /></a>
          </h1>
        </div>
        <div class="itemNav">
          <nav>
            <ul>
              <li class="menu blackOn">
                <a href="./directions.php">이용안내</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>이용안내</span>
                    <ul class="sub1">
                      <li><a href="#">관람안내</a></li>
                      <li><a href="#">예약안내</a></li>
                      <li><a href="#">시설안내</a></li>
                      <li><a href="#">대관안내</a></li>
                      <li>
                        <a href="./directions.php">찾아오시는 길</a>
                      </li>
                      <li><a href="#">소장품이용안내</a></li>
                      <li><a href="#">카페테리아 안내</a></li>
                      <li><a href="#">기증안내</a></li>
                      <li><a href="#">박물관달력</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="menu blackOn">
                <a href="#">전시안내</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>전시안내</span>
                    <ul class="sub2">
                      <li><a href="#">상설전시</a></li>
                      <li><a href="#">기획전시</a></li>
                      <li><a href="#">야외전시</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="menu blackOn">
                <a href="#">교육/행사</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>교육/행사</span>
                    <ul class="sub3">
                      <li><a href="#">교육/행사 안내 및 예약</a></li>
                      <li><a href="#">어린이체험실</a></li>
                      <li><a href="#">단체교육</a></li>
                      <li><a href="#">교육영상</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="menu blackOn">
                <a href="#">자료실</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>자료실</span>
                    <ul class="sub4">
                      <li><a href="#">소장유물검색</a></li>
                      <li><a href="#">유물자료실</a></li>
                      <li><a href="#">발간자료</a></li>
                      <li><a href="#">다운로드</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="menu blackOn">
                <a href="#">열린마당</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>열린마당</span>
                    <ul class="sub5">
                      <li><a href="#">공지사항</a></li>
                      <li><a href="#">교육/행사</a></li>
                      <li><a href="board_list.php">관람후기</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="menu blackOn">
                <a href="#">박물관소개</a>
                <div class="sub">
                  <div class="sub_contents">
                    <span>박물관소개</span>
                    <ul class="sub6">
                      <li><a href="#">박물관로고</a></li>
                      <li><a href="#">개요및연혁</a></li>
                      <li><a href="#">인사말</a></li>
                      <li><a href="#">조직및부서</a></li>
                      <li><a href="#">열린문화공간 후소</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="member">
<?php
    if (!$userid) {
?>
                <a href="login_form.php">로그인</a>
                <a href="member_form.php">회원가입</a>

<?php
    } else {
                $logged = $username. "님 [level:".$userlevel.",Point:".$userpoint."]";
?>
                <a href="logout.php">로그아웃</a>
                <a href="member_modify_form.php">마이페이지</a>
<?php
    }
?>

              </li>
              <li class="search searchBlackOn">
                <a class="searchBtn" href="#"
                  ><img
                    class="searchIcon"
                    src="./images/icon-search.svg"
                    alt="돋보기" /><img
                    class="cancelIcon"
                    src="./images/icon-x.svg"
                    alt="엑스"
                /></a>
                <div class="sub">
                  <div class="sub_contents">
                    <div class="searchBarWrap">
                      <div class="searchBar">
                        <input
                          type="text"
                          placeholder="무엇을 찾고 계신가요?"
                        /><button type="button"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div id="subBlack"></div>