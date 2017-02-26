<?
if (!defined('DOANHDZ')) die ('The request not found');
require './config.php';
?>
            
            <div class="row">
                <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Người Dùng Mới</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <div>

                                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                                                    <tr>
                                        <th>Avatar:</th>
                                        <th>Name:</th>
                                        <th>ID Facebook:</th>  
                                    </tr>
                                    </thead>
                                    <tbody>

 
<?php
	$infotv = mysql_query("SELECT * FROM `Users` order by id desc LIMIT 0,5");
	 while ($getinfo = mysql_fetch_array($infotv)){
		$nametv= $getinfo['name'];
		$idtv= $getinfo['idfb'];
		?>
                                                                        <tr>
                                       
                                        <td><img width="20" height="20" src="https://graph.facebook.com/<?php echo $idtv; ?>/picture?type=large" alt="Bot like" class="img-circle"></td>
                                        <td><a href="https://fb.com/<?php echo $idtv; ?>" target="_blank"><?php echo $nametv; ?></a></td>
                                        <td><?php echo $idtv; ?></td>
                                        
                                    </tr>                                   
                                                 <?php } ?>	                   
                                                                      
			</tbody>
                                </table>
                                                

                                        </div>
</div>
                                    </div>
                                </div>

                            </div>
							 <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Top Giới Thiệu</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <div>

                                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                                                    <tr>
                                        <th>Avatar:</th>
                                        <th>Name:</th>
                                        <th>ID Facebook:</th>  
										<th>Số bạn mời</th>  
                                    </tr>
                                    </thead>
                                    <tbody>

 

                                                                        <tr>
                                       
                                        <td><img width="20" height="20" src="https://graph.facebook.com/100012332343851/picture?type=large" alt="image" class="img-circle"></td>
                                        <td><a href="https://fb.com/100012332343851" target="_blank">Nguyễn Tuấn Sang</a></td>
                                        <td>100012332343851</td>
                                        
                                    </tr>                                   
                                                                    
                                                                      
			</tbody>
                                </table>
                                                

                                        </div>
</div>
                                    </div>
                                </div>

                            </div>

                



                </div>