<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function getMenus()
    {
        $menus=Menu::where('up_menu','0')->orderBy('list','asc')->get();
        return view('backend.menus.menus')->with('menus',$menus);
    }
    public function getMenuAdd()
    {
        $pages=Pages::all();
        $menus=Menu::all();
        return view('backend.menus.menu-add')->with('menus',$menus)->with('pages',$pages);
    }
    public function getMenuEdit($menuId)
    {
        $pages=Pages::all();
        $menus=Menu::all();
        $menu=Menu::where('id',$menuId)->first();
        return view('backend.menus.menu-edit')->with('menus',$menus)->with('pages',$pages)->with('menu',$menu);
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

    public function postMenuEdit(Request $request,$menuId)
    {
        try {
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug'=>$slug]);
            Menu::where('id',$menuId)->update($request->all());
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menu Güncellendi']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Menu Güncellenemedi ']);
        }
    }

    public function postMenus()
    {
        try {
            foreach ($_POST['item'] as $key=>$value){
                $menus=Menu::find(intval($value));
                $menus->list=intval($key);
                $menus->save();
            }
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menu Sıra Değiştirildi']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Menu Sıra Değiştirilemedi ']);
        }
    }
}
