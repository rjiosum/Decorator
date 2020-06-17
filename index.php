<?php declare(strict_types=1);

use App\Classes\BaseShipping;
use App\Classes\InternationalShipping;

require_once __DIR__.'/vendor/autoload.php';

$shipping = new BaseShipping(100, 'Lap fence panel');
$shipping = new InternationalShipping($shipping);

echo $shipping->getDescription() . ' for £'.   $shipping->calculatePrice();