<?php

namespace App\Entity;

use App\Entity;

class User extends Entity {
    /**
     * @Attribute(type="varchar", length="50", unique=true, not_null=true)
     */
    private string $username;

    /**
     * @Attribute(type="varchar", length="255", unique=true, not_null=true)
     */
    private string $email;

    /**
     * @Attribute(type="varchar", length="255", not_null=true)
     */
    private string $password;

    /**
     * @Attribute(type="text")
     */
    private string $image;

    /**
     * @Attribute(type="int", length="1")
     */
    private int $is_admin;

    public static $table = 'user';
    

    /**
     * Get the value of username
     */ 
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return self
     */ 
    public function setUsername(string $username): User
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return self
     */ 
    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return self
     */ 
    public function setPassword(string $plain_password): User
    {
        $this->password = md5($plain_password);

        return $this;
    }

    public function checkPassword(string $plain_password): bool
    {
        return $this->password = md5($plain_password);
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
    public function setImage(string $image): User
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of is_admin
     */ 
    public function getIsAdmin(): bool
    {
        return boolval($this->is_admin);
    }

    /**
     * Set the value of is_admin
     *
     * @return self
     */ 
    public function setIsAdmin(int $is_admin): User
    {
        $this->is_admin = $is_admin;

        return $this;
    }
}