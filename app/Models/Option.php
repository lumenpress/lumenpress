<?php

namespace App\Models;

use LumenPress\ACF\Concerns\HasFields;
use LumenPress\Nimble\Models\Option as NimbleOption;

class Option extends NimbleOption
{
    use HasFields;

    public function getAttribute($key)
    {
        if (is_null($value = parent::getAttribute($key))) {
            if (isset($this->acf->$key)) {
                return $this->acf->$key;
            }
        }

        return $value;
    }
}
