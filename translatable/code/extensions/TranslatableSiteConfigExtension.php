<?php

/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 12.07.2016
 * Time: 16:38
 */
class TranslatableSiteConfigExtension extends DataExtension
{
    private static $has_one = array(
        "DefaultLanguage" => "SiteLanguage",
    );

    public function updateCMSFields(FieldList $fields){

        $fields->addFieldToTab("Root.LanguageConfig", new FormField("Test"));
        $siteLanguages = SiteLanguage::get();
        $fields->addFieldToTab("Root.Main",new DropdownField("DefaultLanguage", "Default Language",  $siteLanguages->map("ID","Name", "Bitte auswählen")));
        $langGrid = new GridField("AvailableLanguages", "Available Languages", DataObject::get("SiteLanguage"));
        $langGrid->setConfig(GridFieldConfig_RecordEditor::create());
        $fields->addFieldToTab("Root.AvailableLanguages", $langGrid);
    }

}