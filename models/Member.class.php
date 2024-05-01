<?php

class Member extends DB
{
    function getMember()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = " INSERT INTO `members`(`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone' )";

        // Mengeksekusi query
        return $this->execute($query);
    }
    
    function delete($id)
    {

        $query = "delete FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data, $id)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $query = "UPDATE INTO members set name = '$name', email='$email', phone='$phone' where id='$id'";
        return $this->execute($query);
    }
}
?>