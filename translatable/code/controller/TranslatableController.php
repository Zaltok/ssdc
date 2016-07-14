<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 13.07.2016
 * Time: 13:19
 */
class TranslatableController extends ContentController
{
    private static $url_handlers = array(
        '$Lang/$URLSegment//$Action/$ID/$OtherID' => 'index'
    );
    public function index($request)
    {
        $request = $this->request;
        $Lang = $request->param("Lang");
        $URLSegment = $request->param('URLSegment');
        // Empty URLSegment? Try and get the homepage for the current locale
        if(empty($URLSegment)) {

            // now we know a homepage is requested from the locale 'root'
            //self::$is_at_root = true;

            // get the homepage from the defaul homepage Translation Group
            //$URLSegment = Translatable::get_homepage_link_by_locale($this->locale);

            // if no homepage is not found in the default translation group, use
            // the first page in the tree instead
            if(empty($URLSegment)) {
                $siteTree = DataObject::get_one(
                    'SiteTree',
                    '"ParentID" = 0',
                    'Sort'
                );
                if($siteTree) {
                    $URLSegment = $siteTree->URLSegment;
                }
                else {
                    // last resort
                    $URLSegment = 'home';
                }
            }
        }
        $sitetree = DataObject::get_one(
            'SiteTree',
            sprintf(
                '"URLSegment" = \'%s\' %s',
                Convert::raw2sql($URLSegment),
                (SiteTree::nested_urls() ? 'AND "ParentID" = 0' : '')
            )
        );

        //return self::controller_for($sitetree, $this->request->param('Action'));
        return ContentController::create($sitetree)->handleRequest($request, $this->model);
    }
}