<?php

namespace App\Entity;

use App\Entity;

class DeckFollow extends Entity {
    /**
     * @Attribute(type="int", foreign="App\Entity\User", not_null=true)
     */
    private int $user_id;

    /**
     * @Attribute(type="int", foreign="App\Entity\Deck", not_null=true)
     */
    private int $deck_id;

    public static $table = 'deck_follow';

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
    public function setUserId(int $user_id): DeckFollow
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
    public function setDeckId(int $deck_id): DeckFollow
    {
        $this->deck_id = $deck_id;

        return $this;
    }

}