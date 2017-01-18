<?php

/**
 * Created by PhpStorm.
 * User: fayazk
 * Date: 16/1/17
 * Time: 2:16 AM
 */
class UPW_Meta
{
    public function __construct()
    {
        add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
    }

    public function general(){
        $prefix = '_upw_';
        $cmb = new_cmb2_box([
            'id' => 'upw_general',
            'title' => __('General Options'),
            'object_types' => ['upw'],
            'context' => 'normal',
            'priority' => 'high',
            'show_names' => true
        ]);
    }
}
