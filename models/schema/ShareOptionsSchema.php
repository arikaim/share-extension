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
use Arikaim\Core\Traits\Db\Options;

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

        $items = ['box_count' => 'Box count','button_count' => 'Button count','button' => 'Button'];
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'data-layout',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'data-layout',
            'title'         => 'Layout',
            'description'   => "Selects one of the different layouts that are available.",
            'default'       => 'button',
            'type'          =>  Options::$DROPDOWN,
            'items'         => \json_encode($items)
        ]); 

        $items = ['large' => 'Large','small' => 'Small'];
        $query->updateOrInsert([
            'reference_id'  => $share->id,
            'key'           => 'data-size',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'data-size',
            'title'         => 'Size',
            'description'   => "The button is offered in 2 sizes i.e. large and small.",
            'default'       => 'large',
            'type'          => Options::$DROPDOWN,
            'items'         => \json_encode($items)
        ]); 

        // Twitter
        $share = Self::getQuery('share_buttons')->where('name','=','twitter')->first();
        // text option
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'text',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'text',
            'title'         => 'Text',
            'description'   => "Pre-populated text highlighted in the Tweet composer.",
            'default'       => '',
            'type'          => Options::$TEXT            
        ]); 

        // size option 
        $items = ['large' => 'Large','small' => 'Small'];
        $query->updateOrInsert([
            'reference_id'  => $share->id,
            'key'           => 'size',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'size',
            'title'         => 'Size',
            'description'   => "Button size.",
            'default'       => 'large',
            'type'          => Options::$DROPDOWN,
            'items'         => \json_encode($items)
        ]);
        
        // hashtags option
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'hashtags',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'hashtags',
            'title'         => 'Hashtags',
            'description'   => "A comma-separated list of hashtags to be appended to default Tweet text.",
            'default'       => '',
            'type'          => Options::$TEXT            
        ]); 

        // via option
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'via',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'via',
            'title'         => 'Via',
            'description'   => "Attribute the source of a Tweet to a Twitter username.",
            'default'       => '',
            'type'          => Options::$TEXT            
        ]); 

        // related option
        $query->updateOrInsert([
            'reference_id' => $share->id,
            'key' => 'related',
        ],[
            'reference_id'  => $share->id,
            'key'           => 'related',
            'title'         => 'Related',
            'description'   => "A comma-separated list of accounts related to the content of the shared URI.",
            'default'       => '',
            'type'          => Options::$TEXT            
        ]); 
    }
}
