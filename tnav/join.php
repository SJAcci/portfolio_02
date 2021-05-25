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
        <script src="../js/member.js"></script>
        <script src="http://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    </head>
    <body>
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
            <h3>회원가입</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="join.php">회원가입</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div class="joinBox">
                <form name="join_form" id="joinForm" method="post" action="insert.php">
                    <div>
                        <label for="name">· 이름</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div>
                        <label for="id">· 아이디</label>
                        <input type="text" placeholder="아이디 입력" id="id" name="id">
                        <button type="button" id="checkId">중복확인</button>
                    </div>
                    <div>
                        <label for="pw">· 비밀번호</label>
                        <input type="password" placeholder="비밀번호 입력" id="pw" name="pw" maxlength="20">
                        <label for="pwChk" class="away">비밀번호재확인 입력상자</label>
                        <input type="password" placeholder="비밀번호 재확인" id="pwChk" name="pwChk" maxlength="20">
                        <span class="red">* 비밀번호가 같지 않습니다.</span>
                        <p>※ 공백없이 영문(소), 숫자 6~20자 사용가능</p>
                    </div>
                    <div class="birthWrap">
                        <span id="birth">· 생년월일</span>
                        <select name="birth01" id="birth01" class="box02" ></select>
                        <label for="birth01">년</label>
                        <select name="birth02" id="birth02" class="box02" ></select>
                        <label for="birth02">월</label>
                        <select name="birth03" id="birth03" class="box02" ></select>
                        <label for="birth03">일</label>
                    </div>
                    <div>
                        <label for="tel">· 휴대전화</label>
                        <input type="text" placeholder="-없이 숫자만 입력" id="tel" name="tel" maxlength="11">
                    </div>
                    <div>
                        <label for="address">· 주소</label>
                        <input type="text" id="post" name="post">
                        <button type="button" id="addressBtn" onclick="sample2_execDaumPostcode()">우편번호찾기</button>
                        <label for="address01" class="away">우편번호 입력상자</label>
                        <input type="text" id="address01" placeholder="우편번호" name="address01">
                        <label for="address02" class="away">나머지주소 입력상자</label>
                        <input type="text" id="address02" placeholder="상세주소" name="address02">
                    </div>
                    <fieldset class="allChk">
                        <input type="checkbox" id="allChk" name="allChk">
                        <label for="allChk">모두 동의하기</label>
                    </fieldset>
                    <fieldset class="checkBox">
                        <input type="checkbox" id="agreeChk01" name="agreeChk01">
                        <label for="agreeChk01"><a href="#">고유식별정보처리에 동의합니다</a></label>
                        <input type="checkbox" id="agreeChk02" name="agreeChk02">
                        <label for="agreeChk02"><a href="#">이용약관에 동의합니다</a></label>
                        <input type="checkbox" id="agreeChk03" name="agreeChk03">
                        <label for="agreeChk03"><a href="#">개인정보수집에 동의합니다</a></label>
                    </fieldset>
                    
                    <div id="layer">
                        <img src="http://t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" onclick="closeDaumPostcode()" alt="닫기 버튼">
                    </div>
                    <script src="../js/post.js"></script>
                </form>
                <button type="submit" id="submit" class="confirm_btn">회원가입</button>
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