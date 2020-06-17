<?php


namespace App\Interfaces;


interface Shipping
{
    public function calculatePrice(): int;
    public function getDescription(): string;
}