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
use Arikaim\Core\Db\Model;

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
    protected $tableName = "share_options";

    /**
     * Create table
     *
     * @param \Arikaim\Core\Db\TableBlueprint $table
     * @return void
     */
    public function create($table) 
    {            
        $table->tableOptions('share_option_type','share_buttons',function($table) {
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
        $options = Model::ShareOptions('share');
    
        // Create options
        
        // facebook
        $share = Self::getQuery('share_buttons')->where('name','=','facebook')->first();
        $options->createOptions($share->id,'facebook');
       
        // twitter
        $share = Self::getQuery('share_buttons')->where('name','=','twitter')->first();
        $options->createOptions($share->id,'twitter');

        // pinterest
        $share = Self::getQuery('share_buttons')->where('name','=','pinterest')->first();
        $options->createOptions($share->id,'pinterest');
    }
}
