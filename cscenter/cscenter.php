<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>고객센터 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/cscenter.css">
        
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
        <div id="mainImg" class="subMainBg04"></div>
        <div id="subTitle">
            <h3>고객센터</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="cscenter.php">CSCENTER</a></li>
                <li><a href="cscenter.php">고객센터</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div>
                <p>이용하시면서 느꼈던 불편한 점이나 건의사항, 제품에 대한 의견을 남겨주시면 성심껏 답변해드리겠습니다.<br><br>
                ※주문 취소/변경과 같은 긴급한 요청은 매장으로 연락 부탁드립니다.<br><br>
                고객만족센터 : 00-000-00000</p>
                <h5>개인정보 수집 및 이용동의</h5>
                <div id="privacyRules">
                    개인정보보호정책은 청오디피케이㈜에서 운영하는 피자땅 피자 홈페이지 서비스(이하 피자땅)를 이용하는 고객님의 개인정보 보호를 위하여, 개인정보 수집의 목적과 그 정보의 정책적 ,시스템적 보안에 관한 규정입니다.<br><br>
                    * 개인정보의 수집 및 이용목적<br><br>
                    1. 피자당은 고객님께서 고객센터 서비스를 이용하는데 있어, 원활하게 문의사항의 접수 및 답변이 이루어질 수 있도록 하기 위한 최소한의 정보를 수집합니다.<br>
                    또한, 빠른 처리를 위해 해당 매장 및 고객 만족팀에서 고객님께 연락드릴 수 있습니다.<br><br>
                    2. 제공하신 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않습니다.<br><br>
                    * 수집하는 개인정보의 항목<br><br>
                    이름, 휴대전화, 이메일 : 고지의 전달 또는 원활한 의사소통 경로의 확보.<br><br>
                    * 보유기간 및 이용기간<br><br>
                    귀하의 개인정보는 다음과 같이 개인정보의 수집목적 또는 제공받은 목적이 달성되면 파기됩니다. 단, 상법 등 관련법령의 규정에 의하여 다음과 같이 거래 관련 권리 의무 관계의 확인 등을 이유로 일정기간 보유하여야 할 필요가 있을 경우에는 일정기간 보유합니다.<br><br>
                    - 소비자의 불만 또는 분쟁처리에 관한 기록<br>
                    보존 근거 : 전자상거래 등에서의 소비자보호에 관한 법률보존 기간 : 3년<br><br>
                    * 고객센터 서비스 이용에 필요한 최소한의 개인정보 수집·이용에 동의하지 않을 권리가 있으며, 동의 거부 시 거부한 내용에 대해 서비스가 제한될 수 있습니다.
                </div>
                <div class="privacyChk">
                    <input type="radio" id="agreeYes" name="agree">
                    <label for="agreeYes" class="checkbox"></label>
                    <label for="agreeYes">동의함</label>
                    <input type="radio" id="agreeNo" name="agree" checked>
                    <label class="checkbox" for="agreeNo"></label>
                    <label for="agreeNo">동의하지 않음</label>
                </div>
            </div>
            <div>
                <form name="csForm" id="csForm" method="post" action="#">
                   <table>
                       <caption>고객센터 테이블</caption>
                       <tr>
                            <th>
                                <label for="userName">· 이름</label>
                            </th>
                            <td>
                                <input type="text" name="userName" id="userName">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="tel">· 휴대전화</label>
                            </th>
                            <td>
                                <input type="text" name="tel" id="tel"  placeholder="(-)없이 번호만 입력해주세요">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">· 이메일</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span id="csType">· 문의유형</span>
                            </th>
                            <td>
                                <label for="csType01" class="away">문의유형선택하기</label>
                                <select name="csType01" id="csType01">
                                    <option value="" checked>선택</option>
                                    <option value="">본인이 주문할 경우</option>
                                    <option value="">본인이 주문하지 않은 경우</option>
                                </select>
                                <label for="csType02" class="away">문의유형선택하기</label>
                                <select name="csType02" id="csType02">
                                    <option value="" checked>선택</option>
                                    <option value="">제품관련</option>
                                    <option value="">배달서비스관련</option>
                                    <option value="">직원서비스관련</option>
                                    <option value="">콜센터관련</option>
                                    <option value="">단순문의</option>
                                    <option value="">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="orderNum">· 주문번호</label>
                            </th>
                            <td>
                                <input type="text" name="orderNum" id="orderNum">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="title">· 제목</label>
                            </th>
                            <td>
                                <input type="text" name="subject" id="title">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="write">· 글작성</label>
                            </th>
                            <td>
                                <textarea name="textarea" id="write" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noticeFile01">· 첨부파일1</label>
                            </th>
                            <td>
                                <input type="file" name="upfile[]" id="noticeFile01">
                                <input type="checkbox" name="del_file[]" id="deleteFile01" value="0"> <label for="deleteFile01">삭제</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noticeFile02">· 첨부파일2</label>
                            </th>
                            <td>
                                <input type="file" name="upfile[]" id="noticeFile02">
                                <input type="checkbox" name="del_file[]" id="deleteFile02" value="0"> <label for="deleteFile02">삭제</label>
                            </td>
                        </tr>
                   </table>
                </form>
            </div>
            <div class="btnWrap">
                <input type="reset" id="resetBtn">
                <label for="resetBtn" class="away">다시입력</label>
                <input type="submit" id="submitBtn">
                <label for="submitBtn" class="away">입력완료</label>
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