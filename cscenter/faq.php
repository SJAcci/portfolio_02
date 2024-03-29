<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>자주하는 질문 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/faq.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/faq.js"></script>
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
        <div id="mainImg" class="subMainBg04"></div>
        <div id="subTitle">
            <h3>자주하는질문</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="cscenter.php">CSCENTER</a></li>
                <li><a href="faq.php">자주하는 질문</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div class="tabBox">
                <ul class="btn">
                    <li><a href="#tab01">피자주문하기</a></li>
                    <li><a href="#tab02">주문확인</a></li>
                    <li><a href="#tab03">포장확인</a></li>
                    <li><a href="#tab04">피자상품권</a></li>
                    <li><a href="#tab05">홈페이지관련</a></li>
                </ul>
                <div class="conWrap">
                    <div class="orderPizza">
                        <ul class="list">
                            <li>
                                <p class="question">예약주문만 가능한 경우는 왜 그런가요?</p>
                                <p class="answer">배달사원부족, 주문폭주 등으로 부득이 하게 예약주문만 가능한 경우가 있습니다.<br> 이 경우 매장이나 콜센터(1577-3082)로 전화하셔도 예약주문만 가능하기 때문에 고객님의 많은 양해 부탁 드립니다. 또한, 매장 오픈시간 전이나, 영업 종료 후에는 예약 주문만 가능합니다.
                                </p>
                            </li>
                            <li>
                                <p class="question">매장상태에 따른 주문 불가는 무엇인가요?</p>
                                <p class="answer">"주문불가" 인 경우 현재 매장이 불가피한 사정으로 인해 온라인주문이 불가능한 상황입니다. 가령 식자재부족이나 리뉴얼, 임시휴무 등으로 당일 온라인주문을 받을 수 없는 경우 입니다.<br> 이런 경우 온라인주문은 불가능하고, 매장이나 콜센터(1577-3082)로 전화하시면 매장상태를 다시 한번 확인한 후 방문포장의 경우 다른 매장으로 변경 가능합니다. (배달주문은 매장을 변경할 수 없습니다.)</p>
                            </li>
                            <li>
                                <p class="question">피자를 다량으로 주문하고 싶습니다.</p>
                                <p class="answer">온라인 주문으로는 한 주문 당 피자 9판까지 주문이 가능합니다.<br> 그 이상의 주문을 원하시는 고객께서는 매장이나 콜센터(1577-3082)를 이용하여 주시기 바랍니다.</p>
                            </li>
                            <li>
                                <p class="question">주문한 메뉴를 변경하거나 취소하려면 어떻게 해야 하나요?</p>
                                <p class="answer">주문 접수 후 바로 피자 메이킹이 이루어져 주문 변경이나 취소가 어렵습니다.<br>주문변경이나 취소는 반드시 해당 매장으로 전화하셔야 가능하며, 해당매장 전화번호는 주문완료 후 주문내역조회로 들어가시면 확인할 수 있습니다.<br><br> 매장에 전화하셔서 반드시 주문내역조회에 나와있는 주문아이디를 말씀해 주셔야 신속한 처리가 이루어집니다. 메뉴를 변경해야 할 경우 해당매장에 전화하여 기존 주문을 취소하고 주문을 다시 해주셔야 합니다.<br> 주문이 취소되면 기존 결제정보도 취소되며 재주문을 하실 경우 결제도 다시 하셔야 합니다.</p>
                            </li>
                            <li>
                                <p class="question">홈페이지 주문으로 피자는 몇판까지 주문할 수 있나요?</p>
                                <p class="answer">따뜻한 피자를 배달해 드리기 위해 홈페이지 온라인 주문 으로는 최대 9판까지 주문이 가능합니다.<br>주문완료 후 해당매장에서 고객님께 연락을 드려 배달가능시간을 알려드립니다.</p>
                            </li>
                            <li>
                                <p class="question">온라인 주문서비스를 이용하면 어떤 혜택이 있나요?</p>
                                <p class="answer">온라인 할인(사이트 : 피자 10% 할인 / 모바일 웹,앱 : 피자 15% 할인), 통신사 멤버쉽 할인, 신용카드 제휴할인, 스마트폰 할인, 희망나눔세트 할인, 방문포장 할인, 화끈한 화요일 등 스페셜 할인 등 다양한 할인혜택을 받을 수 있습니다. <br> 두가지 할인을 중복으로 받을 수 없으며, 희망나눔세트메뉴 주문 시 추가할인이 적용되지 않습니다.<br>신용카드 제휴할인 선택 시에는 반드시 해당 신용카드로 결제하셔야 해당 할인혜택을 받으실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">음료만 주문도 가능한가요?</p>
                                <p class="answer">음료는 피자나 사이드디쉬와 함께 주문 시 피자땅의 메뉴를 좀 더 맛있게 드실 수 있도록 제공하는 메뉴로,<br>음료만 주문 시에는 배달이 불가합니다.</p>
                            </li>
                            <li>
                                <p class="question">전 매장 가격은 동일한가요?</p>
                                <p class="answer">리조트점(휘닉스파크, 알펜시아, 대명비발디파크)은 온라인 주문이 불가하며 일반 매장과 판매가격에 차이가 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">쇼핑몰 쿠폰으로 주문 완료 후, 주문 변경이나 취소를 하면 바로 재사용이 가능한가요?</p>
                                <p class="answer">쇼핑몰 쿠폰으로 주문 완료 후, 주문 변경이나 취소를 할 경우 1시간 후 부터 재사용이 가능합니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chkOrder">
                        <ul class="list">
                            <li>
                                <p class="question">신용카드/휴대폰 승인 및 취소 현황은 어떻게 확인하나요?</p>
                                <p class="answer">신용카드/휴대폰 승인 및 취소 현황은 피자 주문 시 사용하신 신용카드사 또는 통신사 홈페이지를 통해서 확인하실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">신용카드 결제내역 영수증을 출력하고 싶은데요?</p>
                                <p class="answer">주문을 완료하신 후에 [My Page &#8226; 주문/배송조회]로 이동합니다.<br>
                                주문 번호를 클릭하신 후 주문 상세 페이지의 영수증 출력을 클릭하시면 해당 주문의 영수증을 출력할 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">주문한 내역은 어디에서 확인할 수 있나요?</p>
                                <p class="answer">주문한 내역은 [My Page &#8226; 주문/배송조회]를 통해 확인하실 수 있으며<br>
                                [배달주문/포장주문 , 피자선물 , 피자상품권] 등으로 구매내역을 확인하실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">주문/배송조회 란? </p>
                                <p class="answer">주문이 완료된 후 매장에서 [주문 접수 , 피자 메이킹 , 배달 단계]를 보여 드립니다.<br>
                                [..ing]는 매장에서 주문을 받아서 피자를 만들고 있는 상태입니다.<br>"배달완료"는 피자 수령이 완료된 상태입니다.<br>
                                [취소완료]는 매장을 통해 주문을 취소하신 상태입니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chkPacking">
                        <ul class="list">
                            <li>
                                <p class="question">주문한 내역을 다시 확인하고 싶은데 어디에서 확인할 수 있나요?</p>
                                <p class="answer">주문하신 내역은 피자땅 온라인 하단의 [My Page &#8226; 주문/배송 조회 &#8226; 방문포장내역]을 통하여 포장주문 상세내역 및 주문상태를 확인하실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">방문포장 주문 이용 시간은 어떻게 되나요?</p>
                                <p class="answer">피자 수령은 11:15 ~ 22:30까지(매장 별 다름) 가능합니다.<br>포장 예약 시, 도착 예정시간의 날짜와 시간 모두를 확인하여 주십시오.<br>
                                11:00~21:59까지는 당일 및 익일의 포장예약주문이 가능합니다.<br>
                                22:00~23:59까지는 익일의 포장예약주문이 가능합니다.<br>
                                00:00~11:29까지는 당일 및 익일의 포장예약주문이 가능합니다.</p>
                            </li>
                            <li>
                                <p class="question">온라인 방문포장 주문을 이용할 때 유의사항은 무엇인가요?</p>
                                <p class="answer">① 15분 후 수령, 당일 예약, 익일 예약 방문포장 주문을 받습니다.<br>
                                ② 결제 완료 후 메뉴 변경 및 취소는 불가능합니다.<br>
                                ③ 메뉴를 변경하실 경우 주문을 취소하고 다시 주문을 하셔야 합니다.<br>
                                ④ 주문취소는 주문하신 매장으로 직접 연락 하셔야 합니다.(온라인 취소 불가)<br>
                                ⑤ 주문이 취소되면 신용카드/휴대폰의 승인도 자동으로 취소 됩니다<br>
                                ⑥ 승인취소여부는 취소 다음날 이용하신 해당 카드사 및 통신사 홈페이지를 통해서 확인하실 수 있습니다.<br>
                                ⑦ 수령하실 매장 선택 시 반드시 매장 위치를 확인하시기 바랍니다.<br>
                                ⑧ 수령자 정보(이름/휴대폰)를 정확하게 입력해 주시기 바랍니다.</p>
                            </li>
                            <li>
                                <p class="question">배달주문/포장주문의 차이점은 무엇인가요?</p>
                                <p class="answer">
                                    배달주문은 집, 회사 등 고객이 선택한 주소로 피자가 배달되는 것이며, 매장은 배달장소에 따라 자동적으로 선택됩니다.<br>
                                    포장주문은 고객이 직접 매장에서 피자를 수령하며, 고객이 매장의 위치를 확인 후 원하는 매장으로 주문이 가능합니다.<br>
                                    또한, 방문포장 주문을 이용하실 경우, 각 매장 별 방문포장 할인율을 적용 받으실 수 있습니다.(각 매장 별 방문포장 할인률은 다름)
                                </p>
                            </li>
                            <li>
                                <p class="question">방문포장 할인율은 어디서 확인할 수 있나요?</p>
                                <p class="answer">매장 선택 시 할인정보에서 방문포장 할인율 확인이 가능합니다.<br>
                                피자땅 온라인 상단의 [매장찾기]에서도 매장을 검색하시면 매장 별 포장할인율을 확인하실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">매장 방문포장 할인율이 달라졌어요. 왜 그런가요?</p>
                                <p class="answer">포장할인은 각 매장 별 자율적으로 시행하고 있어, 수시로 변동될 수 있습니다.<br>
                                주문하실 때 해당 매장의 방문포장 할인율을 확인해 주시기 바랍니다.</p>
                            </li>
                            <li>
                                <p class="question">다른 사람이 피자를 수령할 수 있나요?</p>
                                <p class="answer">주문하는 분과 피자를 수령하실 분이 다르신 경우, 수령자 정보를 정확히 입력해 주시기 바랍니다.<br>
                                전화번호의 경우, 휴대폰 번호 입력이 가능하며, 정보의 오기재로 인해 피자를 수령하지 못하였을 경우 환불은 불가능합니다.<br>
                                [포장내역출력하기] 에서 포장내역을 출력해가시면 빠른 확인 및 피자 수령에 도움이 됩니다</p>
                            </li>
                            <li>
                                <p class="question">주문한 내역을 확인하고 싶은데 어디에서 확인할 수 있나요?</p>
                                <p class="answer">주문하신 내역은 피자땅 홈페이지 상단의 [My Page &#8226; 주문/배송 조회 &#8226; 포장주문내역] 을 통하여 포장주문 상세내역 및 주문상태를 확인하실 수 있습니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="couponPizza">
                        <ul class="list">
                            <li>
                                <p class="question">문의사항 및 불만사항이 있는데요?</p>
                                <p class="answer">피자상품권과 관련하여 문의사항 및 불만사항이 있으시면 000-000-0000으로 문의 바랍니다. ※ 운영시간 : 10:00 ~ 17:00</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">피자상품권의 유효기간은 얼마나 되나요?</p>
                                <p class="answer">상품권 유효기간은 5년 입니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">피자상품권은 어떻게 사용하나요?</p>
                                <p class="answer">구매하신 피자상품권은 피자땅 전국 매장에서 사용이 가능합니다.<br>
                                매장이나 콜센터(1577-0000)로 전화하실 경우,<br>
                                주문 전에 피자상품권의 사용여부 및 종류를 미리 말씀해주시면, 피자상품권에 명시된 피자 또는 동일 가격 피자에 대해서 주문할 수 있습니다.<br><br>
                                단, 명시된 피자보다 가격이 높은 피자를 주문할 경우 추가 금액을 지불하셔야 하며, 명시된 피자보다 가격이 낮은 피자를 주문할 경우에는 잔여금액에 대하여 환급은 받을 수 없습니다.<br>
                                상품권은 세트메뉴 주문 시 사용 불가하며 방문포장 할인 및 쿠폰 할인 등 다른 할인쿠폰과 중복하여 사용할 수 없습니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">온라인에서 피자상품권 구매는 어떻게 하나요?</p>
                                <p class="answer">온라인 메인화면에서 [상품권 선물하기] 메뉴로 들어가시면 구매하실 수 있습니다.<br>
                                홈페이지로 구매하실 경우 신용카드로만 주문하실 수 있으며, 단일 상품 10매 이상의 대량주문 및 기타 사항에 대해서는 상품권 판매 담당부서인 02-000-0000, 000-000-0000으로 문의 바랍니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">구매 후에 취소는 어떻게 하나요?</p>
                                <p class="answer">구매후 배송 전 일 경우에는 취소가 가능하나 등기발송 후에는 취소가 불가능합니다.<br>
                                취소관련 문의는 000-00-0000, 02-000-0000번으로 연락 부탁드리며, 구매취소 후 결제취소에는 최대 3일정도 시간이 소요됩니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">구매한 피자상품권의 내역을 확인할 수 있나요?</p>
                                <p class="answer">구매하신 피자상품권의 내역은 [MY PAGE &#8226; 상품권 배송현황]을 통해 확인하실 수 있습니다</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">배송료는 얼마나 부가되나요?</p>
                                <p class="answer">별도의 배송료는 부가되지 않습니다.<br>단, 빠른 등기 배송이므로 주문자의 부재로 인해 반송되는 경우 반송비 또는 재배송비를 지불하셔야 합니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">일요일에도 배송이 되나요?</p>
                                <p class="answer">토요일, 일요일, 공휴일에는 배송하지 않습니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">구매 후 배송에는 어느정도 시간이 소요되나요?</p>
                                <p class="answer">피자 상품권 구매 후, 2일~3일의 배송시간이 소요됩니다.<br>
                                배송은 빠른 등기로 발송되며, 배송에는 1~2일 정도의 시간이 소요됩니다.<br>
                                단, 우체국사정(크리스마스,명절 등 우편량 폭주)으로 인해 늦어질 수 있습니다.<br>
                                또한, 빠른 등기로 배송되므로 배송지에 본인 또는 수령인이 반드시 있어야 합니다.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li>
                                <p class="question">친구에게 피자상품권을 선물하고 싶은데요?</p>
                                <p class="answer">피자상품권을 타인에게 선물하실 경우 배송지 정보를 정확하게 입력하시고, 추가 요청사항에 100자 이내로 메시지를 남겨주시면 고객님의 말씀을 전달해 드리겠습니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="aboutHomepage">
                        <ul class="list">
                            <li>
                                <p class="question">휴면계정으로 처리됬는데 어떻게 해야 하나요?</p>
                                <p class="answer">'정보통신망 이용촉진 및 정보보호 등에 관한 제 29조 2항(2015년 8월 18일 시행)에 의거'하여 1년 이상 피자땅 서비스를 이용하지 않은 회원님들의 개인정보는 파기 또는 분리 저장,관리됩니다.<br>
                                지속적인 서비스 이용 및 혜택 안내를 원하실 경우,<br>
                                피자땅 온라인(홈페이지/모바일/앱)에 1회 이상 로그인을 통해 서비스 이용에 불편함이 없으시길 바랍니다.<br>
                                휴면계정 해제를 원하실 경우, 본인인증 후 휴면계정 해제 신청을 하시면 기존 계정으로 서비스 이용 가능합니다.</p>
                            </li>
                            <li>
                                <p class="question">뉴스레터로 받은 쿠폰 출력 시 인증번호와 유효기간만 출력됩니다.</p>
                                <p class="answer">뉴스레터를 통해 발송하는 모든 쿠폰은 인증번호와 유효기간이 부여되어 제공됩니다.<br>
                                받으시는 쿠폰 출력 시 인증번호와 유효기간만 출력되는 경우가 있습니다.<br>
                                이러한 현상이 발생할 시 [도구 &#8226; 인터넷 옵션 &#8226; 고급 &#8226; 인쇄]에서 배경 및 이미지 인쇄 항목을 클릭하시면 쿠폰 이미지와 함께 정상적으로 출력하실 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">탈퇴하는 방법을 알려주세요.</p>
                                <p class="answer">탈퇴는 [나의정보 &#8226; 설정변경 &#8226; 회원탈퇴] 절차를 거쳐 진행합니다.<br>
                                탈퇴 시에는 회원정보 중 아이디를 제외한 개인정보는 모두 삭제됩니다.<br>
                                탈퇴한 회원의 아이디는 다른 회원이 사용하여 생길 수 있는 아이디 도용 문제를 차단하기 위해 재사용할 수 없도록 되어 있으니 양해 부탁드립니다.</p>
                            </li>
                            <li>
                                <p class="question">ID/PW 찾기는 어떻게 할 수 있나요?</p>
                                <p class="answer">아이디 찾기 &amp; 패스워드 재설정은 [휴대폰 본인인증] 확인 후, 인증 완료 시즉각적으로 확인하실 수 있습니다.<br>
                                추가적인 문의사항은 피자땅 고객만족팀(000-000-0000)으로 문의하시기 바랍니다.</p>
                            </li>
                            <li>
                                <p class="question">가입하는데 휴대폰으로 인증번호가 전송되지 않습니다.</p>
                                <p class="answer">1) 휴대폰 번호를 정확히 기재한 경우<br>
                                대부분의 장애는 이동통신사 기지국 처리 장애입니다.<br>
                                통신사 기지국에서 사용자 단말기로 제대로 전송이 되지 못하는 경우가 있습니다.<br>
                                이 경우 홈페이지에 다시 접속하신 후 재인증절차를 거치실 수 있습니다.네트워크 상황에 따라 1~2분 정도 소요될 수 있습니다.<br><br>
                                2) 휴대폰 번호를 정확히 기재하지 못한 경우<br>
                                웹마스터(webmaster@pizzattang.co.kr)에게 가입하신 정보(아이디, 이름, 연락처 등)와 정상적인 휴대폰번호를 보내주시면 확인 후에 처리해드립니다.<br>
                                또는 피자땅 고객만족팀(000-000-0000)으로 전화하시면 신속하게 해결할 수 있습니다.</p>
                            </li>
                            <li>
                                <p class="question">온라인 회원가입은 어떻게 해야하나요?</p>
                                <p class="answer">온라인 회원 가입은 [본인인증], [약관동의], [정보입력], [가입완료] 순으로 이루어 집니다.<br>
                                안전한 인터넷 서비스 이용을 위하여, 실명 여부를 확인하고 있습니다.<br>
                                [휴대폰 본인인증]을 통해 실명인증을 받게 됨으로, 고객님의 주민등록번호 등은 입력, 저장하지 않습니다.<br>
                                [정보 입력] 시 휴대폰으로 전송된 인증번호를 입력하시고 인증처리를 받으시면 피자땅 회원으로 인정받게 됩니다.</p>
                            </li>
                        </ul>
                    </div>
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