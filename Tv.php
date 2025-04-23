<?php
declare(strict_types=1);

class Tv
{
  public string $model;
  public float $diagonal;
  public int $dateCreate;
  public string $color;

  public function setModel(string $model): void
  {
    $this->model = $model;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  public function setDiagonal(float $diagonal): void
  {
    $this->diagonal = $diagonal;
  }

  public function setDateCreate(int $dateCreate): void
  {
    $this->dateCreate = $dateCreate;
  }
}