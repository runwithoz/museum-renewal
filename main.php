    <!-- section1 -->
    <section id="section1">
      <div class="weatherWrap">
        <div class="weather">
          <div class="wIcon"></div>
          <div class="wDescription"></div>
          <div class="wBar">|</div>
          <div class="wAircondition"></div>
          <div class="wTemp"></div>
        </div>
      </div>
      <!-- 스와이퍼1 영역 -->
      <h2 class="hidden">수원화성박물관모습</h2>
      <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="./images/sd-night-view1-1200.jpg"
              alt="박물관모습"
              width="1440"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./images/sd-night-view2-1300.jpg"
              alt="박물관모습"
              width="1440"
            />
          </div>
        </div>
        <div class="swiper1Btns">
          <button type="button" class="swiper-button-prev prev1"></button>
          <button type="button" class="play1"></button>
          <button type="button" class="pause1"></button>
          <button type="button" class="swiper-button-next next1"></button>
        </div>
      </div>
    </section>

    <!-- section info -->
    <section id="section2">
      <h2 class="hidden">박물관 관람시간 안내</h2>
      <div class="infoContainer">
        <div class="border1"></div>
        <div class="infoItem">
          <div class="viewingHours">
            <p><i class="fa-regular fa-clock"></i>관람시간</p>
            <span>09:00~18:00</span>
          </div>
          <div class="border2"></div>
          <div class="ticketingHours">
            <p><i class="fa-solid fa-hourglass-start"></i>매표시간</p>
            <div>
              <span>09:00~17:00</span>
              <p>* 관람시간 종료 1시간 전까지</p>
            </div>
          </div>
          <div class="border2"></div>
          <div class="closedDay">
            <p><i class="fas fa-calendar-times"></i>휴관일</p>
            <div>
              <span>매주 월요일</span>
              <p>* 그 밖에 시장이 정하는 휴관일</p>
            </div>
          </div>
          <div class="border2"></div>
          <div class="info">
            <a class="infoBtn1" href="#"
              ><span>오시는 길</span>
              <div class="underline1"></div>
            </a>
            <a class="infoBtn2" href="#"
              ><span>관람안내</span>
              <div class="underline1"></div>
            </a>
          </div>
        </div>
        <div class="border1"></div>
      </div>
    </section>

    <!-- section exhibition banner -->
    <section id="section3">
      <div class="exhibition">
        <h2>전시</h2>
        <div class="swiper-container swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="./images/exbanner1.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">후소의 옛 터, 양성관 가옥</p>
                <p class="date">2024-03-26~2024-12-31</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="./images/exbanner2.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">조선의 희비애락, 한 눈에 보다</p>
                <p class="date">2024-05-23~2024-07-28</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="./images/exbanner3.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">이미지로 본 수원화성</p>
                <p class="date">2024-03-12~2024-04-14</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="./images/exbanner4.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">성곽의 빛, 수원화성</p>
                <p class="date">2024-01-30~2024-02-25</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="./images/exbanner5.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">수원유수 납시오!</p>
                <p class="date">2023-05-19~2023-08-06</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="./images/exbanner6.jpg" alt="이미지" />
              <div class="textArea">
                <p class="title">독서대왕 정조의 글과 글씨</p>
                <p class="date">2022-10-06~2023-01-29</p>
              </div>
            </div>
          </div>
          <div class="swiper2Nav">
            <button type="button" class="swiper-button-prev prev2"></button>
            <div class="swiper-pagination pager2"></div>
            <button type="button" class="swiper-button-next next2"></button>
            <button type="button" class="play2"></button>
            <button type="button" class="pause2"></button>
          </div>
        </div>
      </div>
    </section>

    <!-- section info -->
    <section id="section4">
      <div class="infoWrap">
        <h2>박물관 소식</h2>
        <div class="infoTabSet">
          <ul class="infoTabs">
            <li><a href="#panel1-1" class="on">공지사항</a></li>
            <li><a href="#panel1-2">블로그</a></li>
            <li><a href="#panel1-3">타박물관 소식</a></li>
          </ul>
          <div class="infoPanels">
            <div class="panel" id="panel1-1">
              <ul>
                <li>
                  <a href="#">전시연계 특별강좌 안내</a><span>2024.05.31.</span>
                </li>
                <li>
                  <a href="#">수원화성박물관 연장 운영 안내</a
                  ><span>2024.05.28.</span>
                </li>
                <li>
                  <a href="#">수원화성박물관의 구입예정 유물 화상자료 공개</a
                  ><span>2024.05.24.</span>
                </li>
                <li>
                  <a href="#"
                    >국가유산 디지털 전시 - 조선의 희비애락, 한 눈에 보다</a
                  ><span>2024.05.17.</span>
                </li>
                <li>
                  <a href="#">어린이날 수원시 박물관 무료관람 운영안내</a
                  ><span>2024.05.01.</span>
                </li>
                <li>
                  <a href="#"
                    >5월 가정의 달 &lt;수원시박물관 앱 설치 무료관람 이벤트&gt;
                    안내</a
                  ><span>2024.04.30.</span>
                </li>
              </ul>
            </div>
            <div class="panel" id="panel1-2">
              <ul>
                <li>
                  <a href="#">수원화성박물관 연장운영 안내</a
                  ><span>2024.05.28.</span>
                </li>
                <li>
                  <a href="#">[성인교육] 수원 화성과 고건축 이야기</a
                  ><span>2024.03.30.</span>
                </li>
                <li>
                  <a href="#">[어린이 대상] 수원 화성 박물관 어린이 체험실</a
                  ><span>2024.03.27.</span>
                </li>
                <li>
                  <a href="#"
                    >[초등학생, 가족 대상 교육] 박물관 옆 역사 문화 탐방 교육
                    일정 안내</a
                  ><span>2024.03.21.</span>
                </li>
                <li>
                  <a href="#"
                    >[박물관과 학교연계교육] 초등학교 단체 교육 신청안내</a
                  ><span>2024.03.21.</span>
                </li>
                <li>
                  <a href="#"
                    >[초등학생, 가족대상 교육] 원리로 이해하는 수원화성 축성</a
                  ><span>2024.02.20.</span>
                </li>
              </ul>
            </div>
            <div class="panel" id="panel1-3">
              <ul>
                <li>
                  <a href="#">2024년 수원박물관 구입예정 유물 화상자료 공개</a
                  ><span>2024.06.05.</span>
                </li>
                <li>
                  <a href="#">2024 수원박물관 어린이날</a
                  ><span>2024.05.03.</span>
                </li>
                <li>
                  <a href="#">어린이체험실 5/6(월) 미운영 안내</a
                  ><span>2024.05.01.</span>
                </li>
                <li>
                  <a href="#">5월 박물관 관람 및 교육행사 안내</a
                  ><span>2024.05.01.</span>
                </li>
                <li>
                  <a href="#"
                    >5월5일 어린이날 관람 무료, 어린이 관람객에게 특별 선물
                    증정</a
                  ><span>2024.05.01.</span>
                </li>
                <li>
                  <a href="#"
                    >수원시박물관 앱(전시해설 앱) 설치 무료관람 이벤트 안내</a
                  ><span>2024.04.30.</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="infoBannerWrap">
        <div class="infoBanner">
          <ul>
            <li class="banner1"></li>
            <li class="banner2"></li>
            <li class="banner3"></li>
          </ul>
          <div class="infoNavWrap">
            <div class="slideIndex">
              <p class="active">
                <span class="emphasis">01 </span
                ><span class="dash">&nbsp; — &nbsp;</span> 03
              </p>
              <p>
                <span class="emphasis">02 </span
                ><span class="dash">&nbsp; — &nbsp;</span> 03
              </p>
              <p>
                <span class="emphasis">03 </span
                ><span class="dash">&nbsp; — &nbsp;</span> 03
              </p>
            </div>
            <div class="infoNav">
              <div class="prev"></div>
              <div class="pause"></div>
              <div class="play"></div>
              <div class="next"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section: edu -->
    <section id="section5">
      <div class="eduWrap">
        <div class="eduBannerWrap">
          <div class="eduBanner">
            <div class="content1">
              <img src="./images/edu_banner1.jpg" alt="배너" width="550" />
            </div>
            <div class="content2">
              <img src="./images/edu_banner2.jpg" alt="배너" width="550" />
            </div>
            <div class="content3">
              <img src="./images/edu_banner3.jpg" alt="배너" width="550" />
            </div>
            <div class="content4">
              <iframe
                width="550"
                height="474"
                src="https://www.youtube.com/embed/C-AGGaw5w1Y?si=xk_XGMr9tSw8WjPL"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="content5">
              <iframe
                width="550"
                height="474"
                src="https://www.youtube.com/embed/yV6N4vCswn4?si=hiKoLWmcC5raGCWY"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="content6">
              <iframe
                width="550"
                height="474"
                src="https://www.youtube.com/embed/SRaYikWcV1I?si=XTQ44WDIkxeLWVOX"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
        <div class="eduTabSetWrap">
          <h2>교육 안내</h2>
          <div class="eduTabSet">
            <ul class="eduTabs">
              <li><a href="#ePanel1-1" class="on">체험교육신청</a></li>
              <li><a href="#ePanel1-2">교육영상</a></li>
            </ul>
            <div class="eduPanels">
              <div class="ePanel" id="ePanel1-1">
                <div class="contentBox eduApplying">
                  <div id="content1" class="content">
                    <div class="type">접수중</div>
                    <div class="info">
                      <div class="classifying">
                        <ul>
                          <li>주말</li>
                          <li>대면</li>
                          <li>어린이</li>
                          <li>가족</li>
                        </ul>
                      </div>
                      <div class="name">
                        박물관 옆 역사문화 탐방(6월) - 물 탐방길
                      </div>
                      <div class="date">
                        교육일시: 2024.06.22.(토) 10:00~12:30
                      </div>
                    </div>
                    <button type="button" class="applying">신청하기</button>
                  </div>
                  <div id="content2" class="content">
                    <div class="type">접수중</div>
                    <div class="info">
                      <div class="classifying">
                        <ul>
                          <li>비대면</li>
                          <li>어린이</li>
                        </ul>
                      </div>
                      <div class="name">
                        동화책으로 배우는 우리의 역사 ⑭ - 조선의 과학자
                      </div>
                      <div class="date">
                        교육일시: 2024.06.21.(금) 14:00 ~ 15:30
                      </div>
                    </div>
                    <button type="button" class="applying">신청하기</button>
                  </div>
                  <div id="content3" class="content">
                    <div class="type">접수중</div>
                    <div class="info">
                      <div class="classifying">
                        <ul>
                          <li>주말</li>
                          <li>대면</li>
                          <li>어린이</li>
                        </ul>
                      </div>
                      <div class="name">원리로 이해하는 수원화성 축성</div>
                      <div class="date">교육일시: 2024.06.15.(토)</div>
                    </div>
                    <button type="button" class="applying">신청하기</button>
                  </div>
                </div>
              </div>
              <div class="ePanel" id="ePanel1-2">
                <div class="contentBox eduVideo">
                  <div id="content4" class="content">
                    <div class="type">교육영상</div>
                    <div class="info">
                      <div class="name">
                        수원화성박물관 '열린문화공간 후소' 미술사 교육 영상
                      </div>
                      <div class="date">작성일: 2022.01.19</div>
                    </div>
                    <button class="watch">더보기</button>
                  </div>
                  <div id="content5" class="content">
                    <div class="type">교육영상</div>
                    <div class="info">
                      <div class="name">
                        색종이 김영만 아저씨와 함께 떠나는 수원화성박물관 여행
                        -1부-
                      </div>
                      <div class="date">작성일: 2020.08.19</div>
                    </div>
                    <button class="watch">더보기</button>
                  </div>
                  <div id="content6" class="content">
                    <div class="type">교육영상</div>
                    <div class="info">
                      <div class="name">
                        색종이 김영만 아저씨와 함께 떠나는 수원화성박물관 여행
                        -2부-
                      </div>
                      <div class="date">작성일: 2020.08.19</div>
                    </div>
                    <button class="watch">더보기</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="section-review">
      
      <div class="inner">
      <h2>관람후기</h2>
        <ul>
      <?php 
	                $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
                    $sql = "select * from board order by num desc limit 4";
                    $result = mysqli_query($con,$sql);

                    if (!$result) {
                        echo "게시판 DB 테이블이 생성 전이거나 아직 게시글이 없습니다.";
                    } else {
                        while ($row = mysqli_fetch_array($result)) {
                            $regist_day = substr($row["regist_day"],0,10);
                            //substr(시작위치, 반환할 문자열 갯수): 문자열 부분적으로 가져오기  

                ?>
                            <li>
                                <span class="r-subject"><?=$row['subject']?></span>
                                <span class="r-content"><?=$row['content']?></span>
                                <div>
                                  <span class="r-name"><?=$row['name']?></span>
                                  <span class="r-name"> | </span>
                                  <span class="r-regist-day"><?=$row['regist_day']?></span>
                                </div>
                            </li>
                <?php
                        }
                    }
                ?>
                </ul>
      </div>
    </section>

    <!-- section: relics -->
    <section id="section6">
      <div class="relicsWrap">
        <h2>소장유물 안내</h2>
        <!-- 스와이퍼3 영역 -->
        <div class="swiper-container swiper3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics1"
                  src="./images/relics_1.jpg"
                  alt="화성성역의궤"
                />
                <div class="desc">
                  <span>화성성역의궤</span>
                  <div>+</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics2"
                  src="./images/relics_2.jpg"
                  alt="채제공 시복본 초상화"
                />
                <div class="desc">
                  <span>채제공 시복본 초상화</span>
                  <div>+</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics3"
                  src="./images/relics_3.jpg"
                  alt="대모백은장 옥구 보도"
                />
                <div class="desc">
                  <span>대모백은장 옥구 보도</span>
                  <div>+</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics4"
                  src="./images/relics_4.jpg"
                  alt="홍재전서"
                />
                <div class="desc">
                  <span>홍재전서</span>
                  <div>+</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics5"
                  src="./images/relics_5.jpg"
                  alt="김후 초상"
                />
                <div class="desc">
                  <span>김후 초상</span>
                  <div>+</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="wrap">
                <img
                  class="relics6"
                  src="./images/relics_6.jpg"
                  alt="대전통편"
                />
                <div class="desc">
                  <span>대전통편</span>
                  <div>+</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper3Nav">
          <button type="button" class="swiper-button-prev prev3"></button>
          <div class="swiper-pagination pager3"></div>
          <button type="button" class="swiper-button-next next3"></button>
        </div>
      </div>
    </section>