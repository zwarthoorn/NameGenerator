<?php


namespace App\Repository;


use App\Entity\Person;

class PersonReposetory
{

    public static function createUser(array $user): Person
    {

        $person = new Person();

        $person
            ->setName($user['name'])
            ->setSureName($user['surname'])
            ->setGender($user['gender'])
            ->setRegion($user['region'])
            ->setAge($user['age'])
            ->setTitle($user['title'])
            ->setPhone($user['phone'])
            ->setEmail($user['email'])
            ->setPassword($user['password']);

        $datetime = new \DateTime();
        $dayofBirth = $datetime->setTimestamp($user['birthday']['raw']);
        $person->setBirthday($dayofBirth);

        return $person;

    }

}