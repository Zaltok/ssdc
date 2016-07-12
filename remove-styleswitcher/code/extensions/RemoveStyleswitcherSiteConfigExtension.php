<?php


class RemoveStyleswitcherSiteConfigExtension extends DataExtension
{
    public function updateCMSFields(FieldList $fields) {
        $fields->removeByName("Theme");
    }

}