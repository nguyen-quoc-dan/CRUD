<?php


class UserDB
{
    protected $conn;
    public function __construct($connect)
    {
        $this->conn = $connect;
    }
    public function getList()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['name'], $item['age'], $item['address'], $item ['groups']);
            $user->setId($item['id']);
            array_push($arr, $user);
        }
        return $arr;
    }

    public function create($user)
    {
        $name = $user->getName();
        $age = $user->getAge();
        $address = $user->getAddress();
        $groups = $user->getGroups();
        $sql = "INSERT INTO users (name, age, address, groups) VALUE (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $age);
        $stmt->bindParam(3, $address);
        $stmt->bindParam(4, $groups);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM users WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    
}
}