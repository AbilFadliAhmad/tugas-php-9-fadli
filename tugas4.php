<?php
class User {
    public $username;

    function setUsername($username) {
        $this->username = $username;
    }

    function getUsername() {
        return $this->username;
    }
}

// Contoh penggunaan
$user = new User();
$user->setUsername("Abil");
echo $user->getUsername();
?>
