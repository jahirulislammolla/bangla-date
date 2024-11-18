# Bangla Date Package

A PHP package to convert Gregorian dates to Bangla dates and format them with Bangla numerals.

## Installation
```bash
composer require bangla-date/bangla-date

```

## Convert Gregorian Date to Bangla Date
Use the convertToBanglaDate method to get the Bangla year, month, and day from a Gregorian date:

```
<?php

require 'vendor/autoload.php';

use BanglaDate\BanglaDate;

// Create a DateTime object
$date = new \DateTime('2024-01-01');

// Convert to Bangla date
$banglaDate = BanglaDate::convertToBanglaDate($date);

echo "Year: " . $banglaDate['year'] . PHP_EOL;    // Year: ১৪৩০
echo "Month: " . $banglaDate['month'] . PHP_EOL;  // Month: পৌষ
echo "Day: " . $banglaDate['day'] . PHP_EOL;      // Day: ১

```
