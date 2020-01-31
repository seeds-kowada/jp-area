<?php

namespace JpArea;

use JpArea\Exception\InvalidAreaException;

/**
 * Class Utility
 * @package JpArea
 */
class JpArea
{
    /**
     * @param $code
     * @return \JpArea\AreaInterface
     * @throws \JpArea\Exception\InvalidAreaException
     */
    public static function get($code)
    {
        foreach (self::all() as $area) {
            if ($area->getCode() == $code) {
                return $area;
            }
        }

        throw new InvalidAreaException();
    }

    /**
     * @param $code
     * @return bool
     */
    public static function exists($code)
    {
        try {
            self::get($code);
            return true;
        } catch (InvalidAreaException $e) {
            return false;
        }
    }

    /**
     * @return \JpArea\AreaInterface[]
     */
    public static function all()
    {
        $area = self::asList();

        return array_map(function ($code, $name) {
            return new Area($code, $name);
        }, array_keys($area), $area);
    }

    /**
     * @return array
     */
    public static function asList()
    {
        return array(
            1 => '北海道',
            2 => '東北',
            3 => '関東',
            4 => '中部',
            5 => '近畿',
            6 => '中国',
            7 => '四国',
            8 => '九州',
        );
    }
}