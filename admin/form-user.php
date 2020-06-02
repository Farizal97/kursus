<?php include('koneksi.php');

$id = "";
$nama ="";
$username = "";
$password = "";



if(isset($_GET['kode'])){
	$data = mysql_query("select a.*, b.nama as nama_customer from trx_user a, mst_customer b where a.id_usr=b.id
						and a.id_usr=".$_GET['kode']."") or die(mysql_error());
	while($row = mysql_fetch_array($data)){
		$id = $row['id'];
		$nama = $row['nama_customer'];
		$username = $row['username'];
		$password  = $row['password'];
		
		}
	}

?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Data User</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						
						<div class="row">
							<div class="col-xs-12">
					<div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
           <h3>Form Data User</h3><br>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
            <form class="form-horizontal" role="form" action="proses-user.php?aksi=<?php echo $action ?>" method="post">
             
                        <input type="hidden" id="form-field-1" placeholder="id" class="col-xs-10 col-sm-5" name="id" value = "<?php echo $id?>"/>
                
				 
				<div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama User </label>

                    <div class="col-sm-9">
                    	<select id="form-field-1" class="col-xs-10 col-sm-5" name="nama" >
                        	<option>Nama User</option>
                            <?php $query = mysql_query("select * from mst_customer");
								while($row = mysql_fetch_array($query)){
							?>
                            <option value="<?php echo $row['id']?>" <?php if($nama==$row['nama']){ echo "selected";}?>><?php echo $row['nama'];?></option>
                            <?php } ?>

                        </select>
                        
                    </div>
                </div>
                
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" name="username" value="<?php echo $username;?>" />
                        
                    </div>
                </div>

 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password</label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Password" class="col-xs-10 col-sm-5" name="password" value="<?php echo $password;?>" />
                    </div>
                </div>
              
             
                
                              <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                       
                        <input type="submit" value="Submit" class="btn btn-info">

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
                </form>

    
							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->