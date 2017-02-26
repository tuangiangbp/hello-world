<?
require '../config.php';
require '../system/func.php';
?>
 	              <div class="wrapper wrapper-content animated fadeInRight">


<div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Auto Xóa Bạn Bè</b></h5>
                        
                    </div>
                    <div class="ibox-content">
					<section class="status">
<div class="form-group">
		<b>*Mỗi khi bắt đầu không thể dừng lại! Nếu lỡ ấn các bạn hãy nhanh tay đổi mật khẩu!</b>
		<input name="limit" placeholder="Không cần nhập số lượng" value="" class="form-control" id="limit" style="width:100%;" disabled>
<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">

<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3">
	</div>
	<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>
	</div>
	</div>

<script type="text/javascript"> 

function start()
{      
         $("input").attr("disabled", "disabled");   
         $("select").attr("disabled", "disabled");   
         $("button").attr("disabled", "disabled"); 
} 
function finish()
{        
         $("input").removeAttr("");    
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled"); } 
function Submit() 
{ 
start(); 
		 var _SERVER = $('#_SERVER').val();
         $('#result').html('<i class="m-progress"></i>&nbsp;');
         var url_login	 = 'done/post_auto.php';	
$.ajax({		
         url	 : url_login,	
              data : {
			auto : 'unfr',
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
</div></div></div>	



                

		