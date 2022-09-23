<?php

namespace App\Entity;

use App\Entity;

class UserMeta extends Entity {
    /**
     * @Attribute(type="varchar", length="255", not_null=true)
     */
    private string $meta_key;

    /**
     * @Attribute(type="text")
     */
    private string $meta_value;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\User")
     */
    private int $user_id;

    public static $table = 'user_meta';

    
    /**
     * Get the value of meta_key
     */ 
    public function getMetaKey(): string
    {
        return $this->meta_key;
    }

    /**
     * Set the value of meta_key
     *
     * @return self
     */ 
    public function setMetaKey(string $meta_key): UserMeta
    {
        $this->meta_key = $meta_key;

        return $this;
    }

    /**
     * Get the value of meta_value
     */ 
    public function getMetaValue(): string
    {
        return $this->meta_value;
    }

    /**
     * Set the value of meta_value
     *
     * @return self
     */ 
    public function setMetaValue(string $meta_value): UserMeta
    {
        $this->meta_value = $meta_value;

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
    public function setUserId(int $user_id): UserMeta
    {
        $this->user_id = $user_id;

        return $this;
    }
}