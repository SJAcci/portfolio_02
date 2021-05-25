//아이디 중복확인 함수
function check_id(){
    //새창을 띄움 - check_id.php
    window.open(
        //문서객체.폼네임.input네임.value
        "check_id.php?id=" + document.join.id.value,
        "IDCheck",
        "top=200,left=200,width=300,height=250"
    );
}

//저장하기 - 데이터 없으면 경고창, 전부 있으면 insert.php로 전송버튼 처리
function check_input(){
    //아이디없으면 경고창
    if(!document.join.id.value){
        alert("아이디를 입력하세요");    
        document.join.id.focus();
        return;
    }
    //비번없으면 경고창
    if(!document.join.pw.value){
        alert("비밀번호를 입력하세요");    
        document.join.pw.focus();
        return;
    }
    //비번 확인 값이 없으면 경고창
    if(!document.join.pw_confirm.value){
        alert("비밀번호확인을 입력하세요");    
        document.join.pw_confirm.focus();
        return;
    }
    //비번과 비번확인 값이 같은지
    if (document.join.pw.value != 
    document.join.pw_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
        document.join.pw.focus();
        document.join.pw.select();
        return;
    }
    //이름없음 경고창
    if (!document.join.name.value){
        alert("이름을 입력하세요");    
        document.join.name.focus();
        return;
    }
    //생일 경고창
    if(!document.join.birth01.value || !document.join.birth02.value || !document.join.birth03.value){
        alert("생일을 입력하세요");    
        document.join.birth01.focus();
        return;
    }
    //성별 경고창
    if (!document.join.gender.value){
        alert("성별을 선택하세요");    
        document.join.gender.focus();
        return;
    }
    //메일 경고창
    if(!document.join.mail01.value || !document.join.mail02.value ){
        alert("메일을 입력하세요");    
        document.join.mail01.focus();
        return;
    }
    //번호 경고창
    if (!document.join.phone.value){
        alert("번호를 입력하세요");    
        document.join.phone.focus();
        return;
    }
    
    if(!document.join.chk01.checked || !document.join.chk02.checked || !document.join.chk03.checked || !document.join.chk04.checked){
        alert("모두 동의해주세요.");
        return;
    }
    
    document.join.submit();
}




//submit
$(document).ready(function(){
    $('.join_form').submit(function(e){
        e.preventDefault();
    });
});

//회원정보수정
function check_input2(){
    //아이디수정불가
    /*if(!document.join.id.value){
        alert("아이디를 입력하세요");    
        document.join.id.focus();
        return;
    }*/
    //비번없으면 경고창
    if(!document.join.pw.value){
        alert("비밀번호를 입력하세요");    
        document.join.pw.focus();
        return;
    }
    //비번 확인 값이 없으면 경고창
    if(!document.join.pw_confirm.value){
        alert("비밀번호확인을 입력하세요");    
        document.join.pw_confirm.focus();
        return;
    }
    //비번과 비번확인 값이 같은지
    if (document.join.pw.value != 
    document.join.pw_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
        document.join.pw.focus();
        document.join.pw.select();
        return;
    }
    //이름없음 경고창
    if (!document.join.name.value){
        alert("이름을 입력하세요");    
        document.join.name.focus();
        return;
    }
    //생일 경고창
    if(!document.join.birth01.value || !document.join.birth02.value || !document.join.birth03.value){
        alert("생일을 입력하세요");    
        document.join.birth01.focus();
        return;
    }
    //성별 경고창
    if (!document.join.gender.value){
        alert("성별을 선택하세요");    
        document.join.gender.focus();
        return;
    }
    //메일 경고창
    if(!document.join.mail01.value || !document.join.mail02.value ){
        alert("메일을 입력하세요");    
        document.join.mail01.focus();
        return;
    }
    //번호 경고창
    if (!document.join.phone.value){
        alert("번호를 입력하세요");    
        document.join.phone.focus();
        return;
    }
    
    document.join.submit();
}

function reset_form(){
    document.join.pw.value = '';
    document.join.name.value = '';
    document.join.pw_confirm.value = '';
    document.join.mail01.value = '';
    document.join.mail02.value = '';
    document.join.phone.value = '';
    
    $('#birthyear').find('option:first').prop('selected',true);
    $('#birthmonth').find('option:first').prop('selected',true);
    $('#birthday').find('option:first').prop('selected',true);
}
