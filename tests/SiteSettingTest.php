<?php 

namespace App\Tests;

use App\Models\Page;
use LumenPress\ACF\Schema;
use LumenPress\Nimble\Models\Option;
use LumenPress\ACF\Models\FieldGroup;

class SiteSettingsTest extends TestCase
{
    /**
     * @group options
     */
    public function testSchema()
    {
        $result = Schema::create('site_settings', function($group) {
            $group->title('Site Settings');
            $group->location('options_page', 'theme-settings');
            $group->fields(function($field) {
                $field->image('favicon');
                $field->textarea('tracking_code');
            });
        });
    }

    /**
     * @group options
     */
    public function testCreating()
    {
        
    }
}
