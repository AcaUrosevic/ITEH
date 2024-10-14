<?php
class User
{
    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function login(User $user, mysqli $conn)
    {
        $query_string = "select * from user where username = '$user->username' and password = '$user->password'";
        return $conn->query($query_string);
    }
}
