<?php
class Task extends Entity
{
    private $task;
    private $priority;
    private $size;
    private $group;
    private $deadline;
    private $status;
    private $flag;
    
    public function __get($key)
    {
        return $this->$key;
    }
    
    // setters
    
    public function setTask($value)
    {
        $this->task = $value;
    }
    
    public function setPriority($value)
    {
        $this->priority = $value;
    }
    
    public function setSize($value)
    {
        $this->size = $value;
    }
    
    public function setGroup($value)
    {
        $this->group = $value;
    }
    
    public function setDeadline($value)
    {
        $this->deadline = $value;
    }
    
    public function setStatus($value)
    {
        $this->status = $value;
    }
    
    public function setFlag($value)
    {
        $this->flag = $value;
    }
}
