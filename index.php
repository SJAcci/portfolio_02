<? include "./lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>피자땅</title>
        
        <link rel="shortcut icon" href="images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="images/common/favicon_android.png">
        
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="popUp">
           <div class="pWrap">
               <div class="pTop">
                    <form action="#">
                        <fieldset>
                            <legend>오늘 하루 보지않기 폼</legend>
                            <label for="chk">
                                <input type="checkbox" id="chk">
                                <i class="circle"></i>
                                <span class="text">오늘 하루 보지 않기</span>
                            </label>
                            <a href="#closepop"><img src="images/main/popup_icon_close.png" alt="팝업창 닫기"></a>
                        </fieldset>
                    </form>
                </div>
                <div class="pBottom">
                    <div class="noticePop">
                        <h3>NOTICE</h3>
                        <p>
                            본 사이트는 상업적 목적이 아닌<br>
                            <span>개인 포트폴리오</span> 용도로 만들어 졌습니다. <br> 
                            홈페이지의 일부 내용과 이미지 등은<br> 
                            그 출처가 따로 있음을 밝힙니다. <br>
                            본 사이트는 HTML5와 CSS3를 기준으로 하여 <br>
                            크롬, 사파리, 오페라, 파이어폭스, <br>
                            IE11이상의 브라우저에 맞춘 홈페이지입니다
                        </p>
                    </div>
                    <div class="mobilePop">
                        <h3>MOBILE</h3>
                        <p>
                            아래 QR코드를 스캔해주세요.<br> 
                            피자 모바일 페이지로 이동합니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="hTop">
                <div class="wrap">
                   <h1>
                        <a href="index.php"><img src="images/common/logo.png" alt="피자땅 로고" width="80"></a>
                    </h1>
                    <? include "./lib/tnav.php"; ?>
                </div>
            </div>
            <div class="hBottom">
                <? include "./lib/gnb.php"; ?>
            </div>
        </header>
        <div class="main">
            <div id="mSlider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide01"><a href="couponandevent/event.php"><img src="images/main/mslider_img01.png" alt="끝까지 맛있다, 크러스트"></a></div>
                        <div class="swiper-slide slide02"><a href="couponandevent/event.php"><img src="images/main/mslider_img02.png" alt="피자1+1행사"></a></div>
                        <div class="swiper-slide slide03"><a href="couponandevent/event.php"><img src="images/main/mslider_img03.png" alt="인기메뉴3종, 불금피자, 맵피자, 달피자"></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div id="qNav">
                <div class="wrap">
                    <ul>
                        <li><a href="qnav/order.php">주문하기</a></li>
                        <li><a href="qnav/quickorder.php">퀵오더</a></li>
                    </ul>
                </div>
            </div>
            <div id="menu">
                <h3>MENU</h3>
                <div class="sliderWrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_01.png" alt="퐁듀 불금피자">
                                    <p class="title">퐁듀 불금피자</p>
                                    <p class="detail">담백한 불고기와 아삭한 김치의 환상적 콜라보레이션</p>
                                    <p class="cost">20,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_02.png" alt="퐁듀 갈릭쉬림프">
                                    <p class="title">퐁듀 갈릭쉬림프</p>
                                    <p class="detail">고소한 갈릭과 탱글한 알새우가 진~한 치즈에 퐁~당!</p>
                                    <p class="cost">17,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_03.png" alt="퐁듀 핫치킨">
                                    <p class="title">퐁듀 핫치킨</p>
                                    <p class="detail">매운 치킨과 탱탱한 알새우가 고소~한 치즈에 퐁~당!</p>
                                    <p class="cost">17,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_04.png" alt="퐁듀 핫치킨">
                                    <p class="title">퐁듀 핫치킨</p>
                                    <p class="detail">매운 치킨과 탱탱한 알새우가 고소~한 치즈에 퐁~당!</p>
                                    <p class="cost">17,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_05.png" alt="까망피자">
                                    <p class="title">까망피자</p>
                                    <p class="detail">탱글탱글 알새우와 피자땅만의 블랙페퍼 소스로 새로운 맛을 입다</p>
                                    <p class="cost">19,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_06.png" alt="맵고달고피자">
                                    <p class="title">맵고달고피자(맵달)</p>
                                    <p class="detail">맵단맵단 끊을 수 없는 매력! 맵단피자의 끝판왕이 나타났다!</p>
                                    <p class="cost">19,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_07.png" alt="반반한피자">
                                    <p class="title">반반한피자(핫바비큐 + 씨푸드)</p>
                                    <p class="detail">매콤달콤한 바비큐와 신선한 알새우&amp;생선살의 씨푸드가 한판에</p>
                                    <p class="cost">19,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_08.png" alt="포테이토베이컨">
                                    <p class="title">포테이토베이컨</p>
                                    <p class="detail">담백 고소 포테이토와 정통 베이컨의 풍요로운 맛의 조화</p>
                                    <p class="cost">19,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_09.png" alt="맵피자">
                                    <p class="title">맵피자</p>
                                    <p class="detail">프로방스 전통 야채스튜, 아라비아따 소스와 바비큐치킨의 조화</p>
                                    <p class="cost">15,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_10.png" alt="달피자">
                                    <p class="title">달피자</p>
                                    <p class="detail">다섯 가지 치즈와 달콤한 허니가 사르르~</p>
                                    <p class="cost">15,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_11.png" alt="맥앤치즈피자">
                                    <p class="title">맥&amp;치즈피자</p>
                                    <p class="detail">고소한 맥앤치즈와 달콤한 슈크림무스, 콘체다엣지의 환상 조화! </p>
                                    <p class="cost">17,900원</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="menu/pizza.php">
                                    <img src="images/main/menu_img_12.png" alt="속풀이 해장피자">
                                    <p class="title">속풀이 해장피자</p>
                                    <p class="detail">입안 가득히 얼얼하게 만드는 불닭 소스와 다양한 토핑의 만남 </p>
                                    <p class="cost">17,900원</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div id="store">
                <h3>STORE</h3>                
                <form>
                    <input type="text" placeholder="지역명을 입력해주세요">
                    <button><img src="images/main/store_icon_search.png" alt="검색하기"></button>
                </form>
                <script src="js/search.js"></script>
            </div>
            <div id="coupon" class="transBox">
                <div class="titleWrap">
                    <h3>COUPON</h3>
                    <p>
                        피자땅의 특별한 혜택!<br>
                        사용가능한 프로모션 혜택을<br>
                        지금바로 확인하세요!
                    </p>
                    <a href="couponandevent/coupon.php" title="쿠폰 더보기">
                        <img src="images/main/btn_more.png" alt="더보기버튼">
                    </a>
                </div>
                <div class="sliderWrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="couponandevent/coupon.php">
                                    <figure>
                                        <img src="images/main/coupon_img01.png" alt="요기요 할인쿠폰">
                                        <figcaption>VIEW MORE</figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="couponandevent/coupon.php">
                                    <figure>
                                        <img src="images/main/coupon_img02.png" alt="울트라 콤비네이션 할인쿠폰">
                                        <figcaption>VIEW MORE</figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="couponandevent/coupon.php">
                                    <figure>
                                        <img src="images/main/coupon_img03.png" alt="짬뽕피자 할인쿠폰">
                                        <figcaption>VIEW MORE</figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="couponandevent/coupon.php">
                                    <figure>
                                        <img src="images/main/coupon_img04.png" alt="인기 사이드메뉴 할인쿠폰">
                                        <figcaption>VIEW MORE</figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="couponandevent/coupon.php">
                                    <figure>
                                        <img src="images/main/coupon_img05.png" alt="반반피자 할인쿠폰">
                                        <figcaption>VIEW MORE</figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div id="event">
                <h3>EVENT</h3>
                <div class="wrap">
                    <ul>
                        <li class="odd"><a href="couponandevent/event.php"><img src="images/main/event_img01.png" alt="신세개피자 2 먹고 연극 보러가자"></a></li>
                        <li class="even"><a href="couponandevent/event.php"><img src="images/main/event_img02.png" alt="더블찬스 빅 페스티벌, 퐁듀 불금피자 주문시 경품 응모권 지급"></a></li>
                        <li class="odd"><a href="couponandevent/event.php"><img src="images/main/event_img03.png" alt="모바일 앱속에 반값있다"></a></li>
                        <li class="even"><a href="couponandevent/event.php"><img src="images/main/event_img04.png" alt="허니퐁듀빠에야 출시 이벤트"></a></li>
                    </ul>
                </div>
            </div>
            <div id="board">
                <div>
                    <h3>CSCENTER</h3>
                    <p>
                        고객의 소리를 경청하고 이를 반영하여<br>
                        최상의 서비스를 제공합니다
                    </p>
                    <a href="cscenter/cscenter.php"><img src="images/main/btn_more.png" alt="고객센터바로가기"></a>
                </div>
                <div>
                    <h3>NOTICE</h3>
                    <p>새로워진 피자땅의소식을 만나보세요.</p>
                    <a href="more/notice.php"><img src="images/main/btn_more.png" alt="공지사항바로가기"></a>
                </div>
                <div>
                    <h3>FRANCHISE</h3>
                    <p>
                        가맹점 개설 및 절차를<br> 
                        친절한 상담과 가이드라인으로 안내합니다.
                    </p>
                    <a href="more/franchise.php"><img src="images/main/btn_more.png" alt="프렌차이즈바로가기"></a>
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