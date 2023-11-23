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

/**
 * Share buttons db table
 */
class ShareButtonsSchema extends Schema  
{    
    /**
     * Table name
     *
     * @var string
     */
    protected $tableName = 'share_buttons';

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
        $table->slig();
        $table->string('title')->nullable(true); 
        $table->string('description')->nullable(true);      
        $table->string('namespace')->nullable(true); 
        $table->options();

        // index       
        $table->unique(['name']);   
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
        $seed->create(['name' => 'facebook'],
        [
            'uuid'        => Uuid::create(),
            'title'       => 'Facebook',
            'description' => 'Facebook share button'
        ]); 

        $seed->create(['name' => 'twitter'],
        [
            'uuid'        => Uuid::create(),
            'title'       => 'Twitter',
            'description' => 'Twitter share button'
        ]); 

        $seed->create(['name' => 'pinterest'],
        [
            'uuid'        => Uuid::create(),
            'title'       => 'pinterest',
            'description' => 'Pinterest share button'
        ]); 
    }
}
