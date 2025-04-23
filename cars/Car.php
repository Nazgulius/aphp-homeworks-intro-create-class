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

  // set
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

  public function setWieght(int $wieght): void
  {
    $this->wieght = $wieght;
  }


  // get
  public function getMaker(): string
  {
    return $this->maker;
  }

  public function getModel(): string
  {
    return $this->model;
  }

  public function getDateCreate(): int
  {
    return $this->dateCreate;
  }

  public function getMileage(): int
  {
    return $this->mileage;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function getPower(): int
  {
    return $this->power;
  }

  public function getWieght(): int
  {
    return $this->wieght;
  }

  // other
  public function drivingSpeed(): void
  {
    // получаем и записываем скорость авто
    $this->speed = sqrt( (2 * $this->power) / $this->wieght);
  }
}