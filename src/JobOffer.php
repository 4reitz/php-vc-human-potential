<?php

namespace VierCom\HumanPotential;

class JobOffer
{
  private $company;
  private $position;

  public function __construct($company, string $position)
  {
    $this->company = $company;
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
