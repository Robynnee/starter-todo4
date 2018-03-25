<?php
<<<<<<< HEAD
class Task extends CI_Model {

    // If this class has a setProp method, use it, else modify the property directly
    public function __set($key, $value) {
        // if a set* method exists for this key, 
        // use that method to insert this value. 
        // For instance, setName(...) will be invoked by $object->name = ...
        // and setLastName(...) for $object->last_name = 
        $method = 'set' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));
        if (method_exists($this, $method))
        {
                $this->$method($value);
                return $this;
        }

        // Otherwise, just set the property value directly.
        $this->$key = $value;
        return $this;
    }
}
=======
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
>>>>>>> 5b99c4794b9d91c4c594b4721a49f26cf4932b2b
