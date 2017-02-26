
 	             <div class="wrapper wrapper-content animated fadeInRight">

 <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Auto Xác Nhận Friends</b></h5>
                        
                    </div>
                    <div class="ibox-content">
					<section class="status">
<div class="form-group">
		<b>*Nhập số lượng cần chấp nhận:</b>
		<input name="limit" placeholder="Nhập Số Lượng Cần Chấp Nhận Kết Bạn" value="" class="form-control" id="limit" style="width:100%;">
<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3">
	</div>
	<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>
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
         if(limit == ''){ 
         $(function (){
         toastr.error('Bạn chưa nhập số lượng')});
         $("input").removeAttr("disabled");  
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); 
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>'); 
         return false;
         }  
         var url_login	 = 'done/xacnhanfr.php';	
$.ajax({		
         url	 : url_login,	
         data	 : 'limit='+limit,
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



		