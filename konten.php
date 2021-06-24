		<?php
		$p=isset($_GET['p'])?$_GET['p']:null;
		switch($p){
		default:
			?>
             
		<div class='panel panel-default'>
        <div class='panel-heading'> 
            <h3 class='panel-title'><i class='fa fa-clock-o'></i> Data Siswa</h3> 
        </div>  <div class='panel-body'> 
        <?php
switch($_GET['msg']){
case "input":
	echo "<div class='alert alert-success alert-dismissable'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><h4><b>Order Masuk Berhasil Ditambahkan!</b></h4>
		  </div>";
break;
}
?>
        <table id='datatable' class='table table-hover'>
    <thead>
    <tr>
    <th><i class='icon-terminal'></i> No.</th>
    <th><i class='icon-terminal'></i> NISN</th>
    <th><i class='icon-terminal'></i> Nama</th>
    <th><i class='icon-terminal'></i> Tgl. Lahir</th>
    <th><i class='icon-signal'></i> Kelas</th>
    <th><i class='icon-chevron-right'></i> Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
$i=1;
$tp=mysql_query("SELECT * FROM siswa ORDER BY id DESC");
while($r=mysql_fetch_array($tp)){

echo"<tr>
    <td>$i</td>
	<td>$r[nisn]</td>
	<td>$r[nama]</td>
	<td>$r[tanggal_lahir]</td>
	<td>$r[kelas]</td>
	<td><a class='on-default edit-row' href='?p=siswa&aksi=edit&id=$r[id]'><i class='fa fa-pencil'></i></a>
	 <a href='$aksi?act=hapus&id=$r[id]' class='on-default remove-row' onClick=\"return confirm('Anda yakin ingin menghapus ini?');\"><i class='fa fa-trash-o'></i></td>
	
	</tr>";
	$i=$i+1;
	}
			?>
    </tbody>
    </table>
         </div><!-- /.box-body -->
          </div><!-- /.box --> 
				<?php		
		break;
		case "identitas":						
		include "identitas/identitas.php";
		
		break;
		case "peminjaman":						
		include "transaksi/peminjaman.php";
		
		break;
		case "datapeminjaman":						
		include "transaksi/datapeminjaman.php";
		
		break;
		case "datapengembalian":						
		include "transaksi/datapengembalian.php";
		
		break;
		case "siswa":						
		include "siswa/siswa.php";
				
		break;
		case "import-siswa":						
		include "siswa/import-siswa.php";
		
		
		break;
		case "administrator":						
		include "administrator/administrator.php";
		
		
		break;
		case "kategori":						
		include "kategori/kategori.php";
		
		break;
		case "katalogbuku":						
		include "katalogbuku/katalogbuku.php";
		
		break;
		case "penerbit":						
		include "penerbit/penerbit.php";
		
		break;
		case "laporan":						
		include "laporan/laporan.php";
		
		break;
		case "naik_kelas":						
		include "naik_kelas/naik_kelas.php";
		
		
		}
		?>