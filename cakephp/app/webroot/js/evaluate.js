//評価ボタンの挙動、フォームの操作
function addReact(state){
	//2回目押された場合はリセット
	var react = $('#evaluate').val();
	if(state == 'good' && react == '1' || state == 'bad' && react == '2'){
		reactReset();
	}else{
		if(state == 'good'){
			$('#com-textbox').css('border-color', 'blue');
			$('#goodbtn').css('opacity', '1.0');
			$('#badbtn').css('opacity', '0.5');
			$('#evaluate').val("1");
		}else if(state == 'bad'){
			$('#com-textbox').css('border-color', 'red');
			$('#goodbtn').css('opacity', '0.5');
			$('#badbtn').css('opacity', '1.0');
			$('#evaluate').val("2");
		}
	}
}

function reactReset(){
	$('#com-textbox').css('border-color', '#888');
	$('#goodbtn').css('opacity', '0.5');
	$('#badbtn').css('opacity', '0.5');
	$('#evaluate').val("0");
}
