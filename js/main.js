$(function () {
  // .topmenu

  // 사이트 링크 버튼 호버했을때 화살표 나타나게
  $(".topMenu .otherSite").hover(
    function () {
      $(this).find(".linkArrow").css("display", "inline-block").stop().animate(
        {
          opacity: 1,
          width: "13px",
        },
        300
      );
    },
    function () {
      $(this).find(".linkArrow").css("display", "none").stop().animate(
        {
          opacity: 0,
          width: "0",
        },
        300
      );
    }
  );

  // language 클릭했을 때 서브 보이게
  $(".topMenu .language").click(function () {
    if ($(".topMenu .language").hasClass("hovered")) {
      $(".linkArrowBottom").removeClass("rotated");
      $(".topMenu .language").removeClass("hovered");
      $(".topMenu .langSub").slideUp(200);
    } else {
      $(".linkArrowBottom").addClass("rotated");
      $(".topMenu .language").addClass("hovered");
      $(".topMenu .langSub").slideDown(200);
    }
  });

  //서브 내비

  $("nav > ul > li.menu").on("mouseenter focusin", function () {
    $(this).find(".sub").addClass("active");
    $("#subBlack").addClass("active");
    $("nav .sub").css("border-top-color", "#eeeeee");
  });

  $("nav > ul > li.menu").on("mouseleave focusout", function () {
    $(this).find(".sub").removeClass("active");
    $("#subBlack").removeClass("active");
    $("nav .sub").css("border-top-color", "#ffffff");
  });

  //ul 호버했을때 검정 배경, 서브 위 라인 보이게
  /* $('nav>ul>li.blackOn').hover(function () {
    $('#subBlack').removeClass('active');
    $('#subBlack').addClass('active');
    $('nav .sub').css('border-top-color', '#eeeeee');
  }, function () {
    $('#subBlack').removeClass('active');
    $('nav .sub').css('border-top-color', '#ffffff');
  }) */

  //서치 아이콘 클릭시 서브 서치바 보이게
  $("nav > ul > li.search .searchBtn").click(function () {
    if ($("nav > ul > li.search .sub").hasClass("active")) {
      $("nav .searchBtn img.cancelIcon").hide();
      $("nav .searchBtn img.searchIcon").show();
      $("nav > ul > li.search .sub").removeClass("active");
      $("#subBlack").removeClass("active");
      $("nav .sub").css("border-top-color", "#ffffff");
    } else {
      $("nav .searchBtn img.searchIcon").hide();
      $("nav .searchBtn img.cancelIcon").show();
      $("nav > ul > li.search .sub").addClass("active");
      $("#subBlack").addClass("active");
      $("nav .sub").css("border-top-color", "#eeeeee");
    }
  });

  //각 li호버 시 a에 언더라인 생성
  $("nav > ul > li.menu").hover(
    function () {
      $(this).children("a").addClass("hovered");
    },
    function () {
      $(this).children("a").removeClass("hovered");
    }
  );

  //서브 각 li의 a 호버 시 글자 색 변경
  $("nav .sub .sub_contents li a").hover(
    function () {
      $(this).addClass("hovered");
      $(this).addClass("hovered");
    },
    function () {
      $(this).removeClass("hovered");
      $(this).removeClass("hovered");
    }
  );

  //    <img src="./images/w-icon1.png" alt="화창">

  //날씨 정보 표시

  $.getJSON(
    "https://api.openweathermap.org/data/2.5/weather?lat=37.2826917&lon=127.018956&appid=da6faee8c43ad50e4d78c924b4c33800&units=metric",
    function (data) {
      var $cTemp = data.main.temp.toFixed(1); /*현재온도  */

      let $wCondition = data.weather[0].icon.substr(0, 2);
      let $wDescription;
      let weatherIcon;

      switch ($wCondition) {
        case "01":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon1.jpg",
            alt: "맑음",
          });
          $wDescription = "맑음";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon2.jpg",
            alt: "구름 조금",
          });
          $wDescription = "구름 조금";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon3.jpg",
            alt: "구름 많음",
          });
          $wDescription = "구름 많음";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon4.jpg",
            alt: "흐림",
          });
          $wDescription = "흐림";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon5.jpg",
            alt: "소나기",
          });
          $wDescription = "소나기";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon6.jpg",
            alt: "비",
          });
          $wDescription = "비";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon7.jpg",
            alt: "천둥번개",
          });
          $wDescription = "천둥번개";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon8.jpg",
            alt: "눈",
          });
          $wDescription = "눈";
          break;

        case "02":
          weatherIcon = $("<img>", {
            src: "./images/weather-icon9.jpg",
            alt: "안개",
          });
          $wDescription = "안개";
          break;
      }

      $(".wTemp").append($cTemp + "℃");
      $(".wIcon").append(weatherIcon);
      $(".wDescription").append($wDescription);
    }
  );

  $.getJSON(
    "http://api.openweathermap.org/data/2.5/air_pollution?lat=37.2826917&lon=127.018956&appid=da6faee8c43ad50e4d78c924b4c33800",
    function (data) {
      let fineDust = data.list[0].components.pm2_5;
      let fineDustCon;
      let fineDustConColor;

      if (fineDust <= 30) {
        fineDustCon = "미세먼지 좋음";
        fineDustConColor = "#0085FF";
      } else if (fineDust > 30 && fineDust <= 80) {
        fineDustCon = "미세먼지 보통";
        fineDustConColor = "#009806";
      } else if (fineDust > 80 && fineDust <= 150) {
        fineDustCon = "미세먼지 나쁨";
        fineDustConColor = "#FF2B1E";
      } else {
        fineDustCon = "미세먼지 매우 나쁨";
        fineDustConColor = "#B90B00";
      }

      $(".weatherWrap .wAircondition").append(fineDustCon);
      $(".weatherWrap .wAircondition").css("color", fineDustConColor);
    }
  );

  // 섹션1 박물관 뷰 스와이퍼
  var swiper1 = new Swiper(".swiper1", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false, // 사용자가 상호작용해도 자동 슬라이드 유지
    },
    navigation: {
      // 네비게이션
      nextEl: ".next1", // 다음 버튼 클래스명
      prevEl: ".prev1", // 이전 버튼 클래스명
    },
  });

  //버튼 눌렀을때 스와이퍼 드래그 안되게
  $(".swiper1Btns > button").on("pointerdown pointerup", function (e) {
    e.stopPropagation();
  });

  //초기에 플레이버튼 안보이게
  $(".play1").hide();

  //호버됐을 때 멈춤 기능
  $(".swiper1 .swiper-wrapper .swiper-slide").on({
    mouseover: function () {
      swiper1.autoplay.stop();
      $(".pause1").hide();
      $(".play1").show();
    },
    mouseout: function () {
      swiper1.autoplay.start();
      $(".play1").hide();
      $(".pause1").show();
    },
  });
  //stop, play
  $(".pause1").on({
    click: function () {
      swiper1.autoplay.stop();
      $(".pause1").hide();
      $(".play1").show();
    },
  });

  $(".play1").on({
    click: function () {
      swiper1.autoplay.start();
      $(".play1").hide();
      $(".pause1").show();
    },
  });

  //버튼 호버했을 때 배경색 변경
  $(".swiper1Btns > button").hover(
    function () {
      $(this).addClass("hovered");
    },
    function () {
      $(this).removeClass("hovered");
    }
  );

  //section info

  //오시는 길, 관람안내 호버 했을때 언더라인
  $(".infoItem .info > .infoBtn1").hover(
    function () {
      $(this)
        .find(".underline1")
        .stop()
        .animate({ width: "85.7px" }, 80, "easeInOutCubic");
    },
    function () {
      $(this)
        .find(".underline1")
        .stop()
        .animate({ width: 0 }, 80, "easeInOutCubic");
    }
  );

  $(".infoItem .info > .infoBtn2").hover(
    function () {
      $(this)
        .find(".underline1")
        .stop()
        .animate({ width: "80.41px" }, 80, "easeInOutCubic");
    },
    function () {
      $(this)
        .find(".underline1")
        .stop()
        .animate({ width: 0 }, 80, "easeInOutCubic");
    }
  );

  // 섹션3 전시 스와이퍼
  var swiper2 = new Swiper(".swiper2", {
    slidesPerView: 4,
    spaceBetween: 0, // 슬라이드간 간격
    /* centeredSlides: true, */
    loop: true, // 무한 반복
    autoplay: {
      delay: 3000,
      disableOnInteraction: false, // 사용자가 상호작용해도 자동 슬라이드 유지
    },
    navigation: {
      // 네비게이션
      nextEl: ".next2", // 다음 버튼 클래스명
      prevEl: ".prev2", // 이전 버튼 클래스명
    },
    pagination: {
      el: ".pager2",
      type: "fraction", // 넘버 표시 타입
    },
  });

  //스와이퍼2 내비게이션

  //버튼 눌렀을때 스와이퍼 드래그 안되게
  $(".swiper2Nav > button").on("pointerdown pointerup", function (e) {
    e.stopPropagation();
  });
  $(".swiper2Nav > div").on("pointerdown pointerup", function (e) {
    e.stopPropagation();
  });

  //초기에 플레이버튼 안보이게
  $(".swiper2Nav .play2").hide();

  //stop, play
  $(".swiper2Nav .pause2").on({
    click: function () {
      swiper2.autoplay.stop();
      $(".swiper2Nav .pause2").hide();
      $(".swiper2Nav .play2").show();
    },
  });

  $(".swiper2Nav .play2").on({
    click: function () {
      swiper2.autoplay.start();
      $(".swiper2Nav .play2").hide();
      $(".swiper2Nav .pause2").show();
    },
  });

  /* section4 info */

  $(".infoTabSet").each(function () {
    var topDiv = $(this);
    var anchors = topDiv.find("ul.infoTabs>li>a"); //타이틀
    var panelDivs = topDiv.find("div.infoPanels > .panel"); //설명

    var lastAnchor;
    var lastPanel;

    anchors.show();

    lastAnchor = anchors.filter(".on");

    lastPanel = $(lastAnchor.attr("href"));

    panelDivs.hide(); //모든 설명부분 숨기기
    lastPanel.show(); //on 걸려있는 부분 보이게 하기

    anchors.click(function (event) {
      event.preventDefault(); //원래의 링크 속성 없애기

      var currentAnchor = $(this); //활성화 될 자기 자신만을 선택
      var currentPanel = $(currentAnchor.attr("href"));

      if (currentAnchor.get(0) === lastAnchor.get(0)) {
        return;
      }

      lastPanel.hide();
      lastAnchor.removeClass("on");
      currentAnchor.addClass("on");
      currentPanel.show();
      lastAnchor = currentAnchor;
      lastPanel = currentPanel;
    });
  });

  /* section4 info slide (fade effect) */
  var banner = $(".infoBanner > ul > li");
  var btnPrev = $(".infoNav .prev");
  var btnNext = $(".infoNav .next");
  var btnPause = $(".infoNav .pause");
  var btnPlay = $(".infoNav .play");
  var current = 0;
  var setIntervalId;
  var index = $(".slideIndex p");

  banner.hide().css("opacity", 0);
  banner.eq(0).show().css("opacity", 1);
  index.eq(0).addClass("active");
  btnPlay.hide();

  fadeSlideLoop();

  function fadeSlideLoop() {
    setIntervalId = setInterval(function () {
      var bnNow = banner.eq(current);
      var indexNow = index.eq(current);

      bnNow.fadeOut(800);

      indexNow.removeClass("active");

      current++;
      if (current == banner.length) {
        current = 0;
      }

      var bnNext = banner.eq(current);
      var indexNext = index.eq(current);
      bnNext.css("opacity", 0).show().stop().animate({ opacity: 1 }, 800);
      indexNext.addClass("active");
    }, 3000);
  }

  //hover : stop
  $(".infoBanner > ul").on({
    mouseover: function () {
      clearInterval(setIntervalId);
    },
    mouseout: function () {
      fadeSlideLoop();
    },
  });

  //click
  btnNext.click(function () {
    var bnNow = banner.eq(current);
    var indexNow = index.eq(current);

    bnNow.fadeOut(800);

    indexNow.removeClass("active");

    current++;
    if (current == banner.length) {
      current = 0;
    }

    var bnNext = banner.eq(current);
    var indexNext = index.eq(current);
    bnNext.css("opacity", 0).show().animate({ opacity: 1 }, 800);
    indexNext.addClass("active");
  });

  btnPrev.click(function () {
    var bnNow = banner.eq(current);
    var indexNow = index.eq(current);

    bnNow.fadeOut(800);

    indexNow.removeClass("active");

    current--;
    if (current == -banner.length) {
      current = 0;
    }

    var bnNext = banner.eq(current);
    var indexNext = index.eq(current);
    bnNext.css("opacity", 0).show().animate({ opacity: 1 }, 800);
    indexNext.addClass("active");
  });

  $(".infoNav .pause").click(function () {
    clearInterval(setIntervalId);
    $(".infoNav .pause").hide();
    $(".infoNav .play").show();
  });

  $(".infoNav .play").click(function () {
    clearInterval(setIntervalId);
    fadeSlideLoop();
    $(".infoNav .play").hide();
    $(".infoNav .pause").show();
  });

  /* section5 edu */

  $(".eduTabSet").each(function () {
    var topDiv = $(this);
    var anchors = topDiv.find("ul.eduTabs>li>a");
    var panelDivs = topDiv.find("div.eduPanels > .ePanel");

    var lastAnchor;
    var lastPanel;

    anchors.show();

    lastAnchor = anchors.filter(".on");

    lastPanel = $(lastAnchor.attr("href"));

    panelDivs.hide(); //모든 설명부분 숨기기
    lastPanel.show(); //on 걸려있는 부분 보이게 하기

    anchors.click(function (event) {
      event.preventDefault(); //원래의 링크 속성 없애기

      var currentAnchor = $(this); //활성화 될 자기 자신만을 선택
      var currentPanel = $(currentAnchor.attr("href"));

      if (currentAnchor.get(0) === lastAnchor.get(0)) {
        return;
      }

      lastPanel.hide();
      lastAnchor.removeClass("on");
      currentAnchor.addClass("on");
      $(".eduBanner > div").hide();
      if (currentAnchor.attr("href") == "#ePanel1-1") {
        $(".eduBanner > div").eq(0).show();
      } else {
        $(".eduBanner > div").eq(3).show();
      }
      currentPanel.show();
      lastAnchor = currentAnchor;
      lastPanel = currentPanel;
    });

    /* 각 컨텐트 호버 시 해당하는 배너 보이게 */

    $(".eduPanels .eduApplying > div").mouseenter(function () {
      var contentId = $(this).attr("id");
      var banners = $(".eduBanner > div");
      banners.hide();
      for (var i = 0; i < banners.length; i++) {
        if (contentId == banners.eq(i).attr("class")) {
          banners.eq(i).show();
        }
      }
    });

    $(".eduPanels .eduVideo > div").mouseenter(function () {
      var contentId = $(this).attr("id");
      var banners = $(".eduBanner > div");
      banners.hide();
      for (var i = 0; i < banners.length; i++) {
        if (contentId == banners.eq(i).attr("class")) {
          banners.eq(i).show();
        }
      }
    });
  });

  $(".eduPanels .content").hover(
    function () {
      $(this).removeClass("hovered");
      $(this).addClass("hovered");
    },
    function () {
      $(this).removeClass("hovered");
    }
  );

  $(".eduPanels .content button").hover(
    function () {
      $(this).removeClass("hovered");
      $(this).addClass("hovered");
    },
    function () {
      $(this).removeClass("hovered");
    }
  );

  //섹션6 유물 스와이퍼
  var swiper3 = new Swiper(".swiper3", {
    slidesPerView: 4,
    loop: true,
    spaceBetween: 0,
    centeredSlides: true,
    navigation: {
      // 네비게이션
      nextEl: ".next3", // 다음 버튼 클래스명
      prevEl: ".prev3", // 이전 버튼 클래스명
    },
    pagination: {
      el: ".pager3",
      type: "progressbar", // 넘버 표시 타입
    },
  });

  $(".swiper3 .desc").hover(
    function () {
      $(this).addClass("hovered");
    },
    function () {
      $(this).removeClass("hovered");
    }
  );
}); /* 제이쿼리 닫는 괄호 */
