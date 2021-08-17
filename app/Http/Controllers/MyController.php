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
        $title = 'XZY- Học lập trình cơ bản cho người mới';
        $description = "Lập trình website, blog cơ bản nhất cho người mới bắt đầu,chi tiết từ Z đến A";
        return view('welcome')->with(['title'=>$title,'posts'=> $posts ,'description'=>$description]);
    }
    
    public function nodejs(){
        $posts = DB::table('posts')
                ->where('cate', '=', 'nodejs')
                ->orderBy('id', 'desc')
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
                ->orderBy('id', 'desc')
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
                ->orderBy('id', 'desc')
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
                ->orderBy('id', 'desc')
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
                ->orderBy('id', 'desc')
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
}
