<?php

declare(strict_types=1);

namespace mcordingley\Regression\Linkings;

use InvalidArgumentException;

/**
 * Exponential
 *
 * Linking implementation that transforms data that follows an exponential curve
 * into and back out of linear space. No data points may have values that are
 * less than or equal to zero.
 */
final class Exponential extends Linking
{
    private $base;

    /**
     * __construct
     *
     * @param float|null $base Base of the exponential function. Defaults to M_E.
     */
    public function __construct(float $base = M_E)
    {
        $this->base = $base;
    }

    public function delinearize(float $value): float
    {
        return pow($this->base, $value);
    }

    public function linearize(float $value): float
    {
        if ($value <= 0) {
            throw new InvalidArgumentException('Attempting to take the logarithm of a non-positive number. Double-check your regression model.');
        }

        return log($value, $this->base);
    }
}