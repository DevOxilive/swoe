<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListItem extends Component
{

    public $icon;
    public $name;
    public $route;
    public $isTab;

    public function __construct($name, $route, $isTab = "y", $icon = "bi bi-circle")
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->route = $route;

        if($isTab == 'n' || $isTab == 'N'){
            $this->isTab = "nav-link collapsed";
        } else {
            $this->isTab = " ";
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.list-item');
    }
}
