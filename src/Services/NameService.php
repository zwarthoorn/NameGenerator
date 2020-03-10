<?php


namespace App\Services;


use App\Entity\Person;
use App\Repository\PersonReposetory;
use GuzzleHttp\Client;

class NameService
{

    public static function getRandomName(): Person
    {
        $client = new Client();
        $response = $client->request('GET','https://uinames.com/api/?ext');
        $body = $response->getBody();

        return PersonReposetory::createUser(json_decode($body->getContents(), true));
    }


}