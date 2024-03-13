<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styles/main.css">
    <title>Detail Siswa</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

body {
    display: flex;
}

.header {
    color: #fff;
    height: 100vh;
    width: 14rem;
    border-radius: 0em 1em 1em 0;
    background: #1d1d1d;
    display: flex;
    flex-direction: column;
    position: fixed;
}

.navUpper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    background: #2c2c2c;
    width: 100%;
    padding: 1em;
}

.bx-menu-alt-left {
    cursor: pointer;
    color: #fff;
}

.search {
    background: #fff;
    text-align: center;
    border: none;
    padding: 4px;
    border-radius: 8px;
    width: 200px;
}

.search::placeholder {
    color: #323232;
}

.navWrap {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.navWrap * {
    border-radius: 5px;
    padding: 4px;
    transition: 0.2s;
}

.navWrap a {
    text-decoration: none;
    color: #fff;
    font-size: 14px;
}

.navWrap h5 {
    cursor: pointer;
}

.navWrap a:hover {
    background: #00ff620b;
    color: #3bff93;
}

.container {
    max-width: 1000px;
    margin: 100px auto 40px;
    background-color: #fff;
    margin-left: 20%;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.5em;
}

table {
    border-collapse: collapse;
    width: 80%;
    font-size: 0.7em; /* perkecil ukuran font di dalam tabel */
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    width: 40%;
    padding: 6px; /* perkecil padding di dalam sel tabel */
}

th {
    background-color: #f2f2f2;
}

.action-column {
    width: 120px; /* perkecil lebar kolom aksi */
}

.action-column a {
    display: inline-block;
    padding: 4px 8px; /* perkecil padding tombol aksi */
    text-decoration: none;
    border-radius: 4px;
    margin-right: 5px;
    font-size: 0.85em; /* perkecil ukuran font tombol aksi */
}

form {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

input[type="text"] {
    padding: 6px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button[type="submit"] {
    padding: 6px 12px;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.9em; /* perkecil ukuran font tombol submit */
}

button[type="submit"]:hover {
    background-color: #45a049;
}

.edit-link,
.delete-link {
    padding: 4px 8px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.85em; /* perkecil ukuran font tombol edit dan delete */
}

.edit-link:hover {
    background-color: #45a049;
}

.delete-link:hover {
    background-color: #db4433;
}

</style>

</style>

    </style>
</head>
<body>
    <div class="navUpper">
        <div class="menu">  
            <i class='bx bx-menu-alt-left menuActive' ></i>
        </div>
    </div>
    <div class="header headerActive" id="header">
        <div class="nav">
            <div class="navWrap">
                <h5>Menu</h5>
                <a href="home.php">
                    <i class='bx bxs-home'></i>
                    Beranda
                </a>
                <a href="login.php">
                    <i class='bx bx-log-out-circle'></i>
                    Keluar
                </a>
                <h5>Daftar Siswa</h5>
                <a href="admin.php">
                    <i class='bx bxs-user'></i>
                    Profil Siswa
                </a>
                <a href="perencanaan_karir_siswa.php">
                <i class='bx bx-add-to-queue'></i>
                    Perencanaan Karir Siswa
                </a>
                <a href="siswa_berprestasi.php">
                <i class='bx bx-bar-chart-alt-2'></i>
                    Siswa Berprestasi
                </a>
                <a href="minat&bakat.php">
                <i class='bx bx-add-to-queue'></i>
                    Minat Dan Bakat Siswa
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Profil Siswa</h2>
        <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Cari berdasarkan nama siswa...">
        <button type="submit">Cari</button>
    </form>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <th>Alamat Orang Tua</th>
                <th>Pekerjaan Orang Tua</th>
                <th>Pendidikan Orang Tua</th>
                <th>Pendapatan Orang Tua</th>
                <th>Nomor Handphone Orang Tua</th>
                <th>Pihak yang Membiayai Sekolah</th>
                <th>Riwayat Penyakit</th>
                <th>Riwayat Pendidikan</th>
                <th>Nomor Handphone Siswa</th>
                <th>Alamat / Tempat Tinggal</th>
                <th>Teman Terdekat / Sahabat</th>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                <th>Aksi</th>
            </tr>
            <?php
                $servername = "localhost"; 
                $username = "root"; 
                $password = "htmlyu"; 
                $dbname = "data_siswa";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $nama_siswa = isset($_GET['nama_siswa']) ? $_GET['nama_siswa'] : '';

                $sql = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$nama_siswa%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nama_siswa"] . "</td>";
                        echo "<td>" . $row["alamat_orangtua"] . "</td>";
                        echo "<td>" . $row["pekerjaan_orangtua"] . "</td>";
                        echo "<td>" . $row["pendidikan_orangtua"] . "</td>";
                        echo "<td>" . $row["pendapatan_orangtua"] . "</td>";
                        echo "<td>" . $row["nomor_hp_orangtua"] . "</td>";
                        echo "<td>" . $row["biaya_sekolah"] . "</td>";
                        echo "<td>" . $row["riwayat_penyakit"] . "</td>";
                        echo "<td>" . $row["riwayat_pendidikan"] . "</td>";
                        echo "<td>" . $row["nomor_hp_siswa"] . "</td>";
                        echo "<td>" . $row["tinggal_dengan"] . " - " . $row["jarak_rumah_ke_sekolah"] . " - " . $row["transportasi"] . "</td>";
                        echo "<td>" . $row["teman_terdekat"] . "</td>";
                        // Tambahkan kolom lainnya sesuai kebutuhan
                        echo "<td>";
                        echo "<form method='POST' action='edit.php'>";
                        echo "<input type='hidden' name='siswa_id' value='" . $row["id"] . "'>";
                        echo "<button type='submit' class='edit-btn' name='edit'>Edit</button>";
                        echo "</form>";
                        echo "<form method='POST' action='delete.php'>";
                        echo "<input type='hidden' name='siswa_id' value='" . $row["id"] . "'>";
                        echo "<button type='submit' class='delete-btn' name='delete' onclick='return confirmDelete()'>Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='13'>Data siswa tidak ditemukan.</td></tr>";
                }
                $conn->close();
            ?>
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</body>
</html>
