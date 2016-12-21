<?php

namespace Valerian\Html;

class Input extends EmptyElement
{
    /**
     * @var string
     */
    protected $elementName = 'input';

    /**
     * Input constructor.
     * @param string $type
     * @param string $name
     */
    public function __construct($type, $name)
    {
        $this->type($type);
        $this->name($name);
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function type($type)
    {
        $this->attribute('type', $type);
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function name($name)
    {
        $this->attribute('name', $name);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function value($value)
    {
        $this->attribute('value', $value);
        return $this;
    }
}
