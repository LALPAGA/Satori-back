<?php

namespace App\Entity;

use App\Entity;
use DateTime;

class Revision extends Entity {
    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\User")
     */
    private int $user_id;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Deck")
     */
    private int $deck_id;

    /**
     * @Attribute(type="datetime", not_null=true)
     */
    private string $revision_date;

    public static $table = 'revision';


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
    public function setUserId(int $user_id): Revision
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of deck_id
     */ 
    public function getDeckId(): int
    {
        return $this->deck_id;
    }

    public function getDeck(): Deck
    {
        return new Deck($this->deck_id);
    }

    /**
     * Set the value of deck_id
     *
     * @return self
     */ 
    public function setDeckId(string $deck_id): Revision
    {
        $this->deck_id = $deck_id;

        return $this;
    }

    /**
     * Get the value of revision_date
     */ 
    public function getRevisionDate(): string
    {
        return $this->revision_date;
    }

    /**
     * Set the value of revision_date
     *
     * @return self
     */ 
    public function setRevisionDate(DateTime $revision_date): Revision
    {
        $this->revision_date = $revision_date->format('Y-m-d H:i:s');

        return $this;
    }
}