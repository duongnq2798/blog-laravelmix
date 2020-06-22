<?php

namespace App;

use finfo;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    // public function getRouteKeyName()
    // {
    //     return 'slug'; //Article::where('slug', $article)->first();
    // }
    // protected $fillable = ['title', 'excerpt', 'body',day];.

    // Khởi tạo như dòng 14 sẽ kém kinh hoạt khi muốn thêm các thuộc tính mới bên ArticleController thì lại phải vào đây khai báo
    // Chính vì thế mà mình sẽ khởi tạo một mảng rỗng như sau
    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //author_id
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}