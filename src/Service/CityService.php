<?php


namespace App\Service;


use App\Entity\City;

class CityService
{

    public function getAll(): array
    {
        if (array_key_exists("cities", $_SESSION)) {
            return $_SESSION;
        }
        return [];
    }

    public function save(City $city)
    {

        if (array_key_exists("cities", $_SESSION)) {
            if (!in_array($city->getCity(), $_SESSION["cities"])) {
                array_push($_SESSION["cities"], $city->getCity());
            }
        }
    }
}