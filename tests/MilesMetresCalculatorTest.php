<?php

namespace KevinRuscoe\GeoHelpers\Test;

use PHPUnit\Framework\TestCase;
use KevinRuscoe\GeoHelpers\MilesMetresCalculator;

class MilesMetresCalculatorTest extends TestCase
{
    public function test_it_can_calculate_miles_to_metres()
    {
        $this->assertEquals(
            1609.344,
            MilesMetresCalculator::milesToMetres(1)
        );
    }

    public function test_it_can_calculate_metres_to_miles()
    {
        $this->assertEquals(
            0.0006213712,
            MilesMetresCalculator::metresToMiles(1)
        );
    }
}
