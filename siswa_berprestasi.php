<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Berprestasi</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

.mainPage {
    color: #fff;
    background: #232323;
    width: 100%;
    height: 100vh;
}

.container {
    max-width: 800px;
    margin: 80px auto 20px;
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

.action-column {
    width: 150px;
}

.action-column a {
    display: inline-block;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 4px;
    margin-right: 5px;
}



form {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

input[type="text"] {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button[type="submit"] {
    padding: 8px 16px;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
.edit-link {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .edit-link:hover {
            background-color: #45a049;
        }

        .delete-link {
            background-color: #f44336;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .delete-link:hover {
            background-color: #db4433;
        }
    </style>
</head>
<body>
<div class="navUpper">
    <div class="menu">  
        <i class='bx bx-menu-alt-left menuActive'></i>
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
                Perencanaan karir siswa
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
<br>
<br>
<div class="container">
        <h2>Data Siswa Berprestasi</h2>
        <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Cari berdasarkan nama siswa...">
        <button type="submit">Cari</button>
    </form>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Prestasi</th>
                <th>Action</th>
            </tr>
            <?php
// Menghubungkan ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = "htmlyu"; // Ganti dengan password database Anda
$dbname = "data_siswa"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$sql = "SELECT * FROM siswa_berprestasi";
if (!empty($keyword)) {
    $sql .= " WHERE nama_siswa LIKE '%$keyword%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data ke dalam tabel
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $row['nama_siswa'] . "</td>";
        echo "<td>" . $row['prestasi'] . "</td>";
        echo "<td>
            <a href='edit_prestasi.php?id=" . $row['id'] . "' class='edit-link'>Edit</a> |
            <a href='?delete_id=" . $row['id'] . "' onclick='return confirmDelete()' class='delete-link'>Delete</a>
        </td>";
        echo "</tr>";
        $no++;
    }
} else {
    echo "<tr><td colspan='4'>0 results</td></tr>";
}
$conn->close();
?>

        </table>
    </div>

    <!-- JavaScript untuk konfirmasi penghapusan -->
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>

    <?php
    // Menghubungkan ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menghapus data jika delete_id tersedia
    if(isset($_GET['delete_id'])) {
        $id_to_delete = $_GET['delete_id'];
        $sql_delete = "DELETE FROM siswa_berprestasi WHERE id=$id_to_delete";
        if ($conn->query($sql_delete) === TRUE) {
            echo "<script>alert('Data berhasil dihapus.'); window.location.href='siswa_berprestasi.php';</script>";
            exit();
        } else {
            echo "<script>alert('Gagal menghapus data.');</script>";
        }
    }
    ?>
    </table>
    </div>
</body>
</html>
