<?php
use PHPUnit\Framework\TestCase;
class CITest extends TestCase
{
    private $CI;
    private $task;
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->task = new Task();
    }
    
    function testInvalidEmptyTask()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->task = null;
    }
    
    function testInvalidLongTask()
    {
        $this->expectException('InvalidArgumentException');
        $badValue;
        for ($i = 0; $i < 256; $i++)
        {
            $badValue .= 'a';
        }
        $this->task->task = $badValue;
    }
    
    function testValidTask()
    {
        $this->task->task = 'valid';
        $this->assertEquals('valid', $this->task->task);
    }
    
    function testInvalidEmptyPriority()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->priority = null;
    }
    
    function testInvalidHighPriority()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->priority = 4;
    }
    
    function testInvalidLowPriority()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->priority = 0;
    }
    
    function testValidPriority()
    {
        $this->task->priority = 1;
        $this->assertEquals(1, $this->task->priority);
    }
    
    function testInvalidEmptySize()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->size = null;
    }
    
    function testValidSize()
    {
        $this->task->size = 1;
        $this->assertEquals(1, $this->task->size);
    }
    
    function testInvalidEmptyGroup()
    {
        $this->expectException('InvalidArgumentException');
        $this->task->group = null;
    }
    
    function testValidGroup()
    {
        $this->task->group = 1;
        $this->assertEquals(1, $this->task->group);
    }
}
