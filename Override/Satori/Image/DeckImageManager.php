<?php

namespace App\Override\Satori\Image;

class DeckImageManager extends ImageManager {
    public function __construct()
    {
        $this->img_dir_path = IMAGES_PATH.'/deck';
        $this->img_dir_url = IMAGES_URL.'/deck';
    }
}