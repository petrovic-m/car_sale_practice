<?php

namespace App\Object;
class User
{
    //properties
    public $id;
    public $firstName;
    public $lastName;
    public $number;
    public $email;
    public $username;
    public $password;
    public $city;
    public $street;
    public $credits;
    public $created;
    public $role_id;
    private $tb_name = "user";
    //properties

    //userExist()
    public function userExist()
    {
        $query = "SELECT Email, Username 
                    FROM $this->tb_name 
                    WHERE Email=:Email 
                      AND Username=:Username";

        $params=[
            "Email"=>$this->email,
            "Username"=>$this->username
        ];

        return DatabaseQuery::queryExecute($query,$params);



    }
    //userExist()

    //insertUser()
    public function insertUser()
    {
        if($this->userExist())
        {
            return false;
        }
        $query = "CALL insertuser(:FirstName, :LastName, :Number, :Email, :Username, :Password, :City, :Street, :Credits, :Created, :Role_id)";
        $params = [
            "FirstName"=>$this->firstName,
            "LastName"=>$this->lastName,
            "Number"=>$this->number,
            "Email"=>$this->email,
            "Username"=>$this->username,
            "Password"=>$this->password,
            "City"=>$this->city,
            "Street"=>$this->street,
            "Credits"=>$this->credits,
            "Created"=>$this->created,
            "Role_id"=>$this->role_id
        ];
        return DatabaseQuery::queryExecute($query,$params);
    }
    //insertUser()

    //deleteUser()
    public function deleteUser($id)
    {
        $query="CALL deleteuser(:id)";
        $params = [
            "id"=>$id
        ];

        return DatabaseQuery::queryExecute($query,$params);
    }
    //deleteUser()

    //updateUser()
    public function updateUser($id)
    {
        $query="CALL updateuser(:id, :FirstName, :LastName, :Number, :Email, :Username, :Password, :City, :Street, :Credits, :Created, :Role_id)";
        $params = [
            "id"=>$id,
            "FirstName"=>$this->firstName,
            "LastName"=>$this->lastName,
            "Number"=>$this->number,
            "Email"=>$this->email,
            "Username"=>$this->username,
            "Password"=>$this->password,
            "City"=>$this->city,
            "Street"=>$this->street,
            "Credits"=>$this->credits,
            "Created"=>$this->created,
            "Role_id"=>$this->role_id
        ];

        return DatabaseQuery::queryExecute($query,$params);
    }
    //updateUser()

    //login()
    public function loginUser()
    {

        $query = "SELECT *
                  FROM $this->tb_name 
                  WHERE Email=:Email 
                    AND Password=:Password";

        $params = [
            "Email"=>$this->email,
            "Password"=>$this->password
        ];

        return DatabaseQuery::queryExecute($query, $params);

    }
    //login()



}