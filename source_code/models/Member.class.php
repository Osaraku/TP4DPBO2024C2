<?php

class Member extends DB
{
    function getMember()
    {
        $query = "SELECT member.id_member, member.`name`,  member.email, member.phone, membership.nama, member.`join` FROM member 
        JOIN membership ON member.id_membership=membership.id_membership
        ";
        return $this->execute($query);
    }
    
    function getMemberById($id)
    {
        $query = "SELECT member.id_member, member.`name`,  member.email, member.phone, membership.nama, member.`join` FROM member 
        JOIN membership ON member.id_membership=membership.id_membership WHERE id_member='$id'
        ";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_membership = $data['membership'];
        $join = $data['join'];


        $query = "INSERT INTO member values ('', '$name','$email','$phone', '$id_membership', '$join')";

        // Mengeksekusi query
        return $this->execute($query);
    }
    
    function edit($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_membership = $data['membership'];
        $join = $data['join'];

        $query = "UPDATE member SET `name`='$name', email='$email', phone='$phone', id_membership='$id_membership', `join`='$join' WHERE id_member='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM member WHERE id_member = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}