<?php

namespace App\Http\Controllers\Web\General;




use App\Http\Controllers\Web\BaseController;


class HomeController extends BaseController
{

    private $request,$semester;

    public function __construct()
    {

        parent::__construct();
    }

    public function index()
    {
        return view('web.pages.index');
    }




    public function slug($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                     break;
            }
                    return view('web.pages.' . $slug);
        }
        // 3. No page exist (404)
        return view('web.pages.404');

    }



}
