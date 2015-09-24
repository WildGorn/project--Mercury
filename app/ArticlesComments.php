<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesComments extends Model
{

    protected $table = "articles_coments";
    protected $fillable = [
        'article_id',
        'user_name',
        'comment',
    ];


    public function getComments($id)
    {
        return $this->where(["article_id" => $id])->get();
    }
}
