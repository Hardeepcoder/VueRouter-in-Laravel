<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function submitProject(Request $request){
      $heading = $request->heading;
      $slug =  str_slug($heading, '-');
      $category = $request->category;
      $info = $request->info;

        $file = $request->file('dp');
        $filename = $file->getClientOriginalName();
        $path = 'public/img';
        $file->move($path, $filename);

        $add= DB::table('projects')->insert([
        'heading' => $heading,
        'slug' => $slug,
        'category' => $category,
        'info' => $info,
        'dp' => $filename
      ]);
      if($add){
        return redirect('admin/addProject')->with(['msg' => 'Project inserted successfully']);
      }

    }
}
