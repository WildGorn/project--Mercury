<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Article extends Model
{

    protected $table = 'articles';

    public function getFirstParagraph()
    {
        $articles = $this->getActive();
        foreach ($articles as $item) {
            $text = $item->body;
            preg_match('#<[\s]*p[\s]*>([^<]*)<[\s]*/p[\s]*>#i', $text, $matches);
            $newCol = Collection::make($matches);
            $item->body = $newCol->get(0);
        }
        return $articles;
    }

    public function getBySlug($slug)
    {
        return $this->where(['slug' => $slug])->firstOrFail();
    }

    public function getActive()
    {
        return $this->published()->latest()->paginate(5);
    }

    public function scopePublished($query)
    {
        $query->where(['active' => 1]);
    }
}
