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
        <link rel="stylesheet" href="../css/brand.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/brand.js"></script>
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
            <h3>피자땅소개</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="store.php">STORE</a></li>
                <li><a href="brand.php">피자땅소개</a></li>
            </ul>
        </div>
        <div id="subContents">
            <section id="introduction">
                <h4>INTRODUCTION</h4>
                <p>
                    <span>"<br><br>
                    맛도 두배, 양도 두배.<br>
                    피자에땅이 당신과 함께합니다.<br><br>
                    "</span>
                </p>
            </section>
            <section id="brandName">
                <div class="conWrap">
                    <img src="../images/store/brand_brandname_img_lake.png" alt="호수 이미지">
                    <h4></h4>
                    <p>
                        <span>에땅(étang)</span>은 프랑스어로<br>
                        호수,연못을 뜻하는 말입니다.<br><br>
                        피자땅의 이름은 이탈리아에서 프랑스로 이민간<br>
                        세르지오 가문이 틀루스 시에서 피자를 팔았는데<br>
                        사람들이 근처 호숫가에서 먹으면서<br>
                        <span class="roboto">pizza étang</span>이라고 부른 데에서<br>
                        유래하였습니다.
                    </p>
                </div>
            </section>
            <section id="brandIdentity">
                <h4>BRAND IDENTITY</h4>
                <p>
                    <span>
                    로고는 피자땅 대표하는 가장 중요한 아이덴티티 요소이자 공식적인 상징입니다.<br><br>
                    다양한 매체에 사용되어 피자땅의 브랜드 이미지 전달에 중요한 역할을 하는 요소이므로<br>
                    어떤 경우라도 형태가 변형되지 않도록 주의해서 활용해야 합니다. <br>
                    적용 매체와 상황에 적합한 형태와 컬러로 사용합니다.
                    </span>
                </p>
            </section>
            <section id="overview">
                <h5><span class="green">01</span> OVERVIEW</h5>
                <p>
                    <span class="roboto">BRAND NAME</span>의 유래와 <span class="roboto">BRAND IDENTITY</span>를 나타내기 위해<br>
                    호수를 상징하는 반원과 흘러내리는 피자 아이콘을 형상화 하였습니다.
                </p>
                <img src="../images/store/brand_brandidentity_overview_icon.png" alt="호수 아이콘과 피자아이콘">
            </section>
            <section id="color">
                <h5><span class="green">02</span> COLOR</h5>
                <p>
                    녹색은 긍정적이고 친근한 이미지를 가져다 주는 효과가 있습니다. <br> 
                    다른 브랜드들의 상징적인 색과 겹치지 않고 친숙하면서도 세련된 느낌을 주기 위하여 이 색상을 사용하였습니다.
                </p>
                <div class="conWrap">
                    <div class="mainColor">
                        <div id="greenBox01">
                            <p>PANTONE 18-6026 TPG</p>
                            <p>Color Values<br><br></p>
                            <p>
                                RGB 35 110 72<br>
                                HEX/HTML #246B47
                            </p>
                        </div>
                        <div id="greenBox02">80%</div>
                        <div id="greenBox03">60%</div>
                        <div id="greenBox04">40%</div>
                        <div id="greenBox05">20%</div>
                        <div id="greenBox06">10%</div>
                        <div class="blackTitle">MAIN COLOR</div>
                    </div>
                    <div class="subColors">
                        <div class="subColor">
                            <div id="yellowBox"></div>
                            <div class="textBox">
                                <p class="bold">Color Values<br><br></p>
                                <p>
                                    <span class="bold">RGB</span> 255 215 0<br>
                                    <span class="bold">HEX/HTML</span> #FFD700
                                </p>
                            </div>
                            <p class="black">PANTONE <br> Yellow 012 C</p>
                        </div>
                        <div class="subColor">
                            <div id="whiteBox"></div>
                            <div class="textBox">
                                <p class="bold">Color Values<br><br></p>
                                <p>
                                    <span class="bold">RGB</span> 244 249 255<br>
                                    <span class="bold">HEX/HTML</span> #F3F8FD
                                </p>
                            </div>
                            <p class="black">
                                PANTONE<br> 
                                11-0601 TCX<br>
                                Bright White
                            </p>
                        </div>
                        <div class="blackTitle">SUB COLOR</div>
                    </div>
                </div>
            </section>
            <section id="font">
                <h5><span class="green">03</span> FONT</h5>
                <p>
                    깔끔하면서도 친근감 있는 느낌의 한글 서체 <span>NotoSans Kr</span> 과 영문서체 <span class="roboto">Roboto</span> 서체를 기본으로 사용합니다.<br>
                    로고와 함께 텍스트 작성 시 반드시 브랜드 서체를 사용해야 합니다.
                </p>
                <div id="typeface">
                    <div class="blackTitle">KOREAN TYPEFACE</div>
                    <p>
                        NotoSans KR Regular<br>
                        피자땅의 지정서체
                    </p>
                    <div class="blackTitle">ENGLISH TYPEFACE</div>
                    <p class="roboto">
                        ROBOTO Regular 400<br>
                        Pizzattang's Branded Typeface
                    </p>
                </div>
            </section>
            <section id="useage">
                <h5><span class="green">04</span> USEAGE</h5>
                <p>CI/BI 이용사례</p>
                <div id="imgBox">
                    <img src="../images/store/brand_brandidentity_useage01.png" alt="피자박스 위 로고 사진">
                    <img src="../images/store/brand_brandidentity_useage02.png" alt="메뉴판 위 로고 사진">
                </div>
            </section>
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