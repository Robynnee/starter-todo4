<?php

class CITest extends PHPUnit_Framework_TestCase
{
    private $CI;
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
    }
}
