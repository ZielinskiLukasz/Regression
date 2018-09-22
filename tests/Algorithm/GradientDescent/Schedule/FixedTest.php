<?php

namespace MCordingley\Regression\Tests\Algorithm\GradientDescent\Schedule;

use MCordingley\Regression\Algorithm\GradientDescent\Schedule\Fixed;
use PHPUnit\Framework\TestCase;

class FixedTest extends TestCase
{
    public function testStep()
    {
        $schedule = new Fixed(1.0);
        $schedule->update([1.0]);
        static::assertEquals(1.0, $schedule->step(0));
    }
}
