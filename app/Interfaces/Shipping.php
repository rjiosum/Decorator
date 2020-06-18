<?php declare(strict_types=1);


namespace App\Interfaces;


interface Shipping
{
    public function calculatePrice(): int;
    public function getDescription(): string;
}