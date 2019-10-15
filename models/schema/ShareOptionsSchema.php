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
class ShareOptionsSchema extends Schema  
{    
    /**
     * Table name
     *
     * @var string
     */
    protected $table_name = "share_buttons_options";

    /**
     * Create table
     *
     * @param \Arikaim\Core\Db\TableBlueprint $table
     * @return void
     */
    public function create($table) 
    {            
        $table->tableOptions('share_buttons',function($table) {

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
     * @param Builder $query
     * @return void
     */
    public function seeds($query)
    {       
        // facebook       
        $share = Self::getQuery('share_buttons')->where('name','=','facebook')->first();

        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'data-layout',
        ],[
            'reference_id' => $share->id,
            'key' => 'data-layout',
            'title' => 'Layout',
            'description' => "Selects one of the different layouts that are available.",
            'default' => 'button'
        ]); 
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'data-size',
        ],[
            'reference_id' => $share->id,
            'key' => 'data-size',
            'title' => 'Size',
            'description' => "The button is offered in 2 sizes i.e. large and small.",
            'default' => 'large'
        ]); 
    }
}
