<?php

    $conn = mysqli_connect("localhost", "root", "root", "students");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;

    }

function tambah ($data){
    global $conn;
    $nama   =  htmlspecialchars($data["nama"]);
    $nis    =  htmlspecialchars($data["nis"]);
    $rayon  =  htmlspecialchars($data["rayon"]);
    $rombel =  htmlspecialchars($data["rombel"]);
    $status =  htmlspecialchars($data["status"]);
    $gambar =  htmlspecialchars($data["gambar"]);
    

    $query = "INSERT INTO siswa
                VALUES
            ('', '$nama', '$nis', '$rayon','$rombel', '$status', '$gambar')
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn) ;

    
}
function hapusdata( $id )
{
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubahData( $post ){
    global $conn;
    $id = $post["id"];  
    $nama = htmlspecialchars($post["nama"]);
    $nis = htmlspecialchars($post["nis"]);
    $rombel = htmlspecialchars($post["rombel"]);
    $rayon = htmlspecialchars($post["rayon"]);
    $status = htmlspecialchars($post["status"]);
    $gambar = htmlspecialchars($post["gambar"]);

    $query = "UPDATE siswa SET
              nama = '$nama',
              nis = '$nis',
              rayon = '$rayon',
              rombel = '$rombel',
              status = '$status',
              gambar = '$gambar'
              WHERE id =$id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM siswa WHERE 
    
    nama LIKE '%$keyword%' OR
    nis LIKE '%$keyword%' OR
    rayon LIKE '%$keyword%' OR
    rombel LIKE '%$keyword%' OR
    status LIKE '%$keyword%'
     ";
    return  query($query);

}
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $conf_password = mysqli_real_escape_string($conn, $data['conf_password']);

    if( $password !== $conf_password){
        echo"
        <script>
        alert('passowrd tidak sesuai');
        </script>

        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users 
    VALUES
    ('', '$username','$password');
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>