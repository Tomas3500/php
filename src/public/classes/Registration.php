<?php
session_start();

class Registration extends ValidatorUserForm implements RegistrationInterface
{
    public $errorCount;

    public function __construct($login, $email, $password)
    {
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
    }

    public function validLogin()
    {
        $login = trim(htmlspecialchars($this->login));
        if (isset($login)) {
            setcookie('login', $login);
            if (strlen($login) < 5 || $login === '') {
                $this->errorCount++;
                setcookie('error_login', 'введите логин', 0, '/');
            } else {
                setcookie('error_login', '', time() - 3600);

                return true;
            }


        }
        return false;
        // TODO: Implement validLogin() method.
    }

    public function validEmail()
    {
        $email = trim(htmlspecialchars($this->email));
        $position = strpos($email, '@');
        if (isset($email)) {
            setcookie('email', $email);
            if ($position === true || $email === '') {
                $this->errorCount++;
                setcookie('error_email', 'введите корректно email', 0, '/');
            } else {
                setcookie('error_email', '', time() - 3600);

                return true;
            }

        }
        return false;
        // TODO: Implement validName() method.
    }

    public function validPassword()
    {
        $password = trim(htmlspecialchars($this->password));
        if (isset($password)) {
            if ($password === '' || preg_match('~[^A-Z0-9_]~', $password)) {
                $this->errorCount++;
                setcookie('error_password', 'введите корректно пароль', 0, '/');
            } else {
                setcookie('error_password', '', time() - 3600);

                return true;
            }
        }
        return false;
        // TODO: Implement validPassword() method.
    }

    public function validAvatar()
    {
        $arrTypeFile = ['image/png', 'image/jpg', 'image/jpeg'];
        if (!in_array($_FILES['avatar']['type'], $arrTypeFile)) {
            setcookie('error_file', 'выберете файл png,jpg,jpeg', 0, '/');
        }
        if ($_FILES['avatar']['name'] === '') {
            setcookie('error_long', 'выберите файл', 0, '/');
        } else {
            setcookie('error_long', '', time() - 3600);
            $filePhoto = $_FILES['avatar'];
            $current_path = $_FILES['avatar']['tmp_name'];
            $file_name = $_FILES['avatar']['name'];
            $new_path = dirname(__FILE__) . '/uploads/' . $file_name;
            $file_path = 'uploads/' . $file_name;
            move_uploaded_file($current_path, $new_path);

            return true;

        }
        return false;
    }

    public function registUser()
    {
        if ($this->validLogin() && $this->validEmail() && $this->validPassword() && $this->validAvatar()) {
            $_SESSION['login'] = $this->login;
            $_SESSION['password'] = $this->password;
            header('Location: http://example.palmo/view/autherUser.php');
        } else {
            header('Location: http://example.palmo/index.php');
        }


    }

}