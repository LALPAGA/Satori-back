<?php

namespace App\Override\Satori\Image;

class UserImageManager extends ImageManager {
    public function __construct()
    {
        $this->img_dir_path = IMAGES_PATH.'/user';
        $this->img_dir_url = IMAGES_URL.'/user';
    }
}