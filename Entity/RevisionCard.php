<?php

namespace App\Entity;

use App\Entity;

class RevisionCard extends Entity {
    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Revision")
     */
    private int $revision_id;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Card")
     */
    private int $card_id;

    /**
     * @Attribute(type="int", not_null=true)
     */
    private int $found;

    /**
     * @Attribute(type="int", not_null=true, foreign="App\Entity\Level")
     */
    private int $new_level_id;

    public static $table = 'revision_card';

    /**
     * Get the value of revision_id
     */ 
    public function getRevisionId(): int
    {
        return $this->revision_id;
    }

    public function getRevision(): Revision
    {
        return new Revision($this->revision_id);
    }

    /**
     * Set the value of revision_id
     *
     * @return self
     */ 
    public function setRevisionId(int $revision_id): RevisionCard
    {
        $this->revision_id = $revision_id;

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
    public function setCardId(int $card_id): RevisionCard
    {
        $this->card_id = $card_id;

        return $this;
    }

    /**
     * Get the value of found
     */ 
    public function getFound(): bool
    {
        return boolval($this->found);
    }

    /**
     * Set the value of found
     *
     * @return self
     */ 
    public function setFound(int $found): RevisionCard
    {
        $this->found = $found;

        return $this;
    }

    /**
     * Get the value of new_level_id
     */ 
    public function getNewLevelId(): int
    {
        return $this->new_level_id;
    }

    public function getNewLevel(): Level
    {
        return new Level($this->new_level_id);
    }

    /**
     * Set the value of new_level_id
     *
     * @return self
     */ 
    public function setNewLevelId(int $new_level_id): RevisionCard
    {
        $this->new_level_id = $new_level_id;

        return $this;
    }
}