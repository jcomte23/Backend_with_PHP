<?php

use App\Validate;
use PHPUnit\Framework\TestCase;


class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email=Validate::email('jcomte23@outlook.com');
        $this->assertTrue($email);
    }
}