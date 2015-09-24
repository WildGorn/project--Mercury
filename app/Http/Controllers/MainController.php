<?php
/**
 * Created by PhpStorm.
 * User: wildgorn
 * Date: 26.07.15
 * Time: 19:56
 */

namespace App\Http\Controllers;


use App\Menu;

class MainController extends Controller
{
    public function __construct(Menu $menu)
    {
        $this->data = [];

        $this->data['menu'] = $menu->getMenu();

    }
}