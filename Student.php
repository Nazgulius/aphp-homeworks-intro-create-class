<?php 
declare(strict_types=1);


class Student
{
  public string $name;
  public string $surname;
  public int $age;
  public string $faculty;
  public int $course;
  public int $timeLerning;

  // set
  public function setName(string $name): void
  {
    $this->name = ucfirst($name);
  }

  public function setSurname(string $surname): void
  {
    $this->surname = ucfirst($surname);
  }

  public function setFaculty(string $faculty): void
  {
    $this->faculty = ucfirst($faculty);
  }

  public function setAge(int $age): void
  {
    $this->age = $age;
  }

  public function setCourse(int $course): void
  {
    $this->course = $course;
  }


  // get
  public function getName(): string
  {
    return $this->name;
  }

  public function getSurname(): string
  {
    return $this->surname;
  }

  public function getFaculty(): string
  {
    return $this->faculty;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function getCourse(): int
  {
    return $this->course;
  }


  // other
  public function lerningTime (int $time): int
  {
    return $this->timeLerning + $time;
  }
}