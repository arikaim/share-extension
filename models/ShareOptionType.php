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
use Arikaim\Core\Db\Traits\Options\OptionType;

/**
 * Share Option Type model class
 */
class ShareOptionType extends Model  
{
    use Uuid,       
        OptionType,
        Find;
    
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'share_option_type';   

    /**
     * Disable timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
