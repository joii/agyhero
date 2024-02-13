<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use Illuminate\Support\Carbon;

class NewsCategoryController extends Controller
{
    public function AllNewsCategory(){
        $news_categories = NewsCategory::latest()->get();
        return view('admin.news_category.news_category_all',compact('news_categories'));
    } // End Method

    public function AddNewsCategory(){

        return view('admin.news_category.news_category_add');
    } // End Method


    public function StoreNewsCategory(Request $request){
       
        $request->validate([
            'category_name_en' => 'required',
            'category_name_th' => 'required',

        ],[

            'category_name_en.required' => 'Cateogry Name  in English is Required',
            'category_name_th.required' => 'Cateogry Name  in Thai is Required',
        ]);

            NewsCategory::insert([
                'category_name_en' => $request->category_name_en,               
                'category_name_th' => $request->category_name_th,
                'created_at' => Carbon::now(),
            ]); 

            $notification = array(
            'message' => 'News Category Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.news.category')->with($notification);
    } // End Method


    public function EditNewsCategory($id){

        $news_category = NewsCategory::findOrFail($id);
        return view('admin.news_category.news_category_edit',compact('news_category'));

    } // End Method


    public function UpdateNewsCategory(Request $request,$id){
            $request->validate([
                'category_name_en' => 'required',
                'category_name_th' => 'required',

            ],[

                'category_name_en.required' => 'Cateogry Name  in English is Required',
                'category_name_th.required' => 'Cateogry Name  in Thai is Required',
            ]);

            NewsCategory::findOrFail($id)->update([
                'category_name_en' => $request->category_name_en,               
                'category_name_th' => $request->category_name_th,
                'updated_at' => Carbon::now(),            
            ]); 

            $notification = array(
            'message' => 'News Category Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.news.category')->with($notification);
    } // End Method

    public function DeleteNewsCategory($id){

        NewsCategory::findOrFail($id)->delete();

         $notification = array(
            'message' => 'News Category Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       

    } // End Method

}
