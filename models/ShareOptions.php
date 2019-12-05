<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Extensions\Share\Models;

use Illuminate\Database\Eloquent\Model;

use Arikaim\Core\Db\Traits\Uuid;
use Arikaim\Core\Db\Traits\Find;
use Arikaim\Core\Db\Traits\Options;

/**
 * ShareOptions model class
 */
class ShareOptions extends Model  
{
    use Uuid,       
        Options,
        Find;
    
    /**
     * Table name
     *
     * @var string
     */
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
