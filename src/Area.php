<?php

namespace JpArea;

use JpArea\AreaInterface;

/**
 * Class Area
 * @package JpArea
 */
class Area implements AreaInterface
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * Area constructor.
     * @param $code
     * @param $name
     */
    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}