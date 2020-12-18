<?php

namespace VierCom\HumanPotential;

class Company
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function need($position)
  {
    return new JobOffer($this, $position);
  }

  public function welcome($application)
  {
  }
}
