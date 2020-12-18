<?php

namespace VierCom\HumanPotential;

class Company
{
  private $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function need(string $position)
  {
    return new JobOffer($this, $position);
  }

  public function welcome(Application $application)
  {
    $companyName = $this->name;
    $applicantName = $application->getApplicantsName();
    $position = $application->getPositionName();
    echo "Welcome aboard at ${companyName}, ${applicantName}, as our new ${position}." . PHP_EOL;
  }
}
