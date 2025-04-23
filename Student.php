<?php 
declare(strict_types=1);


class Spudent
{
  public string $name;
  public string $surname;
  public int $age;
  public string $faculty;
  public int $course;
  public int $timeLerning;


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

  public function lerningTime (int $time): int
  {
    return $this->timeLerning + $time;
  }
}