<?php
class Register 
{
    private $error="";
   public function Evaluate_data($data)
   {
    # evaluate data
    foreach ($data as $key => $value) {
        # code...
        if (empty($value)) {
            # code...
            $this->error = $this->error . $key . " is empty! <br> ";
        }
        if ($key == "email") {
            # check valid email
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
                # code...
                $this->error = $this->error  . " enter a valid Email<br> ";
            }
            
        }
        if ($key == "fname") {
            # code...
            if (is_numeric($value)) {
                # code...
                $this->error = $this->error  . " First Name can not be a number<br> ";
            }
            if (strstr($value, " ")) {
                # check empty space
                $this->error = $this->error  . " First Name can not have spaces<br> ";

            }
        }
        if ($key == "lname") {
            # code...
            if (is_numeric($value)) {
                # code...
                $this->error = $this->error  . " Last Name can not be a number<br> ";
            }
            if (strstr($value, " ")) {
                # check empty space
                $this->error = $this->error  . " Last Name can not have spaces<br> ";

            }
        }
        if ($key == "pwd1" && $key == "pwd2") {
            # check if the first password and second password are equal
            if ($pwd1 !== $pwd2) {
                # code...
                $this->error = $this->error  . " password does not match ";
            }
        }
    }
    if ($this->error == "") {
        # no error
        $this->CreateUser($data);

    }else
    {

        return $this->error;
    }

   } 
   public function CreateUser($data)
   {
    # insert user into db
    $fname = ucfirst($data['fname']);
    $lname = ucfirst($data['lname']);
    $gender = $data['gender'];
    $email = $data['email'];
    $phone = $data['phone'];
    $pwd1 = $data['pwd1'];
    $pwd2 = $data['pwd2'];
    $hash_pwd = password_hash($pwd1, PASSWORD_DEFAULT);
    

    $query = "INSERT INTO users (first_name, last_name, gender, email, phone, pwd) 
    VALUES ('$fname', '$lname', '$gender', '$email', '$phone', '$hash_pwd')";

    $DB = new Db ();
    $DB -> Write_db($query);

   }
}


?>