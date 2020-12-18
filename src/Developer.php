<?php

namespace VierCom\HumanPotential;

class Developer {
  private $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function createApplicationFor(JobOffer $offer)
  {
    return new Application($this, $offer);
  }

  public function getName()
  {
    return $this->name;
  }
}
