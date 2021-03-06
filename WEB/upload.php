<!DOCTYPE html>
<html>
<head>
	<title>Upload file</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div id="container">
    	<div id="header">
    		<h1></h1>
        </div>
 
        <div id="menu">
        	<a href="index.php">Home</a>
            <a href="upload.php" class="active">Upload</a>
            <a href="download.php">Download</a>
        </div>
 
        <div id="content">
            <p>Upload file Anda di bawah ini. 
            		<p> Sertakan juga nama Cluster ketika mau upload 
            			<p> Contoh = [Bogor] Whitelist NSB 2018
            				<p>File yang bisa di Upload hanya file dengan ekstensi <b> .csv </b>
            			</p>
 
            <?php
			include('connection.php');
			if(isset($_POST['upload'])){
				$allowed_ext	= array('csv');
				$file_name		= $_FILES['file']['name'];
				$exploded = explode(',', $file_name);
				$eksfile		= pathinfo($file_name, PATHINFO_EXTENSION);
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
 
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
 
				if(in_array($eksfile, $allowed_ext) === true){
					if($file_size < 838860800 ){
						$lokasi = '../crud/crudserver/files/'.$nama.'.'.$eksfile;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysqli_query($connect,"INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$eksfile', '$file_size', '$lokasi')");
						if($in){
							echo '<div class="ok">Sukses Upload!</div>';
							
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) minimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Hanya mengizinkan file csv!</div>';
				}
			}
			
			?>
 
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" id="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
                </tr>
            </table>
            </form>
            </p>
        </div>
    </div>
 
</body>
</html>