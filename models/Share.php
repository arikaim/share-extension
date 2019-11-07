<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) 2016-2018 Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Extensions\Share\Models;

use Illuminate\Database\Eloquent\Model;

use Arikaim\Extensions\Share\Models\ShareOptions;

use Arikaim\Core\Traits\Db\Uuid;
use Arikaim\Core\Traits\Db\Find;
use Arikaim\Core\Traits\Db\Status;

/**
 * Share model class
 */
class Share extends Model  
{
    use Uuid,    
        Status,   
        Find;
    
    /**
     * Table name
     *
     * @var string
     */
    protected $table = "share_buttons";

    protected $fillable = [
        'namespace',
        'name',
        'title',
        'description',
        'status'      
    ];
    
    public $timestamps = false;

    /**
     * Options relation
     *
     * @return mixed
     */
    public function options()
    {
        return $this->hasMany(ShareOptions::class,'reference_id');
    }
}
