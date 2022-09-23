<?php

namespace App\Entity;

use App\Entity;
use App\Override\Satori\Visibility;

class Deck extends Entity {
    /**
     * @Attribute(type="varchar", length="255", not_null=true)
     */
    private string $title;

    /**
     * @Attribute(type="text")
     */
    private string $description;

    /**
     * @Attribute(type="text")
     */
    private string $image;

    /**
     * @Attribute(type="int", not_null=true)
     */
    private int $visibility;

    /**
     * @Attribute(type="int", foreign="App\Entity\User", not_null=true)
     */
    private int $user_id;

    public static $table = 'deck';
    

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return self
     */ 
    public function setTitle(string $title): Deck
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return self
     */ 
    public function setDescription(string $description): Deck
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return self
     */ 
    public function setImage(string $image): Deck
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of visibility
     */ 
    public function getVisibility(): int
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     *
     * @return self
     */ 
    public function setVisibility(int $visibility): Deck
    {
        $this->visibility = $visibility;

        return $this;
    }

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
    public function setUserId(int $user_id): Deck
    {
        $this->user_id = $user_id;

        return $this;
    }
}