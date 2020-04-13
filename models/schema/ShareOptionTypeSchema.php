<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Extensions\Share\Models\Schema;

use Arikaim\Core\Db\Schema;
use Arikaim\Core\Utils\Uuid;
use Arikaim\Core\Extension\Extension;

use Arikaim\Core\Db\Traits\Options\OptionType;

/**
 * Share option type db table
 */
class ShareOptionTypeSchema extends Schema  
{    
    /**
     * Table name
     *
     * @var string
     */
    protected $tableName = "share_option_type";

    /**
     * Create table
     *
     * @param \Arikaim\Core\Db\TableBlueprint $table
     * @return void
     */
    public function create($table) 
    {            
        $table->tableOptionType(function($table) {

        });
    }

    /**
     * Update table
     *
     * @param \Arikaim\Core\Db\TableBlueprint $table
     * @return void
     */
    public function update($table) 
    {              
    }

    /**
     * Insert or update rows in table
     *
     * @param Seed $seed
     * @return void
     */
    public function seeds($seed)
    {       
        $items = Extension::loadJsonConfigFile('buttons-option-type.json','share');
       
        $seed->createFromArray(['key'],$items,function($item) {
           
            $item['uuid'] = Uuid::create();
            $item['type'] = OptionType::getOptionTypeId($item['type']);
            $items = (isset($item['items']) == true) ? $item['items'] : null;
            $item['items'] = (is_array($items) == true) ? \json_encode($items) : $items;

            return $item;
        });
    }
}
