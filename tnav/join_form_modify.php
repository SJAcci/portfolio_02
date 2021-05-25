<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>회원가입 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/join.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/join.js"></script>
        <script src="http://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    </head>
    <body>
        <?
            //폼에 적용시킬 데이터를 가져올 PHP
            //로그인되어 있는 아이디의 데이터를 가져옴
            //DB연결
            include "../lib/dbconn.php";

            //데이터 조회 - 로그인된 아이디의 데이터만 연관배열로 가져옴
            $sql = "SELECT * FROM member WHERE id='$userid'";
            $result = mysqli_query($connect, $sql);
        
            //해당 레코드의 값을 연관배열로 가져옴
            $row = mysqli_fetch_assoc($result);

            //폼에 적용할 데이터 담는 변수
            $id = $row['id'];
            $name = $row['name'];

            //생년월일 배열로 받기
            $birth = explode("-", $row['birth']); //문자열을 배열로 바꾸는 함수
            $birth01 = $birth[0];
            $birth02 = $birth[1];
            $birth03 = $birth[2];

            //이메일값 배열로 처리
            $email = explode("@", $row['email']);
            $email01 = $email[0];
            $email02 = $email[1];

            //휴대폰 배열로 받기
            $phone = $row['phone'];
            
			//우편번호
			$post = $row['post'];

			//주소 받기
			$address = explode("|", $row['address']);
            $address01 = $address[0];
            $address02 = $address[1];
			
			
            //DB연결 종료
            mysqli_close($connect);
        
        ?>
        <header>
            <div class="hTop">
                <div class="wrap">
                   <h1>
                        <a href="../index.php"><img src="../images/common/logo.png" alt="피자땅 로고" width="80"></a>
                    </h1>
                    <? include "../lib/tnav.php"; ?>
                </div>
            </div>
            <div class="hBottom">
                <? include "../lib/gnb.php" ?>
            </div>
        </header>
        <div id="subTitle">
            <h3>Mypage</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="join.php">Mypage</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div class="joinBox">
                <form name="joinForm" id="joinForm" method="post" action="modify.php">
                    <div>
                        <label for="name">· 이름</label>
                        <input type="text" id="name" name="name" value="<?=$username?>">
                    </div>
                    <div>
                        <label for="id">· 아이디</label>
                        <input type="text" id="id" value="<?=$id?>" disabled>
                    </div>
                    <div>
                        <label for="pw">· 비밀번호</label>
                        <input type="password" placeholder="비밀번호 입력" id="pw" name="pass" maxlength="20">
                        <label for="pwChk" class="away">비밀번호재확인 입력상자</label>
                        <input type="password" placeholder="비밀번호 재확인" id="pwChk" maxlength="20">
                        <span class="red">* 비밀번호가 같지 않습니다.</span>
                        <p>※ 공백없이 영문(소), 숫자 6~20자 사용가능</p>
                    </div>
                    <div class="birthWrap">
                        <span id="birth">· 생년월일</span>
                        <select name="birth01" id="birth01" name="birth01" class="box02"></select>
                        <label for="birth01">년</label>
                        <select name="birth02" id="birth02" name="birth02" class="box02"></select>
                        <label for="birth02">월</label>
                        <select name="birth03" id="birth03" name="birth03" class="box02"></select>
                        <label for="birth03">일</label>
                        <input type="hidden" id="bYear" value="<?=$birth01?>">
						<input type="hidden" id="bMonth" value="<?=$birth02?>">
						<input type="hidden" id="bDate" value="<?=$birth03?>">
						<label for="bYear" class="away">년데이터</label>
						<label for="bMonth" class="away">월데이터</label>
						<label for="bDate" class="away">일데이터</label>
                    </div>
                    <div>
                        <label for="tel">· 휴대전화</label>
                        <input type="text" placeholder="-없이 숫자만 입력" id="tel" name="phone" maxlength="11" value="<?=$phone?>">
                    </div>
                    <div>
                        <label for="address">· 주소</label>
                        <input type="text" id="post" name="post" value="<?=$address01?>">
                        <button type="button" id="addressBtn" onclick="sample2_execDaumPostcode()">우편번호찾기</button>
                        <label for="address01" class="away">우편번호 입력상자</label>
                        <input type="text" id="address01" name="address01" placeholder="우편번호" value="<?=$post?>">
                        <label for="address02" class="away">나머지주소 입력상자</label>
                        <input type="text" id="address02" name="address02" placeholder="상세주소" value="<?=$address02?>">
                    </div>
                    <div id="layer">
                        <img src="http://t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" onclick="closeDaumPostcode()" alt="닫기 버튼">
                    </div>
                    <script src="../js/post.js"></script>
                </form>
                <button type="submit" id="submit_btn">정보수정</button>
            </div>
        </div>
        <footer>
            <div class="fTop">
                <div class="info">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">창업안내</a></li>
                        <li><a href="#">채용</a></li>
                    </ul>
                </div>
                <div class="contact">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">주문전화 000-0000</a></li>
                        <li><a href="#">가맹문의 000-0000</a></li>
                        <li><a href="#">대표번호 02-000-0000</a></li>
                        <li><a href="#">팩스 02-000-0001</a></li>
                    </ul>
                </div>
                <div class="follow">
                    <h4>Follow</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="fBottom">
                <ul class="fNav">
                    <li><a href="#">개인정보처리방침</a></li>
                    <li><a href="#">이메일무단수집거부</a></li>
                    <li><a href="#">이용약관</a></li>
                </ul>
                <div class="family">
                    <button>
                        <span class="text">Family Site</span>
                        <span class="icon">▼</span>
                    </button>
                    <ul>
                        <li><a href="#" target="_blank">오븐에 빠진 닭</a></li>
                        <li><a href="#" target="_blank">투핑거스</a></li>
                    </ul>
                </div>
                <p>Copyright &copy;2020 PIZZATTANG, All Rights Reserved 서울특별시 강남구 학동로  11길 6</p>
            </div>
            <aside class="topBtn">
                <a href="#">
                    ▲<br>
                    TOP
                </a>
            </aside>
        </footer>
    </body>
</html>