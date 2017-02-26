<?
define("DOANHDZ", true);
include 'theme/head.php';
require 'config.php';
?>
<div class="wrapper wrapper-content animated fadeInRight" id="view" name="view"> 	
<span id="view" name="view" style="display: none;"></span>

<?
if(!$_SESSION['id']) include 'system/nologin.php';	
else include 'system/panel.php';
include 'system/thongke.php';
?>

            </div>
<?
include 'theme/footer.php';