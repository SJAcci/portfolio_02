<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>피자 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/pizza.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/pizza.js"></script>
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
        <div id="mainImg" class="subMainBg01"></div>
        <div id="subTitle">
            <h3>피자</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="pizza.php">MENU</a></li>
                <li><a href="pizza.php">피자</a></li>
            </ul>
        </div>
        <div id="subContents" class="pizzaBox">
           <ul class="btn">
                <li><a href="#tab01">전체</a></li>
                <li><a href="#tab02">퐁듀</a></li>
                <li><a href="#tab03">프리미엄</a></li>
                <li><a href="#tab04">스페셜</a></li>
                <li class="last"><a href="#tab05">클래식</a></li>
            </ul>
            <div class="conWrap">
                <div class="all">
                    <ul class="list"></ul>
                </div>
                <div class="fondue"></div>
                <div class="premium"></div>
                <div class="special"></div>
                <div class="classic"></div>
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