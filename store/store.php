<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>주변매장찾기 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/map.css">
        
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
        <div id="mainImg" class="subMainBg02"></div>
        <div id="subTitle">
            <h3>매장찾기</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="store.php">STORE</a></li>
                <li><a href="store.php">매장찾기</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div class="map_wrap">
                <div id="map"></div>
                <div id="menu_wrap" class="bg_white">
                    <div class="option">
                        <div>
                            <form onsubmit="searchPlaces(); return false;">
                                <p>키워드를 검색하세요 :</p>
                                <input type="text" value="피자에땅" id="keyword" size="15"> 
                                <button type="submit"></button> 
                            </form>
                        </div>
                    </div>
                    <hr>
                    <ul id="placesList"></ul>
                    <div id="pagination"></div>
                </div>
            </div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=82d1812b98f001cc95d784cb39a97954&libraries=services"></script>
            <script src="../js/map.js"></script>
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