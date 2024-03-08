<?php
class Login 
{
    private $error = "";
    public function Evaluate($data)
    {
        $email = addslashes($data['email']);
        $pwd = addslashes($data['pwd']);
        
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $db = new Db();
        $result = $db -> Read_db($query);
        if ($result) {
            # verify password
            $row = $result[0];
            if (password_verify($pwd, $row['pwd'])) {
                # session data
                $_SESSION['email'] = $row['email'];

            }else
            {
         	$this->error .= "wrong password <br>";
            }
        }else
         {
       	$this->error .= "no such email found <br>";
         }
       return $this->error;
        
    }

    public function Check_Login($email)
   { 

    if ($email) {
   	# checking if user have loged in
   	$query = " SELECT * FROM users WHERE email = '$email' LIMIT 1 ";

		$DB = new Db ();
		$result = $DB -> Read_db($query);

       if ($result) {
             $user_data = $result[0];
          return $user_data;
       }
       else
          {
             header("location:admin_login.php");
             die;
          }    

      }else
          {
             header("location:admin_login.php");
             die;
          }
                            

    }
    
}

?>