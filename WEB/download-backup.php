<!DOCTYPE html>
<html>
<head>
	<title>Dwonload File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div id="container">
    	<div id="header">
    		<h1>Data Download</h1>
        </div>
 
        <div id="menu">
        	<a href="index.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
        </div>
 
        <div id="content">
        	<h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
 
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Tgl. Upload</th>
                    <th>Nama File</th>
                    <th width="70">Tipe</th>
                    <th width="70">Ukuran</th>
                </tr>
                <?php
				include('connection.php');
				$sql = mysqli_query($connect,("SELECT * FROM download "));

					$id = 1 ;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$id.'</td>
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
						</tr>
						';
						$id++;
					}
				
				?>
            </table>
            </p>
        </div>
    </div>
 
</body>
</html>