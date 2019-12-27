<?php



class User
{
    protected $id;
    protected $name;
    protected $age;
    protected $address;
    protected $groups;

    public function __construct($name, $age, $address ,$groups)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
}