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
});
