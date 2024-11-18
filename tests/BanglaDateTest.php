<?php

use BanglaDate\BanglaDate;
use PHPUnit\Framework\TestCase;


class BanglaDateTest extends TestCase {
    public function testConvertToBanglaDate() {
        $date = new \DateTime('2024-01-01');
        $banglaDate = BanglaDate::convertToBanglaDate($date);

        $this->assertEquals('১৪৩০', $banglaDate['year']);
        $this->assertEquals('পৌষ', $banglaDate['month']);
        $this->assertEquals('১', $banglaDate['day']);
    }

    public function testFormat() {
        $date = new \DateTime('2024-01-01');
        $formatted = BanglaDate::format($date);

        $this->assertEquals('১ পৌষ, ১৪৩০', $formatted);
    }
}
