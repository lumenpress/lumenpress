<?php 

namespace App\Models;

use LumenPress\ACF\Concerns\HasFields;
use LumenPress\Nimble\Models\Post as NimblePost;

class Post extends NimblePost
{
    use HasFields;

    public function getAttribute($key)
    {
        if (! is_null($value = parent::getAttribute($key))) {
            return $value;
        }
        
        if (isset($this->acf->$key)) {
            return $this->acf->$key;
        }
    }
}
