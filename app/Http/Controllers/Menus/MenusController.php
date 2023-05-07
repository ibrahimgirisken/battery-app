<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function getMenus()
    {
        return view('backend.menus.menus');
    }
    public function getMenuAdd()
    {
        return view('backend.menus.menu-add');
    }
    public function getMenuEdit()
    {
        return view('backend.menus.menu-edit');
    }
    public function postMenuAdd(Request $request)
    {
        try {
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug'=>$slug]);
            Menu::create($request->all());
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menu Eklendi']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Menu Eklenemedi ']);
        }
    }
    public function postMenuEdit(Request $request)
    {
        return view('backend.menus.menu-edit');
    }
}
