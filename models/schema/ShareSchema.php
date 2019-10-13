<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) 2016-2018 Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license.html
 * 
*/
namespace Arikaim\Extensions\Share\Models\Schema;

use Arikaim\Core\Db\Schema;

/**
 * Share buttons db table
 */
class ShareSchema extends Schema  
{    
    /**
     * Table name
     *
     * @var string
     */
    protected $table_name = "share_buttons";

    /**
     * Create table
     *
     * @param \Arikaim\Core\Db\TableBlueprint $table
     * @return void
     */
    public function create($table) 
    {            
        // columns    
        $table->id();      
        $table->prototype('uuid');   
        $table->status();         
        $table->userId();
        $table->position();
        $table->string('name')->nullable(false); 
        $table->string('title')->nullable(true); 
        $table->string('description')->nullable(true);      
        $table->string('namespace')->nullable(true); 
        $table->integer('click_count')->nullable(false)->default(0);  
        // index       
        $table->unique(['name','user_id']);   
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
}
