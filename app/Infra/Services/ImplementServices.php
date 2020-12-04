<?php


namespace App\Infra\Services;

use App\Infra\Models\Article;

/**
 * Class ImplementServices
 * @package App\Infra\Services
 */
class ImplementServices
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getArticlesCreate(string $contentTitle, string $content): string
    {
        $data = ['title' => $contentTitle,
                 'content' => $content
        ];
        return $this->article->articlesCreat($data);
    }

    public function articlesListToPage()
    {
        $articlesList = $this->article->getArticlesList();

        return $articlesList->isEmpty() ? [] : $articlesList->map(function ($item) {
            return [
                'id' => $item['id'],
                'title' => $item['title']
            ];
        })->toArray();
    }

    public function articlesToPage($id)
    {
        $article = $this->article->getArticlesToPages($id);

        return $article->isEmpty() ? [] : $article = $article->first()->toArray();
    }
}
