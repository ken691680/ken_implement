<?php

namespace App\Infra\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentPages
 * @package App\Infra\Models
 */
class ContentPages extends Model
{
    protected  $fillable = ['title', 'content'];

    public function contentPagesCreat($data)
    {
        return $this->create($data);
    }
}
