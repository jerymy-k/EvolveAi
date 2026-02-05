<?php

namespace App\Models;


class Opportunity
{

   private int $user_id = 0;
   private string $title;
   private string $description;
   private string $PossibleGain;
   private array $skills;
   private string $link;
   private string $status;

   public function __construct($question, $answer)
   {
      $this->title = $answer['title'];
      $this->description = $answer['description'];
      $this->PossibleGain = $answer['PossibleGain'];
      $this->skills = $answer['skills'];
      $this->link = $answer['link'];
      $this->status = $answer['status'];
   }

   public function getTitle(): string
   {
      return $this->title;
   }

   public function getDescription(): string
   {
      return $this->description;
   }

   public function getPossibleGain(): string
   {
      return $this->PossibleGain;
   }

   public function getSkills(): array
   {
      return $this->skills;
   }

   public function getLink(): string
   {
      return $this->link;
   }

   public function getStatus(): string
   {
      return $this->status;
   }

   public function getUserId(): int
   {
      return $this->user_id;
   }

   public function setTitle(string $title): void
   {
      $this->title = $title;
   }

   public function setDescription(string $description): void
   {
      $this->description = $description;
   }

   public function setPossibleGain(string $PossibleGain): void
   {
      $this->PossibleGain = $PossibleGain;
   }
   public function setSkills(array $skills): void
   {
      $this->skills = $skills;
   }
   public function setLink(string $link): void
   {
      $this->link = $link;
   }
   public function setStatus(string $status): void
   {
      $this->status = $status;
   }
   public function setUserId(int $user_id): void
   {
      $this->user_id = $user_id;
   }


   public function __toString(): string
   {
      return $this->title;
   }
}
