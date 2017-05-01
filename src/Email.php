<?php

final class Email {
    private $email;

    public function __construct($email) {
        $this->ensureIsValidEmail($email);
        $this->email = $email;
    }

    private function ensureIsValidEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(sprintf('"%s" is not a valid email address',$email));
        }
    }

    public function getEmail () {
        return $this->email;
    }
}
