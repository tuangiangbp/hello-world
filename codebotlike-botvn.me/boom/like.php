<?
require '../config.php';
require '../system/func.php';
?>
 	</ol>
	             <div class="wrapper wrapper-content animated fadeInRight">
 <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Boom Like</b></h5>
                        
                    </div>
                    <div class="ibox-content">
	<a href="http://findmyfbid.com" target="_blank" class="btn btn-danger btn-xs">Lấy ID Bạn Bè (copy link dán vào rồi ấn FIND)</a>
					<section class="status">
<div class="form-group">
		<b>*Nhập ID Cần Bão Like:</b>
		<input name="id" placeholder="ID Cần Bão Like" value="" class="form-control" id="id" style="width:100%;" >
		<b>*Tùy chỉnh:</b>
		<input name="cmt" placeholder="Nhập 1 Để Like Cmt Hoặc 0 Nếu Không Muốn..." value="" class="form-control" id="cmt" style="width:100%;" >
<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3">
			<select class="form-control" id="limit" name="limit">
				<option value="100">100 Like</option>
				<option value="80">80 Like</option>
				<option value="70">70 Like</option>
				<option value="60">60 Like</option>
				<option value="50">50 Like</option>
				<option value="40">40 Like</option>
				<option value="30">30 Like</option>
				<option value="20">20 Like</option>
				<option value="10">10 Like</option>
				<option value="5">5 Like</option>
			</select>
			<div class="hr-line-dashed"></div>
	</div>
	<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>

					</section>

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
         var id = $('#id').val(); 
         var limit = $('#limit').val();
		 var _SERVER = $('#_SERVER').val();
		 var cmt = $('#cmt').val();
         if(id == ''){ 
         $(function (){
         toastr.error('Bạn chưa nhập ID')});
         $("input").removeAttr("disabled");  
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); 
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>'); 
         return false;
         }
 
         var url_login	 = 'done/post_boom.php';	
$.ajax({		
         url	 : url_login,	
         data : {
		auto : 'boomlike',
		id : id,
		limit : limit,
		cmt : cmt,
		_SERVER : _SERVER
        },
         type	 : 'POST',	
         dataType: 'html', 
         success : function(pesan){ 
finish();	
         $("#result").html(pesan);
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>');	

    },
   }); 
}


</script>
			</center>
	</div>
	</div>	
</div></div>	</div>	
</div></div>


		