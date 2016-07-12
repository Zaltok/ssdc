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
        "URLSegment" => "Varchar(255)",
        "Title" => "Varchar(255)",
        "MenuTitle" => "Varchar(100)",
        "Content" => "HTMLText",
        "MetaDescription" => "Text",
        "ExtraMeta" => "HTMLText('meta, link')",
        "ShowInMenus" => "Boolean",
        "ShowInSearch" => "Boolean",
        "Sort" => "Int",
        "HasBrokenFile" => "Boolean",
        "HasBrokenLink" => "Boolean",
        "ReportClass" => "Varchar",
        "CanViewType" => "Enum('Anyone, LoggedInUsers, OnlyTheseUsers, Inherit', 'Inherit')",
        "CanEditType" => "Enum('LoggedInUsers, OnlyTheseUsers, Inherit', 'Inherit')",
    );
    private static $has_one = array(
        "Language" => "SiteLanguage",
        "Parent" => "SiteTree"
    );

    public function getCMSFields()
    {

        $fields = parent::getCMSFields();
        $fields->removeByName("HasBrokenFile");
        $fields->removeByName("HasBrokenLink");
        return $fields;
    }
}