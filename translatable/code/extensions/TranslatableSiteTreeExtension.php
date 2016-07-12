<?php

/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 12.07.2016
 * Time: 16:22
 */
class TranslatableSiteTreeExtension extends DataExtension
{
    private static $has_many = array(
        "SiteTreeOverlays" => "SiteTreeOverlay"
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->findOrMakeTab("Root.LanguageVersions");
        $gridLangVersions = new GridField("SiteTreeOverlays", "Language Versions", SiteTreeOverlay::get());
        $gridLangVersions->setConfig(GridFieldConfig_RecordEditor::create());
        $fields->addFieldToTab("Root.LanguageVersions", $gridLangVersions);
    }

}