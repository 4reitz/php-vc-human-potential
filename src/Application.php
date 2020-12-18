<?php

namespace VierCom\HumanPotential;

class Application
{
  private $jobOffer;
  private $developer;

  public function __construct($developer, $jobOffer)
  {
    $this->developer = $developer;
    $this->jobOffer = $jobOffer;
  }
}
