<?php

namespace App\Entity;

use App\Entity;
use DateTime;

class DeckComment extends Entity {
    /**
     * @Attribute(type="int", foreign="App\Entity\User", not_null=true)
     */
    private int $user_id;

    /**
     * @Attribute(type="int", foreign="App\Entity\Deck", not_null=true)
     */
    private int $deck_id;

    /**
     * @Attribute(type="text")
     */
    private string $comment;

    /**
     * @Attribute(type="datetime", default="now")
     */
    private string $date_comment;

    public static $table = 'deck_comment';

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
    public function setUserId(int $user_id): DeckComment
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
    public function setDeckId(int $deck_id): DeckComment
    {
        $this->deck_id = $deck_id;

        return $this;
    }

    /**
     * Get the value of comment
     */ 
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return self
     */ 
    public function setComment(string $comment): DeckComment
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of date_comment
     */ 
    public function getDateComment(): string
    {
        return $this->date_comment;
    }

    /**
     * Set the value of date_comment
     *
     * @return self
     */ 
    public function setDateComment(DateTime $date_comment): DeckComment
    {
        $this->date_comment = $date_comment->format('Y-m-d H:i:s');

        return $this;
    }

}