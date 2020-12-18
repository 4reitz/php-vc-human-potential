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
    echo "Hey, gut, Du hast es geschafft! Schön, dass Du mitgemacht hast und Dich für 4Com interessierst. Schicke uns doch einfach Deine Bewerbung, dann können wir uns kennenlernen und vielleicht schon bald gemeinsam Neues denken und Neues schaffen!" . PHP_EOL . PHP_EOL;
    echo "Alle weiteren Informationen findest Du unter: https://www.4com.de/karriere/software-developer-fullstack-php/" . PHP_EOL;
  }
}
