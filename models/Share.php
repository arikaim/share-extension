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
use Arikaim\Core\Db\Traits\Status;
use Arikaim\Core\Db\Traits\OptionsAttribute;

/**
 * Share model class
 */
class Share extends Model  
{
    use Uuid,    
        Status,   
        OptionsAttribute,
        Find;
    
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'share_buttons';

    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'namespace',
        'slug',
        'title',
        'description',
        'status'      
    ];
    
    /**
     * Disable timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
