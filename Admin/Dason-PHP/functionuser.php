<?php

// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "talasgo");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function ubah($data) {
    global $db;

    $id = $data["id_users"];
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $role = htmlspecialchars($data["role"]);

    

    $query = "UPDATE users SET
                name = '$name', 
                email = '$email', 
                username = '$username',
                role = '$role',
            WHERE id = $id
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;

    // Periksa apakah ada entri di tbl_testimoni yang merujuk ke pengguna yang akan dihapus
    $testimoniReferences = query("SELECT * FROM tbl_testimoni WHERE id_users = $id");

    if (count($testimoniReferences) > 0) {
        // Ada entri yang merujuk, Anda perlu menangani kasus ini sesuai dengan logika aplikasi Anda.
        // Misalnya, Anda dapat menghapus atau mengubah referensi di tbl_testimoni.
        // Contoh sederhana: hapus referensi
        mysqli_query($db, "DELETE FROM tbl_testimoni WHERE id_users = $id");
    }

    // Setelah menangani referensi di tbl_testimoni, baru hapus pengguna di tabel users
    mysqli_query($db, "DELETE FROM users WHERE id_users = $id");

    return mysqli_affected_rows($db);
}


function cari($keyword) {
    $query = "SELECT * FROM users 
                WHERE
            name LIKE '%$keyword%' OR
            role LIKE '%$keyword%'
        ";

    return query($query);
}


