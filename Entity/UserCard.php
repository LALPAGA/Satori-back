<?php

namespace App\Entity;

use App\Entity;
use DateTime;

class UserCard extends Entity {
    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\User")
     */
    private int $user_id;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Card")
     */
    private int $card_id;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Level")
     */
    private int $level_id;

    /**
     * @Attribute(type="datetime", not_null=true)
     */
    private string $last_revision;

    public static $table = 'user_card';


    /**
     * Get the value of user_id
     */ 
    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getUser(): User
    {
        return new User($this->user_id);
    }

    /**
     * Set the value of user_id
     *
     * @return self
     */ 
    public function setUserId(int $user_id): UserCard
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of card_id
     */ 
    public function getCardId(): int
    {
        return $this->card_id;
    }

    public function getCard(): Card
    {
        return new Card($this->card_id);
    }

    /**
     * Set the value of card_id
     *
     * @return self
     */ 
    public function setCardId(int $card_id): UserCard
    {
        $this->card_id = $card_id;

        return $this;
    }

    /**
     * Get the value of level_id
     */ 
    public function getLevelId(): int
    {
        return $this->level_id;
    }

    public function getLevel(): Level
    {
        return new Level($this->level_id);
    }

    /**
     * Set the value of level_id
     *
     * @return self
     */ 
    public function setLevelId(int $level_id): UserCard
    {
        $this->level_id = $level_id;

        return $this;
    }

    /**
     * Get the value of last_revision
     */ 
    public function getLastRevision(): string
    {
        return $this->last_revision;
    }

    /**
     * Set the value of last_revision
     *
     * @return self
     */ 
    public function setLastRevision(DateTime $last_revision): UserCard
    {
        $this->last_revision = $last_revision->format('Y-m-d H:i:s');

        return $this;
    }
}