
<?php
    $conn = new mysqli("localhost", "root", "", "cdc");
	$cid = '7';
        $sql = "SELECT user_id, name FROM companies WHERE user_id =$cid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $cname = $row["name"];
            }
        }
        else{
            $cname = "";
        }
    ?>

        
<div id="about_cdc_title"><p> About Career Development Center</p></div>
<div id="about_cdc">
<h5><?= $cname ?></h5> 
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Career Development Centre atau CDC merupakan sebuah tempat untuk mahasiswa serta alumni Universitas Pembangunan Jaya dalam berbagi ataupun memperoleh informasi tentang lowongan pekerjaan. Di CDC juga memungkinkan alumni utuk mendapatkan informasi lowongan pekerjaan yang langsung disediakan oleh suatu instasi perusahaan. Selain itu, alumni yang sudah bekerja juga dapat mengajak lulusan UPJ untuk bekerja di perusahaan tempatnya bekerja, atau lowongan untuk mahasiswa UPJ yang ingin melakukan KKP(Kuliah Kerja Praktek).</p>

<p>Fasilitas yang disediakan oleh CDC UPJ berupa :
    <li>Memberikan informasi magang dari alumni/perusahaan untuk mahasiswa KKP</li>
    <li>Informasi Magang untuk mahasiswa</li>
    <li>Informasi lowongan pekerjaan untuk alumni UPJ</li>
    <li>Pendaftaran untuk perusahaan</li>
    <li>Informasi mengenai scholarship yang tersedia</li>
    <li>Informasi pelatihan yang diadakan di UPJ</li>
</p>

</div>

