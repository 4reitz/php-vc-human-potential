<?php

namespace VierCom\HumanPotential;

class JobOffer
{
  private $company;
  private $position;

  public function __construct($company, $position)
  {
    $this->company = $company;
    $this->position = $position;
  }
}
