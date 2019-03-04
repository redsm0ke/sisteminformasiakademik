<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location: /account/login?msg=login");
}

##############################################

include '/assets/includes/configuration.php';
include '/assets/includes/db.php';

##############################################

    $userx      = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user where username = '$userx' ");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_siswa   = mysqli_query($db,"SELECT * FROM tbl_siswa where nis = '$userx' ");
    $tbl_siswa   = mysqli_fetch_array($sql_siswa);

    $sql_pegawai   = mysqli_query($db,"SELECT * FROM tbl_pegawai where nip = '$userx' ");
    $tbl_pegawai   = mysqli_fetch_array($sql_pegawai);

    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
##############################################
?>   
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><?php echo $tbl_website['nama_sekolah']; ?></h3>
            </div>

            <ul class="list-unstyled components">
                <center>
                <img src="image.jpg" class="img-thumbnail rounded-circle" style="width: 150px; background-color: #FFF; border: 0; padding: 0;"><br><br>
                    <?php echo strtoupper($_SESSION['session']); ?><br>
                    <?php echo $tbl_siswa['nama']; ?>
                    <?php echo $tbl_pegawai['nama']; ?>
                </center>
                <hr>
                <center>
                     <b><?php echo $today; echo $tanggal; ?></b><br>
                        <?php echo $tbl_website['tahun_ajaran']; ?><br>
                        <?php echo $tbl_website['semester']; ?><br>
                </center>
                <hr>
                <li>
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="nav-label"> Beranda</span>
                    </a>
                </li>

                <li>
                    <a href="#BeritaEvent" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-newspaper"></i>
                        <span class="nav-label"> Berita & Event</span>
                    </a>
                    <ul class="collapse list-unstyled" id="BeritaEvent">
                        <li>
                            <a href="<?php echo $tbl_website['manage_dir']; ?>/berita">Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo $tbl_website['manage_dir']; ?>/event">Event</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#Pelajaran" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book" style="font-size:23px"></i>
                        <span class="nav-label">Pelajaran</span>
                    </a>
                    <ul class="collapse list-unstyled" id="Pelajaran">
                        <li>
                            <a href="<?php echo $tbl_website['manage_dir'];; ?>/pelajaran">Daftar Pelajaran</a>
                        </li>
                    </ul>
                </li>

                <?php
                if ($tbl_user["level"] == "Guru") {
                echo '
                <li>
                    <a href="#Siswa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        <span class="nav-label">Siswa</span>
                    </a>
                    <ul class="collapse list-unstyled" id="Siswa">
                       <li>
                            <a href="'.$tbl_website['manage_dir'].'/siswa">Daftar Siswa</a>
                        </li>
                    </ul>
                </li>';
                }
                ?>

                <?php
                if ($tbl_user['level'] == "Administrator") {
                echo "<li>\n";
                echo "    <a href='#Pegawai' data-toggle='collapse' aria-expanded='false' class='dropdown-toggle'>\n";
                echo "        <i class='fas fa-users'></i>\n";
                echo "        <span class='nav-label'>Pegawai</span>\n";
                echo "    </a>\n";
                echo "    <ul class='collapse list-unstyled' id='Pegawai'>\n";
                echo "       <li>\n";
                echo "           <a href='".$tbl_website['manage_dir']."/pegawai'>Pegawai</a>\n";
                echo "        </li>\n";
                echo "        <li>\n";
                echo "            <a href='".$tbl_website['manage_dir']."/guru'>Guru</a>\n";
                echo "        </li>\n";
                echo "    </ul>\n";
                echo "</li>\n\n";

                echo "<li>\n";
                echo "    <a href='#Murid' data-toggle='collapse' aria-expanded='false' class='dropdown-toggle'>\n";
                echo "        <i class='fas fa-graduation-cap'></i>\n";
                echo "        <span class='nav-label'>Peserta Didik</span>\n";
                echo "    </a>\n";
                echo "    <ul class='collapse list-unstyled' id='Murid'>\n";
                echo "        <li>\n";
                echo "            <a href='".$tbl_website['manage_dir']."/siswa'>Siswa</a>\n";
                echo "        </li>\n";
                echo "        <li>\n";
                echo "            <a href='".$tbl_website['manage_dir']."/mutasi'>Mutasi</a>\n";
                echo "        </li>\n";
                echo "    </ul>\n";
                echo "</li>\n\n";

                echo "<li>\n";
                echo "   <a href='#Pelanggaran' data-toggle='collapse' aria-expanded='false' class='dropdown-toggle'>\n";
                echo "        <i class='fas fa-exclamation-circle' style='font-size: 23px'></i>\n";
                echo "        <span class='nav-label'>Pelanggaran</span>\n";
                echo "   </a>\n";
                echo "   <ul class='collapse list-unstyled' id='Pelanggaran'>\n";
                echo "        <li>\n";
                echo "            <a href='".$tbl_website['manage_dir']."/pelanggaran'>Riwayat Pelanggaran</a>\n";
                echo "        </li>\n";
                echo "   </ul>\n";
                echo "</li>\n\n";

                echo "<li>\n";
                echo "    <a href='#Keuangan' data-toggle='collapse' aria-expanded='false' class='dropdown-toggle'>\n";
                echo "        <i class='fas fa-money-bill-alt'></i>\n";
                echo "        <span class='nav-label'>Keuangan</span>\n";
                echo "    </a>\n";
                echo "    <ul class='collapse list-unstyled' id='Keuangan'>\n";
                echo "        <li>\n";
                echo "            <a href='".$tbl_website['manage_dir']."/tagihan'>Tagihan</a>\n";
                echo "        </li>\n";
                echo "    </ul>\n";
                echo "</li>\n\n";

                echo "<li>\n";
                echo "    <a href='".$tbl_website['manage_dir']."/user'>\n";
                echo "        <i class='fas fa-lock' style='font-size:23px'></i>\n";
                echo "        <span class='nav-label'> User List</span>\n";
                echo "    </a>\n";
                echo "</li>\n\n";

                echo "<li>\n";
                echo "    <a href='".$tbl_website['manage_dir']."/configuration'>\n";
                echo "        <i class='fas fa-cog' style='font-size:23px'></i>\n";
                echo "        <span class='nav-label'> Web Configuration</span>\n";
                echo "    </a>\n";
                echo "</li>\n\n";
                }
                ?>
                <li>
                    <a href="<?php echo $tbl_website['manage_dir'];; ?>/profil">
                        <i class="fas fa-cog" style="font-size:23px"></i>
                        <span class="nav-label"> Ubah Profil</span>
                    </a>
                </li>


                <li>
                    <a href="account/logout">
                        <i class="fas fa-sign-out-alt" style="font-size:23px"></i>
                        <span class="nav-label"> Keluar</span>
                    </a>
                </li>
            </ul>
        </nav>