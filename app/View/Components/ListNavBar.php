<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListNavBar extends Component
{

    public $nameId;
    public $name;
    public $icon;
    public $route;
    public $parentNav;
    public $isTab;
    public $chevron;
    public $nav;

    public function __construct($nameId, $name, $route, $icon = "bi bi-circle", $isTab = "n", $parentNav = "sidebar")
    {
        $this->nameId = $nameId;
        $this->name = $name;
        $this->icon = $icon;
        $this->route = $route;
        $this->parentNav = $parentNav;
        if ($isTab == 'y' || $isTab == 'Y') {
            $this->isTab = " ";
            $this->chevron = "fs-6";
            $this->nav = " ";
        } else {
            $this->isTab = "nav-item";
            $this->chevron = "";
            $this->nav = "nav-content";
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.list-nav-bar');
    }
}
