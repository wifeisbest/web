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
    public function gioithieu(){
        $description = 'Về tôi , về blog mà mình đang viết';
        $title = 'Giới Thiệu';
        $url = 'gioi-thieu';
        $src = 'roadmap';
        return view('gioithieu')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function policies(){
        $description = 'Chính sách và điều khoản sử dụng';
        $title = 'Điều khoản và chính sách sử dung';
        $url = 'policies';
        $src = 'roadmap';
        return view('dieukhoan')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
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
    public function hoclaptrinh(){
        
        $description = 'Học lập trình để làm gì ? Mục đính của bạn là gì ? bạn học lập trình đến đâu rồi, mục đính của bạn đã đạt được chưa ?';
        $title = 'Học lập trình để làm gì ? ';
        $url = 'hoc-lap-trinh-de-lam-gi';
        $src = 'dauhoi';
        return view('benle.hoclaptrinh')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
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
    public function hoatdong(){ 
        
        $description = 'Hiếu được cơ bản nhất cách hiển thị và hoạt động của các thẻ trong tài liệu html';
        $title = 'Hoạt động và cách hiển thị thẻ html';
        $url = 'hoat-dong-cua-cac-the-trong-tai-lieu-html';
        $src = 'html6';
        return view('html.hoatdong')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function thehtml(){ 
        $description = 'Các thẻ trong tài liệu html được phân loại ra sao ? Chúng sinh ra để làm gì ? Hiểu về thẻ html cơ bản nhất.';
        $title = 'Thẻ HTML cơ bản nhất';
        $url = 'the-html-co-ban-nhat';
        $src = 'html4';
        return view('html.thehtml')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function thuoctinh(){ 
       
        $description = 'Thuộc tính trong mỗi thẻ html rất quan trọng và thường hay gây nhầm lẫn cho các bạn mới, chúng ta cùng đi phân tích các khái niệm cơ bản nhất 
        của khái niệm này nhé';
        $title = 'Thuộc tính thẻ HTML';
        $url = 'thuoc-tinh-trong-the-html';
        $src = 'html2';
        return view('html.thuoctinh')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function bocuc(){ 
        $description = 'Bố cục cơ bản nhất của 1 website là như thế nào ? Cùng tìm hiểu rõ bố cục của 1 website cơ bản nhất, và chi tiết nhất đúng chuẩn 
        HTML5';
        $title = 'Bố cục website như thế nào ? ';
        $url = 'bo-cuc-website-nhu-the-nao';
        $src = 'html6';
        return view('html.bocuc')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function cachsudung(){ 
        $description = ' Cách sử dụng các thẻ HTMl cơ bản nhất, sử dụng mục đích của thẻ, kiến thức cơ bản nhất mà mọi lập trình web đều biết
        ';
        $title = 'Cách sử dụng các thẻ HTMl cơ bản ';
        $url = 'cach-su-dung-cac-the-html-co-ban';
        $src = 'html4';
        return view('html.cachsudung')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    //==========================  javascript  ========================

    public function ngonngu(){ 
        $description = 'Ngôn ngữ lập trình là gì ? Nhũng điều cơ bản nhất về ngôn ngữ lập trình mà bất kỳ ai học viết mã đều cần biết';
        $title = 'Ngôn ngữ lập trình';
        $url = 'ngon-ngu-lap-trinh-javascript';
        $src = 'js6';
        return view('javascript.ngonngu')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function bien(){ 
       
        $description = 'Những điều cơ bản nhất về biến trong mọi ngôn ngữ lập trình và đặc trưng cơ bản của biến trong javascript';
        $title = 'Biến và biểu thức toán học';
        $url = 'bien-va-bieu-thuc-toan-hoc-trong-javascript';
        $src = 'js5';
        return view('javascript.bien')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function kieu(){ 
        
        $description = 'Biến trong javascript lưu trữ những loại giá trị nào , chúng ta cần quan tâm đến kiểu của giá trị, hay kiểu của biến';
        $title = 'Kiểu giá trị của biến';
        $url = 'kieu-gia-tri-cua-bien-trong-javascript';
        $src = 'js1';
        return view('javascript.kieu')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function ham(){ 
        
        $description = 'Hàm là một những khái niệm quan trọng nhất của bất kỳ ngôn ngữ lập trình nào, cùng hiểu rõ các khái niệm về hàm trong javascript';
        $title = 'Hàm trong javascript';
        $url = 'hieu-ro-ve-ham-trong-javascript';
        $src = 'js5';
        return view('javascript.ham')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function muiten(){ 
        
        $description = 'Hàm mũi tên trong javascript ES6, cách viết hàm mũi tên, cách sử dụng hàm mũi tên cơ bản nhất, chú ý khi sử dụng hàm mũi tên';
        $title = 'Arrow function trong javascript';
        $url = 'arrow-function-trong-javascript';
        $src = 'js6';
        return view('javascript.muiten')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    //===========================  Nodejs  ==================================
    
    public function node(){ 
        
        $description = 'Nodejs cơ bản nhất, những điều cơ bản nhất về nodejs';
        $title = 'Nodejs cơ bản';
        $url = 'nodejs-la-gi';
        $src = 'node3';
        return view('nodejs.node')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function dangky(){ 
        
        $description = 'Đăng ký đăng nhập sử dụng nodejs cơ bản nhất , chi tiết nhất cho người mới bắt đầu, rất đơn giản 
        chi tiết từ Z đến A, từ A đến Z ';
        $title = 'Đăng ký đăng nhập sử dụng nodejs';
        $url = 'dang-ky-dang-nhap-su-dung-nodejs';
        $src = 'node2';
        return view('nodejs.dangky')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    //=========================== CSS ==============================================
    public function csscoban(){ 
        $description = 'CSS cơ bản cho người mới tinh, tạo nên 1 website lung linh, đẹp mắt nhất';
        $title = 'CSS cơ bản';
        $url = 'css-co-ban-cho-nguoi-moi-bat-dau';
        $src = 'css1';
        return view('css.csscoban')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
    public function devtools(){ 
        $description = 'Cách dùng Chrome DevTools cơ bản nhất, 1 công cụ cực mãnh mẽ và tuyệt vời giúp chúng ta xây dựng và chuẩn đoán, điều chỉnh, các vấn đề nhanh nhất ';
        $title = 'Hướng dẫn sử dụng devtools cơ bản';
        $url = 'huong-dan-su-dung-dev-tools-co-ban';
        $src = 'css3';
        return view('css.devtools')->with(['description'=>$description,'title'=>$title,'url'=>$url,'src'=>$src]);
    }
}

