<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class MyController extends Controller
{
    public function index()
    {   
        $posts = DB::table('posts')
                ->orderBy('id', 'desc')
                ->get();
        $title = 'XYZ- Học lập trình cơ bản cho người mới';
        $description = "Lập trình website, blog cơ bản nhất cho người mới bắt đầu,chi tiết từ Z đến A";
        return view('welcome')->with(['title'=>$title,'posts'=> $posts ,'description'=>$description]);
    }
    
    public function nodejs(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'nodejs')
                ->orderBy('id', 'asc')
                ->get();
        // $posts = DB::table('posts')->where('cate', '=', 'html')->get();
        $description = 'Nodejs nền tảng chạy và thực thi javascript trên môi trường ngoài trình duyệt';
        $title = 'Nodejs cơ bản';
        $url = 'nodejs';
        $src = 'node4';
        return view('nodejs.index')->with(['posts'=> $posts, 'description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function javascript(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'javascript')
                ->orderBy('id', 'asc')
                ->get();
        // $posts = DB::table('posts')->where('cate', '=', 'html')->get();
        $description = 'Javascript ngôn ngữ kịch bản, cực kỳ năng động, linh hoạt';
        $title = 'Javascript cơ bản nhất';
        $url = 'javascript';
        $src = 'js2';
        return view('javascript.index')->with(['posts'=> $posts, 'description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function css3(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'css')
                ->orderBy('id', 'asc')
                ->get();
        // $posts = DB::table('posts')->where('cate', '=', 'html')->get();
        $description = 'CSS căn chỉnh mọi thứ trên website ,blog, làm đẹp với kiến thức CSS cơ bản nhất ';
        $title = 'CSS cơ bản nhất';
        $url = 'css3';
        $src = 'css6';
        return view('css.index')->with(['posts'=> $posts, 'description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function html(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'html')
                ->orderBy('id', 'asc')
                ->get();
        // $posts = DB::table('posts')->where('cate', '=', 'html')->get();
        $description = 'HTMl kiến thức cơ bản nhất về HTML, cách xây dựng phần khung blog, website với ngôn ngữ HTML';
        $title = 'HTML cơ bản nhất';
        $url = 'html';
        $src = 'html3';
        return view('html.index')->with(['posts'=> $posts, 'description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function benle(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'benle')
                ->orderBy('id', 'asc')
                ->get();
        // $posts = DB::table('posts')->where('cate', '=', 'benle')->get();
        $description = 'Kiến thức mà người tự học viết mã cần tìm hiểu kỹ trước kỹ bắt tay xây dựng blog, website';
        $title = 'Kiến thức cần thiết, cơ bản nhất';
        $url = 'benle';
        $src = 'benle1';
        return view('benle.index')->with(['posts'=> $posts, 'description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }

    //show all post
    public function showAllPost(){
        $posts = Post::all();

        $heading = 'Chinh sua post';
        return view('admin.allpost')->with(['posts'=> $posts,'heading' => $heading]);
    }
    
    

    public function contact(){
        $description = 'Liên hệ với tác giả';
        $title = 'Contact';
        $url = 'contact';
        $src = 'roadmap';
        return view('contact')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    //================benle===================

    public function mucdich(){
        $description = 'Blog dành cho người tự học chi tiết từ Z đến A';
        $title = 'Mục đích mình tạo ra blog này để làm gi ?';
        $url = 'muc-dinh-ma-minh-tao-ra-blog-nay-la-gi';
        $src = 'roadmap';

        return view('benle.mucdich')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function lotrinh(){
        $description = 'Lộ trình chi tiết nhất cho các bạn mới học viết code, lộ trình cơ bản nhất';
        $title = 'Lộ trình học viết code';
        $url = 'lo-trinh-hoc-viet-ma-xay-dung-blog-website';
        $src = 'roadmap';
        return view('benle.lotrinh')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function cachthuc(){
        $description = 'Internet hoạt động ra làm sao ? cách thức hoạt động của internet là gì ?';
        $title = 'Cách thức internet hoạt động';
        $url = 'cach-thuc-mang-luoi-internet-hoat-dong';
        $src = 'internet';
        return view('benle.cachthuc')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function giaothuc(){
        
        $description = 'Hiếu những điều cơ bản nhất về http, tcp/ip, mô hình client-sever';
        $title = 'Http là gì? ';
        $url = 'giao-thuc-tcp-ip-http-va-https';
        $src = 'http';
        return view('benle.giaothuc')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function mohinh(){
        
        $description = 'cách thức hoạt động cơ bản nhất của mô hình client sever mà tất cả người học viêt mã đều cần phải biết';
        $title = 'Mô hình client sever ';
        $url = 'mo-hinh-client-sever';
        $src = 'sever';
        return view('benle.mohinh')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function cacbuoc(){
        
        $description = 'Khi bạn đã có 1 website làm thế nào để mọi người biết đến sản phẩm của bạn, bạn có nhiều người truy cập hơn';
        $title = 'Khi đã có website ';
        $url = 'cac-buoc-khi-ban-da-co-1-website';
        $src = 'daco';
        return view('benle.cacbuoc')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    //=======================html================

    public function website(){
       
        $description = 'Những khái niệm cơ bản về website, webpage , Webapp là gì ? ';
        $title = 'Website là gì ? ';
        $url = 'website-la-gi';
        $src = 'website';
        return view('html.website')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function html1(){ 
        $description = 'Cơ bản nhất về ngôn ngữ đánh dấu siêu văn bản HTML, thứ cơ bản nhất để tạo nên 1 website';
        $title = 'HTML là gì ? ';
        $url = 'html-la-gi';
        $src = 'html1';
        return view('html.html')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
}

