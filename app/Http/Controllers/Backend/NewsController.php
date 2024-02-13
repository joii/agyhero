<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use App\Models\News;
use Illuminate\Support\Carbon;
use Image;

class NewsController extends Controller
{
    public function AllNews(){
        $news = News::latest()->get();
        return view('admin.news.news_all',compact('news'));
    } // End Method

    public function AddNews(){
        $categories = NewsCategory::orderBy('id','ASC')->get();
        return view('admin.news.news_add',compact('categories'));
    }// End Method

    public function StoreNews(Request $request){

           $image = $request->file('news_image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

           Image::make($image)->resize(1000,750)->save('upload/news/'.$name_gen);
           $image_url = 'upload/news/'.$name_gen;

           $thumb = $request->file('news_thumbnail');
           $name_gen2 = hexdec(uniqid()).'.'.$thumb->getClientOriginalExtension();  // 3434343443.jpg

           Image::make($thumb)->resize(400,400)->save('upload/news/'.$name_gen2);
           $thumb_url = 'upload/news/'.$name_gen2;

           News::insert([
               'news_category_id' => $request->news_category_id,
               'news_title_en' => $request->news_title_en,
               'news_title_th' => $request->news_title_th,
               'news_description_en' => $request->news_description_en,
               'news_description_th' => $request->news_description_th,
               'news_detail_en' => $request->news_detail_en,
               'news_detail_th' => $request->news_detail_th,
               'news_date' => $request->news_date,
               'news_image' => $image_url,
               'news_thumbnail' => $thumb_url,
               'created_at' => Carbon::now(),

           ]); 
           $notification = array(
           'message' => 'News Inserted Successfully', 
           'alert-type' => 'success'
       );

       return redirect()->route('all.news')->with($notification);

   }// End Method

   public function EditNews($id){

    $news = News::findOrFail($id);
    $categories = NewsCategory::orderBy('id','ASC')->get();
    return view('admin.news.news_edit',compact('news','categories'));

  } // End Method

  public function UpdateNews(Request $request){

    $news_id = $request->id;

        if ($request->file('news_image')) {

        $image = $request->file('news_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(1000,750)->save('upload/news/'.$name_gen);
        $image_url = 'upload/news/'.$name_gen;
        
        }else{
        $image_url = $request->old_image;
        }

        if ($request->file('news_thumbnail')) {
        $thumb = $request->file('news_thumbnail');
        $name_gen2 = hexdec(uniqid()).'.'.$thumb->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($thumb)->resize(400,400)->save('upload/news/'.$name_gen2);
        $thumb_url = 'upload/news/'.$name_gen2;
        }else{
        $thumb_url = $request->old_thumb;
        }

        News::findOrFail($news_id)->update([
            'news_category_id' => $request->news_category_id,
            'news_title_en' => $request->news_title_en,
            'news_title_th' => $request->news_title_th,
            'news_description_en' => $request->news_description_en,
            'news_description_th' => $request->news_description_th,
            'news_detail_en' => $request->news_detail_en,
            'news_detail_th' => $request->news_detail_th,
            'news_date' => $request->news_date,
            'news_image' => $image_url,
            'news_thumbnail' => $thumb_url,
            'updated_at' => Carbon::now(), 

        ]); 
        $notification = array(
        'message' => 'News Updated Successfully', 
        'alert-type' => 'success'
   );

   return redirect()->route('all.news')->with($notification);

 } // End Method

 public function DeleteNews($id){

    $newss = News::findOrFail($id);
    $img = $news->news_image;
    $thumb = $news->news_thumbnail;

    unlink($img);
    unlink($thumb);

    Blog::findOrFail($id)->delete();

     $notification = array(
        'message' => 'News Deleted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);       

 } // End Method 


 public function HomeNews(){

    $categories = NewsCategory::orderBy('id','ASC')->get();
    $all_news = News::latest()->paginate(6);
    return view('frontend.latest_news',compact('all_news','categories'));

 } // End Method 

 public function NewsDetails($id){

    $news = News::findOrFail($id);
    return view('frontend.news_detail',compact('news'));

 } // End Method 

}
