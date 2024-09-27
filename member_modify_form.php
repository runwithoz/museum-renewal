<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>수원화성박물관</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/member.css" />
    <script type="text/javascript" src="./js/member_modify.js"></script>
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


    <?php    
   	$con = mysqli_connect("localhost", DBuser, DBpass, DBname); 

    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);


    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]); 

    $email1 = $email[0];

    /* if ( ! isset($email[1])) {
        $email[1] = null;
     } */
    $email2 = $email[1];

    mysqli_close($con);
?>

    <!-- 서브 내비게이션 -->
    <div id="sub-nav">
      <ul>
        <li class="main-icon">
          <a href="./index.html"><i class="fa-solid fa-house"></i></a>
        </li>
        <li><a href="#">마이페이지</a></li>
        <li><a href="#">회원정보수정</a></li>
      </ul>
    </div>

    <!-- 컨텐츠 영역 -->
    <section id="section-member">
    <h2>회원정보수정</h2>
    
        <div id="main_content">
            <div id="join_box">
                <form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
                    
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
							<?=$userid?> 
				        </div>        
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass" value="<?=$pass?>">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm" value="<?=$pass?>">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name" value="<?=$name?>">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2" value="<?=$email2?>">
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="bottom_line"></div>
                    <div class="buttons">
                    <div id="reset_button" onclick="reset_form()" style='cursor:pointer;'>취소하기</div>
                    &nbsp;
                        <div onclick="check_input()" style='cursor:pointer;'>저장하기</div>
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
