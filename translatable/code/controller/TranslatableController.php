<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 13.07.2016
 * Time: 13:19
 */
class TranslatableController extends ContentController
{
    public function index($request)
    {
        $url = $request->param('Lang');
        $matches = array();
        if (strpos($url, '/') === false && preg_match('/^de/i', $url, $matches)) {

            return ContentController::create()->handleRequest($request, $this->model);
        }
        return ContentController::create()->handleRequest($request, $this->model);
    }
}