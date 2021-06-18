<?php
class person
{
    /**
     * explicitly adding class properties are optional - but is a good practice
     */

    // var is considered as 'public'
    var $name;
    public $height;
    protected $_socialInsurance;
    private $__pinNumber = 123;

    public function __construct($newName)
    {
        $this->name = $newName;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return self
     */
    // protected methods and properties restrict access to those elements
    protected function _setName($newName)
    {
        if ($this->name != "Jimmy Two Guns")
        {
            $this->name = strtoupper($newName);
        }
    }

    /**
     * Get the value of pinNumber
     *
     * @return int
     */
    public function getPinNumber()
    {
        return $this->__pinNumber;
    }
}

// 'extends' is the keyword that enables inheritance
class employee extends person
{
    public function __construct($employeeName)
    {
        $this->_setName($employeeName);
    }

    protected function _setName($newName)
    {
        if ($newName == "Stefan Sucks")
        {
            $this->name = $newName;
        }
        elseif ($newName == "Johnny Fingers")
        {
            parent::_setName($newName);
        }

    }
}