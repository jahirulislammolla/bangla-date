<?php

namespace BanglaDate;

class BanglaDate {
    private static $banglaMonths = [
        'বৈশাখ', 'জ্যৈষ্ঠ', 'আষাঢ়', 'শ্রাবণ', 'ভাদ্র', 'আশ্বিন',
        'কার্তিক', 'অগ্রহায়ণ', 'পৌষ', 'মাঘ', 'ফাল্গুন', 'চৈত্র'
    ];

    private static $banglaNumerals = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

    public static function convertToBanglaDate(\DateTime $date): array {

        $gregorianYear = (int)$date->format('Y');
        $gregorianMonth = (int)$date->format('m');
        $gregorianDay = (int)$date->format('d');

        // Simplified logic for Bangla year, month, and day
        $banglaYear = $gregorianYear - 593; // Adjust year difference
        $banglaMonthIndex = ($gregorianMonth + 8) % 12;
        $banglaDay = $gregorianDay; // Simplified

        return [
            'year' => self::toBanglaNumeral($banglaYear),
            'month' => self::$banglaMonths[$banglaMonthIndex],
            'day' => self::toBanglaNumeral($banglaDay),
        ];
    }

    public static function toBanglaNumeral($number): string {
        return str_replace(range(0, 9), self::$banglaNumerals, (string)$number);
    }

    public static function format(\DateTime $date): string {
        $banglaDate = self::convertToBanglaDate($date);
        return "{$banglaDate['day']} {$banglaDate['month']}, {$banglaDate['year']}";
    }
}
