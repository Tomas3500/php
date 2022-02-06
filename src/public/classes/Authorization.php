<?php
class Authorization extends ValidatorUserForm implements AuthorizationInterface
{
    public function __construct($loginIn, $passwordIn, $check)
    {
        $this->loginIn = $loginIn;
        $this->passwordIn = $passwordIn;
        $this->check = $check;
    }

    public function validLoginPassword()
    {
        if (isset($this->loginIn)) {
            $loginIn = trim(htmlspecialchars($this->loginIn));
            if ($loginIn === $_SESSION['login']) {
                return true;
            } else {
                setcookie('error_loginIn', 'неверный логин', 0, '/');
            }

        }
        return false;
        // TODO: Implement validLoginPassword() method.
    }


    public function validPassword()
    {
        if (isset($this->passwordIn)) {
            $passwordIn = trim(htmlspecialchars($this->passwordIn));
            if ($passwordIn === $_SESSION['password']) {
                return true;
            } else{
                setcookie('error_passwordIn', 'неверный пароль', 0, '/');
            }
        }
        return false;
        // TODO: Implement validPassword() method.
    }

    //save password
    public function savePasswordAndLoginCheckbox()
    {
        if ($this->check['value'] === true) {
            setcookie('save-loginIn', $this->loginIn, 0, '/');
            setcookie('save-passwordIn', $this->passwordIn, 0, '/');
        } else {
            setcookie('save-loginIn', '', time() - 3600);
            setcookie('save-passwordIn', '', time() - 3600);
            return true;
        }

        return false;

    }

    public function authorUser()
    {
        if ($this->validLoginPassword() && $this->validPassword() && $this->savePasswordAndLoginCheckbox()) {
            echo 'успешная авторизация';
        }
    }
}