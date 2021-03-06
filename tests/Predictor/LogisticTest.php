<?php

namespace MCordingley\Regression\Tests\Predictor;

use MCordingley\Regression\Predictor\Logistic;
use PHPUnit\Framework\TestCase;

class LogisticTest extends TestCase
{
    public function testPredict()
    {
        $predictor = new Logistic([-3.98997907333, 0.2264425786179, 0.80403754928, -0.67544292796369, -1.340203916468, -1.5514636769182]);
        static::assertEquals(0.308, round($predictor->predict([1, 2, 3.39, 0, 0, 0]), 3));
    }
}