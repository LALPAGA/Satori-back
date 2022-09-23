<?php

namespace App\Entity;

use App\Entity;

class Notification extends Entity {
    /**
     * @Attribute(type="varchar", length="255", not_null=true)
     */
    private string $title;

    /**
     * @Attribute(type="text")
     */
    private string $content;

    /**
     * @Attribute(type="int", not_null=true)
     */
    private int $timestamp;

    /**
     * @Attribute(type="int", length="1")
     */
    private int $seen;

    /**
     * @Attribute(type="int", foreign="App\Entity\User", not_null=true)
     */
    private int $user_id;

    public static $table = 'notification';
    

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
    public function setTitle(string $title): Notification
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return self
     */ 
    public function setContent(string $content): Notification
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of timestamp
     */ 
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * Set the value of timestamp
     *
     * @return self
     */ 
    public function setTimestamp(int $timestamp): Notification
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get the value of seen
     */ 
    public function getSeen(): bool
    {
        return boolval($this->seen);
    }

    /**
     * Set the value of seen
     *
     * @return self
     */ 
    public function setSeen(int $seen): Notification
    {
        $this->seen = $seen;

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
    public function setUserId(int $user_id): Notification
    {
        $this->user_id = $user_id;

        return $this;
    }
}