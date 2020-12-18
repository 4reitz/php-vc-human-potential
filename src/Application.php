<?php

namespace VierCom\HumanPotential;

class Application
{
  private $jobOffer;
  private $developer;

  // Arguments order is clear: People first, everything else afterwards.
  public function __construct(Developer $developer, JobOffer $jobOffer)
  {
    $this->developer = $developer;
    $this->jobOffer = $jobOffer;
  }

  public function getApplicantsName()
  {
    return $this->developer->getName();
  }

  public function getPositionName()
  {
    return $this->jobOffer->getPosition();
  }
}
