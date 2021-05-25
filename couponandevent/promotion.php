<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>할인안내 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/promotion.css">
        
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
            <h3>할인안내</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="coupon.php">COUPON&amp;EVENT</a></li>
                <li><a href="promotion.php">할인안내</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div id="membership">
                <h3>멤버쉽제휴</h3>
                <ul class="list">
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img01.png" alt="T membership 혜택">
                            <p>
                                SK Telecom<br> 
                                <span>Silver/Gold 20% · VIP 30%</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>1일 1회 20만원 한도
                                </li>
                                <li>타 쿠폰, 제휴카드, 세트메뉴, 프로모션 중복적용 불가</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img02.png" alt="KT membership 혜택">
                            <p>
                                KT<br> 
                                <span>일반15%, VIP 20% 포인트 차감</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <p></p>
                            <ul class="detail">
                                <li>전체금액 포인트 차감(일반 15% / VIP 20%)
                                </li>
                                <li>세트메뉴 및 여타할인과 중복적용 불가(단, 반값 사이드디시 제외)</li>
                                <li>포인트 부족 시 멤버십 포인트차감 불가일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                                <li>타 제휴카드, 쿠폰, 세트메뉴, 할인 프로모션 제품과 중복적용 불가</li>
                                <li>결제금액 기준 20만원 한도 포인트 차감 할인</li>
                                <li>1일 1회 사용 가능</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                       <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img03.png" alt="LG U+ membership 혜택">
                            <p>
                                LG U+<br> 
                                <span>일반/알뜰폰 15% · VIP 20%</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>타 쿠폰 및 제휴카드, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>세트메뉴에는 유플러스 멤버십 할인이 적용되지 않음</li>
                                <li>할인 전 총 주문 금액 기준 20만원 한도 할인 (*일반/알뜰폰 최대 3만원, VIP 최대 4만원까지 할인)</li>
                                <li>1일 1회 사용 가능</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img04.png" alt="Ok Cashbag 혜택">
                            <p>
                                OK Cashbag<br> 
                                <span>OK 캐쉬백 40% 할인<br>(25% OK캐쉬백 포인트 차감)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>OK캐쉬백’ 로고가 부착된 카드는 사용 가능</li>
                                <li>1일 1회 사용 가능</li>
                                <li>오프라인 매장 40% 할인 시 OK캐쉬백 포인트 25% 차감 (* 온라인 주문 시 이벤트에 따라 상이하므로 OK캐쉬백 이벤트페이지 참고)</li>
                                <li>OK캐쉬백 가용포인트 부족시, 포인트 차감을 받을 수 없음</li>
                                <li>타 쿠폰 및 제휴카드, 세트메뉴, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>일부매장(리조트 및 휴게소매장) 이용불가</li>
                            </ul>
                        </div> 
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img05.png" alt="기아멤버스 혜택">
                            <p>
                                기아멤버스<br> 
                                <span>15% 적립 / 30% 할인 (15%포인트 차감)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>전화 및 온라인(홈페이지,모바일 웹,앱) 주문 모두 적용 가능</li>
                                <li>전체 구매 금액의 30%할인 (15%포인트차감+15%할인) 또는 15% 기아멤버스 포인트 적립</li>
                                <li>포인트 부족시 멤버십 포인트 차감/적립 불가</li>
                                <li>1일 1회 사용 가능</li>
                                <li>타 쿠폰, 제휴카드, 세트메뉴, 프로모션 중복적용 불가</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_membership_img06.png" alt="오포인트 혜택">
                            <p>
                                오포인트<br> 
                                <span>30% 포인트 차감 / +1% 결제금액<br>
                                적립 / 1% 결제금액 적립</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>인터넷 주문 시에만 포인트 차감/적립 적용</li>
                                <li>전체 구매금액의 30% 포인트 차감 + 결제금액의 1% 적립 또는 전체 구매금액의 1% 적립</li>
                                <li>타 쿠폰, 제휴카드, 세트메뉴, 프로모션 중복적용 불가</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="creditCard">
                <h3>신용카드 제휴</h3>
                <ul class="list">
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img01.png" alt="KB 국민카드 혜택">
                            <p>
                                KB 국민카드<br> 
                                <span>20% 현장 할인(오프라인)<br>
                                25% 세트 할인(온라인)<br>
                                20% 세트 할인(오프라인)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>20% 현장 할인(오프라인 주문만 가능)</li>
                                <li>피자 주문 시, 전체 금액의 20% 할인</li>
                                <li>1일 1회 사용금액 15만원 초과 시 3만원까지 할인 가능 (월 1회 사용 가능)</li>
                                <li>타 쿠폰 및 제휴카드, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>세트메뉴에는 할인 및 적립이 적용되지 않음 (단, 세트 메뉴 외 추가 피자 주문 시 피자 단품에 한해 적용가능)</li>
                                <li>온라인 주문불가</li>
                                <li>KB체크카드, 비씨카드, 법인카드 제외</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img02.png" alt="BC 카드 TOP 포인트 혜택">
                            <p>
                                비씨카드 TOP 포인트<br> 
                                <span>선결제 시 결제금액의 100%<br>
                                포인트 차감 청구 결제</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>결제 시 결제 금액의 100%포인트 차감 결제</li>
                                <li>1일 1회 사용 가능</li>
                                <li>할인 금액만큼 BC TOP 포인트 차감</li>
                                <li>결제금액의 0.6%가 TOP 포인트로 적립</li>
                                <li>타 쿠폰 및 프로모션 할인과 중복 적용 (단, 타 신용카드 제휴와는 중복적용 불가)</li>
                                <li>세트메뉴를 포함한 모든 메뉴에 적용</li>
                                <li>기업법인, 개인법인, 기프트카드를 제외한 BC카드만 가능</li>
                                <li>홈페이지 주문시에만 가능(매장, 전화, 모바일 주문에는 적용 불가)</li>
                                <li>BC TOP 포인트 결제를 원하지 않을 경우에는 선결제가 아닌, 매장방문 또는 방문 시 결제 선택</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img03.png" alt="현대카드 혜택">
                            <p>
                                현대카드<br> 
                                <span>온/오프라인 50% 포인트 차감 결제</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>피자 오프라인 주문 시 전체 금액의 50% 포인트 차감 결제</li>
                                <li>피자 온라인 주문 시 전체 금액의 50% 포인트 차감 결제</li>
                                <li>잔여포인트 부족시, ‘포인트 결제’서비스 이용불가</li>
                                <li>현대카드 S,W로 결제시, 포인트 차감된 결제금액의 1%추가 포인트 적립(M카드 적립제외)</li>
                                <li>타 쿠폰 및 제휴카드, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                                <li>현대카드 중 zero(할인형)과 X카드는 이용 불가</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img04.jpg" alt="삼성카드 포인트 사용 서비스 헤택">
                            <p>
                                삼성카드 포인트 사용 서비스<br> 
                                <span>전체 금액의 100%<br>
                                100% 포인트 차감 결제 (오프라인만)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>오프라인 : 피자 주문 시 전체 금액의 100%포인트 차감 결제</li>
                                <li>전화, 매장방문, 신용카드 후 결제 주문 시 가능(온라인 선결제 불가)</li>
                                <li>잔여포인트 부족시, ‘포인트 결제’서비스 이용불가</li>
                                <li>타 쿠폰 및 제휴카드, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 '이용불가 매장 안내' 참조)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img05.png" alt="하나카드 Touch1/하나 sk패밀리카드 헤택">
                            <p>
                                하나카드 Touch1/하나 sk패밀리카드<br> 
                                <span>T멤버십 할인 +<br>
                                Touch1/하나SK패밀리카드 할인<br>
                                (최대 50%까지 할인)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>T멤버십 할인 + Touch1(하나 SK패밀리카드) 추가 혜택 시 실버/골드 35%, VIP 최대 50% 할인</li>
                                <li>Touch1 제휴는 전 월 신판 20만원(주유/마트/학원 매출 제외) 실적 있을 시 가능</li>
                                <li>하나 SK패밀리카드 제휴는 전월 신판 20만원(주유/마트 매출 제외)실적 있을시 가능</li>
                                <li>외식제휴(도미노피자 포함) 최대 차감금액 월 3만원 초과 시 Touch1 추가적용 불가</li>
                                <li>타 쿠폰, 제휴카드, 세트메뉴, 프로모션 등 여타할인 중복적용 불가</li>
                                <li>단, 하나 SK패밀리카드 중 항공사 마일리지카드는 서비스 제외</li>
                                <li>하나sk터치원/패밀리 카드의 경우 결합된 SKT 멤버십 카드는 1일 1회 할인 적용</li>
                                <li>카드신청 및 문의 080-890-0021</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img06.png" alt="NH농협카드 혜택">
                            <p>
                                NH농협카드<br> 
                                <span>피자 홈페이지 주문 시 총 금액 30% 할인</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>1일 1회 20만원 한도
                                </li>
                                <li>타 쿠폰, 제휴카드, 세트메뉴, 프로모션 중복적용 불가</li>
                                <li>일부 점포 제외(자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="../images/couponandevent/promotion_creditcard_img07.png" alt="신한카드 헤택">
                            <p>
                                신한카드<br> 
                                <span>하이포인트 계열카드 소지 시<br>
                                30% 포인트 차감 적용<br>
                                (온라인 선결제 불가)</span>
                            </p>
                        </div>
                        <div class="detailBox">
                            <img src="../images/couponandevent/promotion_triangle.png" alt="할인정보 아이콘">
                            <ul class="detail">
                                <li>피자 주문 시 전체 금액의 30% 포인트 차감 결제</li>
                                <li>전화, 매장방문, 신용카드 후 결제 주문 시 가능(온라인 선결제 불가)</li>
                                <li>결제금액 30% 포인트 차감결제(포인트 부족 시 적용 불가)</li>
                                <li>포인트 부족 시 차감 미적용 금액으로 결제되니 주문 전 잔여포인트 확인 필수</li>
                                <li>타 쿠폰 및 제휴카드, 프로모션 할인과 중복 적용되지 않음</li>
                                <li>일부 점포 제외 (자세한 내용은 페이지 하단 ‘이용불가 매장 안내’ 참조)</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="promotionGuide">
                <h3>상시할인</h3>
                <ul>
                    <li>
                        <h4>혜택 1</h4>
                        <p>온라인 회원대상 할인 혜택<br>
                        가입 시 E-mail과 SMS 수신동의 또는 기존정보 업데이트 시, 방문포장 40% 할인쿠폰 제공(분기(6개월) 1회에 한함)</p>
                    </li>
                    <li>
                        <h4>혜택 2</h4>
                        <p>방문포장 주문 시 피자금액의 최대 30% 할인 (매장 차등 적용)</p>
                        <table>
                            <caption>상시할인 가격안내표</caption>
                            <tr>
                                <th rowspan="2">제품명</th>
                                <th rowspan="2">정상가</th>
                                <th colspan="2" >방문포장할인가</th>
                            </tr>
                            <tr>
                                <td class="greenBg">30% 할인</td>
                                <td class="greenBg">20% 할인</td>
                            </tr>
                            <tr>
                                <td>치즈피자(M)</td>
                                <td>15,000</td>
                                <td>10.500</td>
                                <td>12,000</td>
                            </tr>
                            <tr>
                                <td>포테이토(M) 2판</td>
                                <td>38,000</td>
                                <td>26,600</td>
                                <td>30,400</td>
                            </tr>
                            <tr>
                                <td>블랙타이거<br>슈림프(L)</td>
                                <td>34,900</td>
                                <td>24,430</td>
                                <td>27,920</td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <h4>혜택 3</h4>
                        <p>세트(피자+사이드디시+음료) 주문 시 20% 할인</p>
                    </li>
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