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

use Arikaim\Extensions\Share\Models\ShareOptions;

use Arikaim\Core\Traits\Db\Uuid;
use Arikaim\Core\Traits\Db\Find;
use Arikaim\Core\Traits\Db\Status;

class Share extends Model  
{
    use Uuid,    
        Status,   
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

    public function options()
    {
        return $this->hasMany(ShareOptions::class,'reference_id');
    }

    public function hasButton($name)
    {

    }

    public function saveButton(array $data)
    {

    } 

    public function remove($id)
    {

    }
}
