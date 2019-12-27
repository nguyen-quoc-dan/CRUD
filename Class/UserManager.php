<?php


class UserManager
{
    protected $userDB;

    public function __construct()
    {
        $dbname = "mysql:host=localhost;dbname=CRUD;charset=utf8";
        $username = "root";
        $password = "@Dannguyen123";
        $db = new DBconnect($dbname, $username, $password);
        $this->userDB = new UserDB($db->connect());
    }

    public function getList()
    {
        return $this->userDB->getList();
    }

    public function add($user)
    {
        $this->userDB->create($user);
    }

    public function delete($id)
    {
        $this->userDB->delete($id);
    }

    public function edit($id, $name, $age, $address, $groups)
    {
        $this->userDB->edit($id, $name, $age, $address, $groups);

    }
    public function getUserID($id)
    {
        return $this->userDB->getValueID($id);
    }
}