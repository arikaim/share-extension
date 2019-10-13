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

class Share extends Model  
{
    use Uuid,       
        Find;
       
    protected $table = "share_buttons";

    protected $fillable = [
        'namespace',
        'name',
        'title',
        'description',
        'status'      
    ];
    
    public $timestamps = false;
}
