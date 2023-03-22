<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;


class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items=[
        [
            'category'=> ['Cakes','Cupcakes','Doughnuts'],
            'title'=>'Learn how to bake with Lorlis',
            'image'=>url('/img/cake.png'),
            'github'=>'javascript:void(0)',
        ],
        [
            'category'=> ['Cakes'],
            'title'=>'Cake',
            'image'=>url('/img/cake.png'),
            'github'=>'javascript:void(0)',
        ],
        [
            'category'=> ['Shakes'],
            'title'=>'Milk Shake',
            'image'=>url('/img/cake.png'),
            'github'=>'javascript:void(0)',
        ],
        [
            'category'=> ['Custom Cakes', 'Designs'],
            'title'=>'custom made',
            'image'=>url('/img/cake.png'),
            'github'=>'javascript:void(0)',
        ],
        [
            'category'=> ['2kg','Food'],
            'title'=>'Different sizes',
            'image'=>url('/img/cake.png'),
            'github'=>'javascript:void(0)',
        ],
    ];

        $this->tabs=  array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
