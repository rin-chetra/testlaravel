<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticleController extends Controller
{
  public function index(){
   $article =Articles::orderBy('id','desc')
   //->limit(5);
   //->where('articles',1);
   ->get();	
   return view('articles.index',compact('article'));
 }
 public function show($id){
       //$article = Articles::all(); 
      //$article = Articles::find($id); 
  $article = Articles::findOrfail($id);
      //$article = Articles::where('id',$title)->first(); use for faile table in db
      //$article = Articles::where('slug',$slug)->first(); 
  return view('articles.show',['article'=>$article]);
}
}
