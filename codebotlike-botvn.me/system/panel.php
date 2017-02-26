<?
if (!defined('DOANHDZ')) die ('The request not found');
require './config.php';
?>
<div class="col-lg-12 animated fadeInRight">
<div class="alert alert-success">Để sử dụng vui lòng chọn chức năng ở thanh bên trái</div>

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><b>
Welcome To BotVn.Me</b></h5>
                        
                    </div>
                    <div class="ibox-content">
<div class="row">
<div class="col-sm-5">
<center><br><br>
<a href="https://facebook.com/<?Echo $_SESSION['id'] ?>">
<img class="img-circle" width="110" height="110" src="https://graph.facebook.com/<?Echo $_SESSION['id'] ?>/picture?type=large" alt="Coday"><br>
</a><br><span class="mfsl fcb"><span class="badge" style="background-color:green; color:#FFFFFF;">Nguyễn Duy Doanh</span><br><br><b><a type="button" href="index.php?info=coomingsoon" class="btn btn-primary btn-sm"><i class="fa fa-money" aria-hidden="true"></i> 5.000 VND </a></b> <br><br><a href="index.php?info=coomingsoon" class="btn btn-success btn-sm"> Nạp Tiền </a> Hoặc <a href="index.php?info=coomingsoon" class="btn btn-warning btn-sm">Mua VIP</a><br><br><a class="btn btn-danger btn-sm" href="logout.php">Đăng xuất <i class="fa fa-sign-out"></i></a></span></center>
<br>
</div>
<div class="col-sm-7">
 <ul class="list-group">
					<li class="list-group-item">
						Name: <strong><span class="pull-right"><?Echo $_SESSION['name'] ?></span></strong>
					</li>
					<li class="list-group-item">
						ID: <strong><span class="pull-right"><?Echo $_SESSION['id'] ?></span></strong>
					</li>
					<li class="list-group-item">
						ID Token: <strong><span class="pull-right"><?Echo $_SESSION['appid'] ?></span></strong>
					</li>
					<li class="list-group-item">
						Tài Khoản: <strong><span class="pull-right"><font color="red">0</font> VNĐ					</span></strong>
					</li>
				</ul> 
</div>
</div>
<center>
<div class="alert alert-success"><b>Bạn đang muốn kiếm tiền mua vip mà không cần nạp thẻ? Hãy làm theo hướng dẫn dưới đây!</b>
<br>
<b>Bước 1:</b> các bạn copy link ref sau đây: <b>https://botvn.me/?ref=<?Echo $_SESSION['id'] ?></b>
<br>
<b>Bước 2:</b> hãy chia sẽ link có từ bước 1 cho bạn bè, người thân để cùng sử dụng!<br>
<b>[Cứ 1 người sử dụng trên link ref bạn sẽ nhận được 1.000 đồng trong tài khoản, sẽ được trao trong vòng 1~24h]<br></b>
<b>CHÚC CÁC BẠN THÀNH CÔNG! ^^</b></div>

</center>
</div>
                     </div>
                        </div>