<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 12.07.2016
 * Time: 11:46
 */
class SiteTreeOverlay extends DataObject
{
    private static $db = array(
        "Title" => "Varchar(255)",
        "MenuTitle" => "Varchar(100)",
        "Content" => "HTMLText",
        "MetaDescription" => "Text",
        "ExtraMeta" => "HTMLText('meta, link')",
    );
    private static $has_one = array(
        "Language" => "SiteLanguage",
        "Parent" => "SiteTree"
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}