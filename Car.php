<?php
declare(strict_types=1);

class Car
{
  public string $maker;
  public string $model;
  public int $dateCreate;
  public int $mileage;
  public int $power;
  public float $speed;
  public int $wieght;
  public string $color;

  public function setMaker(string $maker): void
  {
    $this->maker = $maker;
  }

  public function setModel(string $model): void
  {
    $this->model = $model;
  }

  public function setDateCreate(int $dateCreate): void
  {
    $this->dateCreate = $dateCreate;
  }

  public function setMileage(int $mileage): void
  {
    $this->mileage = $mileage;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  public function setPower(int $power): void
  {
    $this->power = $power;
  }

  public function drivingSpeed(): void
  {
    // получаем скорость авто
    $this->speed = sqrt( (2 * $this->power) / $this->wieght);
  }

}