<?php

class Collection
{
    protected array $items;                         // 7.4 [ only available, type define in class]

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_map(function ($item) use ($key) {
            return $item->$key;
        }, $this->items));
    }
}


class Video
{
    public $title;
    public $length;

    public function __construct($title, $length) {
        $this->title = $title;
        $this->length = $length;
    }
}


$collections = new Collection([
    new Video('some random video', '100'),
    new Video('some random video2', '200'),
    new Video('some random video3', '400'),
]);

var_dump($collections->sum('length'));