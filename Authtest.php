<?php
require_once '../src/login.php';
require_once '../src/signup.php';
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase {
    public function testValidLogin() {
        $result = login.php('test@example.com', 'Password123');
        $this->assertEquals("Login Successful", $result);
    }

    public function testValidSignup() {
        $result = <signup class="php"></signup>('newuser@example.com', 'StrongPass123');
        $this->assertEquals("Sign-Up Successful", $result);
    }
}