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

    public function showEditArticles()
    {
        return view('/edit_articles');
    }

    public function getCreatedArticles(Request $request)
    {
            if (!empty($request)) {
                $title = $request['title'];
                $content = $request['content'];
                $this->implementServices->getArticlesCreate($title, $content);
            }
    }

    public function showArticlesList()
    {
        return view('/articles_list', [
            'list' => $this->implementServices->articlesListToPage()
        ]);
    }

    public function showArticles($id)
    {
        return view('/articles', [
            'data' => $this->implementServices->articlesToPage($id)
        ]);
    }
}
