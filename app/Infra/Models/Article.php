<?php


namespace App\Infra\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Infra\Models\
 */
class Article extends Model
{
    public $table = "article";

    protected  $fillable = ['title', 'content'];

    public function articlesCreat($data)
    {
        return $this->create($data);
    }

    public function getArticlesList()
    {
        return $this->orderBy('created_at', 'desc')->get();
    }

    public function getArticlesToPages($id)
    {
        return $this->where('id', $id)->get();
    }

    public function articleRateUP($id)
    {
    }
}
