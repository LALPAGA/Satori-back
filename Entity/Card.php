<?php

namespace App\Entity;

use App\Entity;

class Card extends Entity {
    /**
     * @Attribute(type="varchar", length="50", not_null=true)
     */
    private string $front_format;

    /**
     * @Attribute(type="text")
     */
    private string $front_content;

    /**
     * @Attribute(type="varchar", length="50", not_null=true)
     */
    private string $back_format;

    /**
     * @Attribute(type="text")
     */
    private string $back_content;

    /**
     * @Attribute(type="text")
     */
    private string $help;

    /**
     * @Attribute(type="int", foreign="App\Entity\Deck", not_null=true)
     */
    private int $deck_id;

    public static $table = 'card';

    /**
     * Get the value of front_format
     */ 
    public function getFrontFormat(): string
    {
        return $this->front_format;
    }

    /**
     * Set the value of front_format
     *
     * @return self
     */ 
    public function setFrontFormat(string $front_format): Card
    {
        $this->front_format = $front_format;

        return $this;
    }

    /**
     * Get the value of front_content
     */ 
    public function getFrontContent(): string
    {
        return $this->front_content;
    }

    /**
     * Set the value of front_content
     *
     * @return self
     */ 
    public function setFrontContent(string $front_content): Card
    {
        $this->front_content = $front_content;

        return $this;
    }

    /**
     * Get the value of back_format
     */ 
    public function getBackFormat(): string
    {
        return $this->back_format;
    }

    /**
     * Set the value of back_format
     *
     * @return self
     */ 
    public function setBackFormat(string $back_format): Card
    {
        $this->back_format = $back_format;

        return $this;
    }

    /**
     * Get the value of back_content
     */ 
    public function getBackContent(): string
    {
        return $this->back_content;
    }

    /**
     * Set the value of back_content
     *
     * @return self
     */ 
    public function setBackContent(string $back_content): Card
    {
        $this->back_content = $back_content;

        return $this;
    }

    /**
     * Get the value of help
     */ 
    public function getHelp(): string
    {
        return $this->help;
    }

    /**
     * Set the value of help
     *
     * @return self
     */ 
    public function setHelp(string $help): Card
    {
        $this->help = $help;

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
    public function setDeckId(string $deck_id): Card
    {
        $this->deck_id = $deck_id;

        return $this;
    }
}