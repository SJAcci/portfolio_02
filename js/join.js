//agree 
$(document).ready(function(){
    $('#joinForm').submit(function(e){
        e.preventDefault(); 
    });
    
    $('#allChk').change(function(){
        var chk = $(this).prop('checked');
        if(chk){
            $('.checkBox input').prop('checked',true);
        }else{
            $('.checkBox input').prop('checked',false);
        }
    });
    
    $('.checkBox input').change(function(){
        var chk01 = $('#agreeChk01').prop('checked');
        var chk02 = $('#agreeChk02').prop('checked');
        var chk03 = $('#agreeChk03').prop('checked');

        if(chk01 && chk02 && chk03){
            $('#allChk').prop('checked',true);
        }else{
            $('#allChk').prop('checked',false);
        }
    });
    
    
    //회원가입 버튼 클릭이벤트
    $('#submit').click(function(){
        if(!$('#name').val()){
            alert("이름을 입력하세요");
            $('#name').focus(); //입력상자로 초점이 가라는 메서드
            return; //함수를 실행하는 도중에 호출하는 곳으로 보내면서 아래 코드가 전부 실행되지 않음
        }
        
        if(!$('#id').val()){
            alert("아이디를 입력하세요");
            $('#id').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#pw').val()){
            alert("비밀번호를 입력하세요");
            $('#pw').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#pwChk').val()){
            alert("비밀번호 확인을 입력하세요");
            $('#pwChk').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#post').val()){
            alert("우편번호를 입력하세요");
            $('#post').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#address01').val()){
            alert("주소를 입력하세요");
            $('#address01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#address02').val()){
            alert("나머지 주소를 입력하세요");
            $('#address02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#tel').val()){
            alert("휴대폰 번호를 입력하세요");
            $('#tel').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        //비밀번호와 비밀번호이 맞지 않아도 경고창
        if($('#joinPw').val() != $('#joinPwChk').val()){
            alert('비밀번호가 일치하지 않습니다. \n다시입력하세요');
            $('#joinPw').focus();
            return;
        }
        
        
        var chk01 = $('#agreeChk01').prop('checked');
        var chk02 = $('#agreeChk02').prop('checked');
        var chk03 = $('#agreeChk03').prop('checked');

        if(!chk01 || !chk02 || !chk03){
            alert('모두 동의해주세요.');
            return;
        }
        
        
        //위의 조건이 다 해결되면 데이터를 insert.php로 전송
        //submit() - 자바스크립트 메서드
        document.join_form.submit();
    });
	
	
	//정보수정 클릭이벤트
	$('#submit_btn').click(function(){
		if(!$('#name').val()){
            alert("이름을 입력하세요");
            $('#name').focus(); //입력상자로 초점이 가라는 메서드
            return; //함수를 실행하는 도중에 호출하는 곳으로 보내면서 아래 코드가 전부 실행되지 않음
        }
        
        if(!$('#id').val()){
            alert("아이디를 입력하세요");
            $('#id').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#pw').val()){
            alert("비밀번호를 입력하세요");
            $('#pw').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#pwChk').val()){
            alert("비밀번호 확인을 입력하세요");
            $('#pwChk').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#post').val()){
            alert("우편번호를 입력하세요");
            $('#post').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#address01').val()){
            alert("주소를 입력하세요");
            $('#address01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#address02').val()){
            alert("나머지 주소를 입력하세요");
            $('#address02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#tel').val()){
            alert("휴대폰 번호를 입력하세요");
            $('#tel').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        //비밀번호와 비밀번호이 맞지 않아도 경고창
        if($('#joinPw').val() != $('#joinPwChk').val()){
            alert('비밀번호가 일치하지 않습니다. \n다시입력하세요');
            $('#joinPw').focus();
            return;
        }	
		document.joinForm.submit();
	});
});


//birth
$(document).ready(function(){
    var yOutput = '';
    var mOutput = '';
    var dOutput = '';
    
    var today = new Date();
    var tYear = today.getFullYear();
    
    for(var i=tYear;i>=1900;i--){
        yOutput += '<option>' + i + '</option>';
    }
    for(var i=1;i<=12;i++){
        mOutput += '<option>' + i + '</option>';
    }
    
    $('#birth01').html(yOutput);
    $('#birth02').html(mOutput);
    
    function dateList(y,m){
        dOutput = ''; 
        
        var mArray = [31,28,31,30,31,30,31,31,30,31,30,31];
        
        if((y % 4 == 0 && y % 100 != 0) || y % 400 == 0){
            mArray[1] = 29;
        }
        
        for(var i=1;i<=mArray[m-1];i++){
            dOutput += '<option>' + i + '</option>';
        }
        
        $('#birth03').html(dOutput);
    }
    
    dateList(tYear,1);
    
    $('#birth01, #birth02').change(function(){
        var y = $('#birth01').val();
        var m = $('#birth02').val();
        
        dateList(y,m);
    });
	
	var bMonth = $('#bMonth').val();
    bMonth = Number(bMonth);
    var bDate = $('#bDate').val();
    bDate = Number(bDate);
    var bYear = $('#bYear').val();
    bYear = Number(bYear);
    
    $('#birth02').find('option').eq(bMonth - 1).attr('selected','selected');
    $('#birth03').find('option').eq(bDate - 1).attr('selected','selected');
    
    var bYearIndex;
    
    $('#birth01 option').each(function(index){
        var value = $(this).html();
        
        if(value == bYear){
            bYearIndex = $(this).index();
        }
    });
    
    $('#birth01').find('option').eq(bYearIndex).attr('selected','selected');
});

$(document).ready(function(){
    $('#pw').blur(function(){
        var pw01 = $('#pw').val();
        var pw02 = $(this).val();
        
        if(pw01 != pw02){
            $('.joinBox .red').fadeIn(0);
        }else{
            $('.joinBox .red').fadeOut(0);
        }
    });
});



//아이디 중복확인
$(document).ready(function(){
    $('#checkId').click(function(e){
        e.preventDefault(); //혹시 버튼이 데이터 전송할까봐 막음
        
        var idValue = $('#id').val(); //아이디입력상자의 value값을 담는 변수
        
        //새창을 가운데 오게 하기 위한 공식
        var w = $(window).width();
        var h = $(window).height();
        var leftValue = (w / 2) - 150; //새창사이즈의 반을 뺌
        var topValue = (h / 2) - 150;
        
        window.open('../tnav/check_id.php?id=' + idValue,'idCheck','width=300, height=300, top=' + topValue + ',left=' + leftValue);
    });
});











