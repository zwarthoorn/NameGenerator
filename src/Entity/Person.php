<?php
declare(strict_types=1);

namespace App\Entity;

class Person
{
    private string $name;

    private string $sureName;

    private string $gender;

    private string $region;

    private int $age;

    private string $title;

    private string $phone;

    private \DateTime $birthday;

    private string $email;

    private string $password;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): Person
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSureName(): string
    {
        return $this->sureName;
    }

    /**
     * @param string $sureName
     */
    public function setSureName(string $sureName): Person
    {
        $this->sureName = $sureName;

        return $this;

    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): Person
    {
        $this->gender = $gender;
        return $this;

    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region): Person
    {
        $this->region = $region;
        return $this;

    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;
        return $this;

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): Person
    {
        $this->title = $title;
        return $this;

    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): Person
    {
        $this->phone = $phone;
        return $this;

    }

    /**
     * @return \DateTime
     */
    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birtday
     */
    public function setBirthday(\DateTime $birtday): Person
    {
        $this->birthday = $birtday;
        return $this;

    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): Person
    {
        $this->email = $email;
        return $this;

    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): Person
    {
        $this->password = $password;
        return $this;

    }

    // there is posabilaty for a nice credit card here but not gona use it

}