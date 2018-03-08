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
        if (empty($value))
        {
            throw new InvalidArgumentException('Task must have a value');
        }
        if (strlen($value) > 255)
        {
            throw new InvalidArgumentException('Task must be less than 255 characters');
        }
        $this->task = $value;
    }
    
    public function setPriority($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException('Priority must have a value');
        }
        if ($value > 3 || $value < 1)
        {
            throw new InvalidArgumentException('Priority must be between 1 and 3');
        }
        $this->priority = $value;
    }
    
    public function setSize($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException('Size must have a value');
        }
        $this->size = $value;
    }
    
    public function setGroup($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException('Group must have a value');
        }
        $this->group = $value;
    }
}
