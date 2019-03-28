<?php

namespace KevinRuscoe\GeoHelpers\Test;

use PHPUnit\Framework\TestCase;
use KevinRuscoe\GeoHelpers\Point;

class PointTest extends TestCase
{
    public function test_it_can_return_lat_lng_array()
    {
        $point = new Point(1, 2);

        $this->assertEquals(
            [
                'lat' => 1.0,
                'lng' => 2.0,
            ],
            $point->toArray()
        );
    }

    public function test_it_cannot_create_outside_lat_lng_bounds()
    {
        $this->expectException(\OutOfBoundsException::class);

        $point = new Point(190, 90);
    }

    public function test_it_can_unpack_mysql_point()
    {
        $packed = hex2bin("000000000101000000EBF2F79C05BB07C07974232C2AB84A40");

        $point = (new Point)->unpackFromMysqlPoint($packed);

        $this->assertEquals(
            [
                'lat' => 53.438787,
                'lng' => -2.9663193
            ],
            $point->toArray()
        );
    }
}
