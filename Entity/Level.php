<?php

namespace App\Entity;

use App\Entity;

class Level extends Entity {
    /**
     * @Attribute(type="int", not_null=true)
     */
    private int $time_difference;

    public static $table = 'level';

    
    /**
     * Get the value of time_difference
     */ 
    public function getTimeDifference(): int
    {
        return $this->time_difference;
    }

    /**
     * Set the value of time_difference
     *
     * @return self
     */ 
    public function setTimeDifference(int $time_difference): Level
    {
        $this->time_difference = $time_difference;

        return $this;
    }
}