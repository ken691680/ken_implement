<?php

namespace App\Http\Controllers;

use App\Infra\Services\ImplementServices;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $implementServices;

    public function __construct(ImplementServices $implementServices)
    {
        $this->implementServices = $implementServices;
    }

    public function showContentPages()
    {
        return view('/content_pages');
    }

    public function gerCreatContentPages(Request $request)
    {
            if (!empty($request)) {
                $title = $request['title'];
                $content = $request['content'];
                $this->implementServices->getContentPagesCreat($title, $content);
            }
    }
}
