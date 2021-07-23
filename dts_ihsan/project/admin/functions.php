<?php
//Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "dts");

//Menampilkan Data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//Menambah Data
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $sekolah = htmlspecialchars($data["sekolah"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $no_ot = htmlspecialchars($data["no_ot"]);
    $fb = htmlspecialchars($data["fb"]);
    $ig = htmlspecialchars($data["ig"]);
    $rencana = htmlspecialchars($data["rencana"]);

    $query = "INSERT INTO bio VALUES('','$nama','$jk','$sekolah','$jurusan','$alamat','$email','$no_hp','$no_ot','$fb','$ig','$rencana')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Mengahpus Data
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM `bio` WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//Mengupdate Data
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $sekolah = htmlspecialchars($data["sekolah"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $no_ot = htmlspecialchars($data["no_ot"]);
    $fb = htmlspecialchars($data["fb"]);
    $ig = htmlspecialchars($data["ig"]);
    $rencana = htmlspecialchars($data["rencana"]);

    $query = "UPDATE bio SET
    nama = '$nama', jk ='$jk', sekolah ='$sekolah', jurusan ='$jurusan', alamat ='$alamat', email ='$email', no_hp ='$no_hp', no_ot ='$no_ot', fb ='$fb', ig='$ig', rencana ='$rencana' 
    WHERE id =$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Search
/*function cari($keyword)
{
    $query = "SELECT * FROM bio WHERE nama LIKE '%$keyword%' OR
    sekolah LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR alamat LIKE '%$alamat'";

    return query($query);
}*/

//Menambah admin
function admin($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];

    $query = "INSERT INTO user VALUES('','$username','$password','$nama')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Mengupdate admin
function edit($data)
{
    global $conn;
    $id = $data["id"];
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];

    $query = "UPDATE user SET
    username = '$username', password ='$password', nama ='$nama' WHERE id =$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
