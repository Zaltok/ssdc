<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 12.07.2016
 * Time: 10:31
 */
class DynamicTextBlock extends DataObject
{
    private static $db = array(
        'Title' => 'Varchar(255)',
        'BackendTitle' => 'Varchar(255)',
        'Description' => 'Text',
        'Hidden' => 'Boolean',
        'Parent' => 'Int',
        'ParentType' => 'Enum(array("Page")'
    );
}