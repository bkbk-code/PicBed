<?php

namespace App\Controller;

class Album extends Common
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!config('album')) $this->info('探索已关闭！');
        $info = [
            'nav' => config('navs')
        ];
        return view('home/album', $info);
    }
}