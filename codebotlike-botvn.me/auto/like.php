<?
require '../config.php';
require '../system/func.php';
?>
 	

	             <div class="wrapper wrapper-content animated fadeInRight">
				 <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Auto Like</b></h5>
                        
                    </div>
                    <div class="ibox-content">
                        <a href="#skytamm" data-target="#popup_id" data-toggle="modal" title="Lấy ID" class="btn btn-danger btn-xs">Lấy ID Status / Ảnh / Video</a><br>
		<b>*Nhập ID Status mới nhất:</b>
		<input name="id_like" placeholder="Nhập ID Status/ảnh/Video cần tăng Like !" class="form-control" id="id_like" style="width:100%;">
					
					<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
<div class="hr-line-dashed"></div>
<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-3">



			<select class="form-control" id="limit" name="limit">
				<option value="200">200 Like</option>
				<option value="170">170 Like</option>
				<option value="150">150 Like</option>
				<option value="130">130 Like</option>
				<option value="100">100 Like</option>
				<option value="70">70 Like</option>
				<option value="50">50 Like</option>
				<option value="30">30 Like</option>
				<option value="10">10 Like</option>
			</select><div class="hr-line-dashed"></div>
	</div>
	<div class="col-sm-3">
			<button id="result" name="result" class="btn btn-danger btn-block" onclick="Submit();">
				Bắt đầu <i class="fa fa-arrow-right"></i>
			</button><div class="hr-line-dashed"></div>
	</div>
	</div>
</div></div></div>
                <div class="col-lg-12">
	 <div class="ibox float-e-margins">
	   
 <div class="ibox-title">
                        <h5><b>
Gần đây</b></h5>
                        
                    </div>
		<div class="inqbox-content">
			<div class="tabs-container">
				<ul class="nav nav-tabs tab-border-top-info">
					<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="false"> All Post</a></li>
					<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="true" onclick="loadstatus();"> Status</a></li>
					<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="true" onclick="loadphotos();">Photos</a></li>
					<li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="true" onclick="loadvideos();">Video</a></li>
					<li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="true" onclick="loadlinks();">Link</a></li>

				</ul>
				<div class="tab-content">
					<div id="tab-1" class="tab-pane active">
						<div class="panel-body">
							<div id="allposts"></div>
						</div>
					</div>
					<div id="tab-2" class="tab-pane active">
						<div class="panel-body">
							<div id="status"></div>
						</div>
					</div>
					
					<div id="tab-3" class="tab-pane active">
						<div class="panel-body">
							<div id="photos"></div>
						</div>
					</div>
					<div id="tab-4" class="tab-pane">
						<div class="panel-body">
							<div id="videos"></div>
						</div>
					</div>
					<div id="tab-5" class="tab-pane">
						<div class="panel-body">
							<div id="links"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inqbox-footer">
		</div>
	</div> </div></div></div>
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

         $('#adfly').html('Please Wait...');
         $('#result').html('<i class="m-progress"></i>&nbsp;');
         var id_like = $('#id_like').val(); 
         var limit = $('#limit').val();
		 var _SERVER = $('#_SERVER').val();
         //Kiem tra gia tri
         if(id_like == ''){ 
         $(function (){
         toastr.error('Bạn Chưa Nhập ID')});
         $("input").removeAttr("disabled");  
         $("select").removeAttr("disabled"); 
         $("button").removeAttr("disabled");
         $("textarea").removeAttr("disabled"); 
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>'); 
         return false;
         } 
        //END
         var url_login	 = 'done/post_auto.php';	
$.ajax({		
         url	 : url_login,	
          data : {
            id : id_like,
            limit : limit,
			auto : 'like',
			_SERVER : _SERVER
        },
         type	 : 'POST',	
         dataType: 'html', 
         success : function(pesan){ 
finish(); 
         $("#result").html(pesan);
         //Co su thay doi
         $("#result").html('Bắt đầu <i class="fa fa-arrow-right"></i>');

    },
   }); 
}


</script>
