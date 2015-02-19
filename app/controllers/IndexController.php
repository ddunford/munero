<?php
namespace Munero\Controllers;

class IndexController extends \BaseController
{
    protected $layout = 'layouts.default';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->content = \View::make('index');
    }
}