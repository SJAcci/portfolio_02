<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>이벤트 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/event.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
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
                <? include "../lib/gnb.php"; ?>
            </div>
        </header>
        <div id="mainImg" class="subMainBg03"></div>
        <div id="subTitle">
            <h3>이벤트</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="coupon.php">COUPON&amp;EVENT</a></li>
                <li><a href="event.php">이벤트</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div class="tabBox">
                <ul class="btn">
                    <li><a href="#">진행중인 이벤트</a></li>
                    <li><a href="#">종료된 이벤트</a></li>
                </ul>
                <div class="conWrap">
                    <div class="onGoing">
                        <ul>
                            <li><a href="#"><img src="../images/couponandevent/event_img01.png" alt="이벤트, 신새개2 피자먹고 연극보러가자"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img02.png" alt="이벤트, 더블찬스 빅 페스티벌"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img03.png" alt="이벤트, 모바일앱속에 반값있다"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img04.png" alt="이벤트, 하니퐁듀 빠에야 출시"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img05.png" alt="이벤트, 배달의 민족 3천원 할인"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img06.png" alt="이벤트, 인기 사이드 메뉴 50%할인"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img07.png" alt="이벤트, 추석에 피자땅 마~식혜드세요"></a></li>
                            <li><a href="#"><img src="../images/couponandevent/event_img08.png" alt="이벤트, 위메프 신제품 2종 최대 20%할인"></a></li>
                        </ul>
                    </div>
                    <div class="done">종료된 이벤트가 없습니다.</div>
                </div>
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