<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this ->videoTutorials = [
            [
                'videoId' => 'gvyufdkj',
                'title' => 'Birthday cake',
                'description' => 'One of my birthday cakes project'
            ],
            [
                'videoId' => 'fyasvhfd',
                'title' => 'Birthday cake',
                'description' => 'One of my birthday cakes project'
            ],
            [
                'videoId' => 'cuuwfasu',
                'title' => 'Birthday cake',
                'description' => 'One of my birthday cakes project'
            ],
            [
                'videoId' => 'ojsihaud',
                'title' => 'Birthday cake',
                'description' => 'One of my birthday cakes project'
            ]
        ]
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.VideoTutorials');
    }
}
