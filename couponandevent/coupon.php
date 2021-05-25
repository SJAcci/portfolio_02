<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>쿠폰확인 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/coupon.css">
        
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
            <h3>쿠폰확인</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="coupon.php">COUPON&amp;EVENT</a></li>
                <li><a href="coupon.php">쿠폰확인</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div id="contentsWrap">
                <form>
                    <input type="text" placeholder="쿠폰번호를 입력해주세요">
                    <button><img src="../images/couponandevent/icon_search.png" alt="검색하기"></button>
                </form>
            </div>
            <div id="titleWrap">
                <h5>쿠폰 이용안내</h5>
                <ul>
                    <li>e-쿠폰은 온라인 주문 시 사용할 수 있습니다(온라인 회원, 비회원 모두 사용 가능)</li>
                    <li>e-쿠폰 이용 시 해당 메뉴 외 메뉴 구성 변경이 불가하며, <span id="green">추가 메뉴를 주문할 수 없습니다.</span></li>
                    <li>e-쿠폰 이용 시 여타 할인 및 프로모션 메뉴(반값 사이드디시)와 함께 이용할 수 없습니다.</li>
                    <li>e-쿠폰은 유효기간 내에만 사용할 수 있습니다.</li>
                    <li>1회 주문 시 e-쿠폰은 4개까지 사용이 가능합니다.</li>
                </ul>
                <h5>단종메뉴 안내</h5>
                <ul>
                    <li>판매 종료된 상품은 도미노피자 본사 및 매장이 아닌 구매처를 통하여 환불해주시기 바랍니다.</li>
                </ul>
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