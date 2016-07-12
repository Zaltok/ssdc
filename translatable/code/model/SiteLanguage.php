<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 12.07.2016
 * Time: 11:55
 */
class SiteLanguage extends DataObject
{
    private static $db = array(
        "Name" => "Varchar(255)",
        "Shortcode" => "Varchar(2)",
    );

    private static $has_one = array(
        "Flag" => "Image"
    );


}