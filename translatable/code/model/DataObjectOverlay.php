<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 12.07.2016
 * Time: 11:54
 */
class DataObjectOverlay extends DataObject
{
    private static $db = array(

    );

    private static $has_one = array(
        "Parent" => "DataObject",

    );
}