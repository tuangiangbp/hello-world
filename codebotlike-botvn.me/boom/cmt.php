<?
require '../config.php';
require '../system/func.php';
?>
 	             <div class="wrapper wrapper-content animated fadeInRight">


 <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Boom Comment</b></h5>
                        
                    </div>
                    <div class="ibox-content">
	<a href="http://findmyfbid.com" target="_blank" class="btn btn-danger btn-xs">Lấy ID Bạn Bè (copy link dán vào rồi ấn FIND)</a>

					<section class="status">
<div class="form-group">
		<b>*ID Cần Bão Comment:</b>
		<input name="id_bai" placeholder="ID Cần Bão Comment" value="" class="form-control" id="id_bai" style="width:100%;" >	<br>
<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
<b>*Nội Dung Comment:</b>
<textarea class="form-control" rows="8" name="noidung" id="noidung" placeholder="Nhập nội dung cần boom comment" style="width:100%;"></textarea><br>

<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3">
			<select class="form-control" id="limit" name="limit">
				<option value="50">50 Comment</option>
				<option value="40">40 Comment</option>
				<option value="30">30 Comment</option>
				<option value="20">20 Comment</option>
				<option value="10">10 Comment</option>
				<option value="5">5 Comment</option>
			</select><div class="hr-line-dashed"></div>
	</div>
	<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt Đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>

					</section>

<span id="result" name="result"></span>
<script type="text/javascript"> 

function start()
{      
         $("input").attr("disabled", "disabled");   
         $("select").attr("disabled", "disabled");   
         $("button").attr("disabled", "disabled");
         $("textarea").attr("disabled", "disabled"); 
} 
function finish()
{        
         $("input").removeAttr("disabled");    
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); } 
function Submit() 
{ 
start(); 
         $('#result').html('<i class="m-progress"></i>&nbsp;');
         var id_bai = $('#id_bai').val(); 
         var limit = $('#limit').val();  
         var noidung = $('#noidung').val();
		 var _SERVER = $('#_SERVER').val();
         if(id_bai == '' || noidung ==''){ 
         $(function (){
         toastr.error('Bạn Chưa Nhập Đủ Thông Tin')});
         $("input").removeAttr("disabled");  
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); 
         $("#result").html('Bắt Đầu <i class="fa fa-arrow-right"></i>'); 
         return false;
         } 
         var url_login	 = 'done/post_boom.php';	
$.ajax({		
         url	 : url_login,	
        data : {
		auto : 'boomcmt',
		id : id_bai,
		limit : limit,
		noidung : noidung,
		_SERVER : _SERVER
        },
         type	 : 'POST',	
         dataType: 'html', 
         success : function(pesan){ 
finish();	
         $("#result").html(pesan);
         $("#result").html('Bắt Đầu <i class="fa fa-arrow-right"></i>');		
    },
   }); 
}


</script>
			</center>
	</div>
	</div>	
</div></div>


                 

		