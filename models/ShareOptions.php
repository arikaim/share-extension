<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) 2016-2018 Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license.html
 * 
*/
namespace Arikaim\Extensions\Share\Models;

use Illuminate\Database\Eloquent\Model;

use Arikaim\Core\Traits\Db\Uuid;
use Arikaim\Core\Traits\Db\Find;
use Arikaim\Core\Traits\Db\Options;

class ShareOptions extends Model  
{
    use Uuid,       
        Options,
        Find;
       
    protected $table = "share_buttons_options";

    protected $fillable = [
        'reference_id',
        'key',
        'value',
        'title',
        'description',
        'readonly',
        'hidden',
        'default',
        'type',
        'items'      
    ];
    
    public $timestamps = false;
}
