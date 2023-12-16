$(document).ready(function () {

	function Logout(){
		$.ajax({
			url:'/post/logout.php',
			type:'POST',
			data:"",
			success:function(data){
				if(data == "success"){
					location.href="/index.php";
				}
			}
		});
	}
	$(document).on('click', "._logout_", function(){
		Logout();
	});
	$(document).on('click',".idcheck",function () {
		var obj = $(this).parent("div").parent("div");
		var ref = $(this).attr("ref");
		var val = $('[name="iu_id"]').val();
		var txt = "cmd="+ ref +"&val="+ val;
		$.ajax({
			url:'/post/register.php?'+txt,
			type:'POST',
			data:txt,
			success:function(data){
				obj.find('.hint').show();
				obj.find('.hint').find('.txt').html(data);
			}
		});
	});
	
	$(document).on('click',".nccheck",function () {
		var obj = $(this).parent("div").parent("div");
		var ref = $(this).attr("ref");
		var val = $('[name="iu_nick"]').val();
		var txt = "cmd="+ ref +"&val="+ val;
		$.ajax({
			url:'/post/register.php?'+txt,
			type:'POST',
			data:txt,
			success:function(data){
				obj.find('.hint').show();
				obj.find('.hint').find('.txt').html(data);
			}
		});
	});
	
	
	//회원가입
	$(document).on('click',"._reg_btn",function (e) {
		e.preventDefault();
		
		var obj = $(this).attr("ref");
		var txt = $("#"+obj).serialize();
		$.ajax({
			url:'/post/register.php?',
			type:'POST',
			data:txt,
			success:function(data){
				if(data == "success"){
					alert('신청 완료');
					location.reload();
				}else{
					alert(data);
				}
				
			}
		});
	});
	

    
});


