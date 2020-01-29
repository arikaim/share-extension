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

use Arikaim\Extensions\Share\Models\ShareOptions;

use Arikaim\Core\Db\Traits\Uuid;
use Arikaim\Core\Db\Traits\Find;
use Arikaim\Core\Db\Traits\Status;
use Arikaim\Core\Db\Traits\Options\OptionsRelation;

/**
 * Share model class
 */
class Share extends Model  
{
    use Uuid,    
        Status,   
        OptionsRelation,
        Find;
    
    /**
     * Table name
     *
     * @var string
     */
    protected $table = "share_buttons";

    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'namespace',
        'name',
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

    /**
     * Options class name
     *
     * @var string
     */
    protected $optionsClass = ShareOptions::class;
}
