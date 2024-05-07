<?php

class Membership extends DB
{
    function getMembership()
    {
        $query = "SELECT * FROM membership";
        return $this->execute($query);
    }

    function getMembershipById($id)
    {
        $query = "SELECT * FROM membership WHERE id_membership='$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['nama'];
        $harga = $data['harga'];
        $deskripsi = $data['deskripsi'];

        $query = "INSERT INTO membership VALUES ('', '$nama', '$harga', '$deskripsi')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($data)
    {
        $id = $data['id'];
        $nama = $data['nama'];
        $harga = $data['harga'];
        $deskripsi = $data['deskripsi'];

        $query = "UPDATE membership SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id_membership='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM membership WHERE id_membership = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}