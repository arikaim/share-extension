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

use Arikaim\Extensions\Share\Models\ShareOptionType;
use Arikaim\Extensions\Share\Models\ShareOptionsList;

use Arikaim\Core\Db\Traits\Uuid;
use Arikaim\Core\Db\Traits\Find;
use Arikaim\Core\Db\Traits\Options\Options;

/**
 * Share Options model class
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
    protected $table = 'share_options';

    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'reference_id',       
        'value',
        'key',
        'uuid',
        'type_id'       
    ];

    /**
     * Disable timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Option type model class 
     *
     * @var string
     */
    protected $optionTypeClass = ShareOptionType::class;

    /**
     * Options definitions model class
     *
     * @var string
     */
    protected $optionsDefinitionClass = ShareOptionsList::class;
}
