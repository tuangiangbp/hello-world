<?
require '../config.php';
require '../system/func.php';
?>
<div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Auto Xóa Status hàng loạt</b></h5>
                        
                    </div>
                    <div class="ibox-content">


					<section class="status">
<div class="form-group"><br>
		<b>*Nhập số lượng cần xóa:</b>
		<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
		<input name="limit" placeholder="Nhập số lượng stt cần xóa" value="" class="form-control" id="limit" style="width:100%;">
<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>
	</div>
	</div>
					</section>

<span id="result" name="result"></span>
<script type="text/javascript"> 

function start()
{      
         $("input").attr("disabled", "disabled");   
         $("select").attr("disabled", "disabled");   
         $("button").attr("disabled", "disabled"); 
} 
function finish()
{        
         $("input").removeAttr("disabled");    
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled"); } 
function Submit() 
{ 
start(); 
         $('#result').html('<i class="m-progress"></i>&nbsp;');
         var limit = $('#limit').val();
		 var _SERVER = $('#_SERVER').val();
         if(limit == ''){ 
         $(function (){
         toastr.error('Vui lòng nhập số lượng')});
         $("input").removeAttr("disabled");  
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); 
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>'); 
         return false;
         } 
         var url_login	 = 'done/post_auto.php';	
$.ajax({		
         url	 : url_login,	
                   data : {
            limit : limit,
			auto : 'xoastt',
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
</div></div>
<br>

                 
		