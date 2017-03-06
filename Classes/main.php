<?php
/**
 * Created by PhpStorm.
 * User: Darkfree
 * Date: 03.01.2017
 * Time: 10:19
 */
class User{
    public $name;     // Переменная доступна везде
    protected $age;   // Доступна в классе и в производных классах
    private $salary;  // Доступна только в этом классе

    public function __construct($username,$password)
    {
        if($this->validate_user($username,$password)){
            $this->name = $username;
        }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->age . ' ' . $this->salary ;
    }

    public function __destruct()
    {
        echo 'Object was destroyed';
    }

    private function validate_user($username,$password){
        return true;
    }
}

$user = new User("dark_free", "12345cod");
echo $user . '<br>';
