<?php

namespace App\Models;

class Book extends \Core\Model
{
    public $id, $title, $resume, $author_id, $category_id, $created_at, $isbn, $cover;

    protected $author, $category;
}