<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Title;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\sample;
use App\Models\User;
use PDF;

class HomeController extends Controller
{
    public function index() 
    {
        $servicelist = Service::latest()->limit(6)->get();
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_home;
        $seo_data['seo_description'] = $homepage->seo_des_home;
        $seo_data['keywords'] = $homepage->seo_key_home;
        $canocial ='https://codepin.org';
        return view('home',compact('seo_data','servicelist','canocial'));
    }

    public function about()
    {
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_about;
        $seo_data['seo_description'] = $homepage->seo_des_about;
        $seo_data['keywords'] = $homepage->seo_key_about;
        $canocial ='https://codepin.org/about';
        return view('about',compact('seo_data','canocial'));
    }

    public function services($slug=null)
    {
        $homepage = Title::select('seo_title_services','seo_des_services','seo_key_services')->first();
        if($slug!=null){
            $servicesCategory = ServiceCategory::where('slug',$slug)->first();
            $servicesList = Service::latest()->with('serviceCategory')->where('category_id',$servicesCategory->id)->paginate(6);
            $seo_data['seo_title'] =$servicesCategory->seo_title;
            $seo_data['seo_description'] =$servicesCategory->seo_description;
           $seo_data['keywords'] =$servicesCategory->seo_keyword;
           $canocial ='https://codepin.org/services/'.$slug;

         

        }else{
            $servicesList = Service::latest()->with('serviceCategory')->paginate(6);
            $seo_data['seo_title'] =$homepage->seo_title_services;
            $seo_data['seo_description'] =$homepage->seo_des_services;
            $seo_data['keywords'] =$homepage->seo_key_services;
            $canocial ='https://codepin.org/services';
         
         }
        return view('services',compact('seo_data','servicesList','canocial'));
    }

    public function servicesDetails($slug=null)
    {
        $servicelist = Service::latest()->limit(6)->get();
        $servicesData = Service::with('serviceCategory')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$servicesData->seo_title;
        $seo_data['seo_description'] =$servicesData->seo_description;
       $seo_data['keywords'] =$servicesData->seo_keyword;
       $canocial ='https://codepin.org/service-details/'.$slug;
        return view('service-details',compact('seo_data','servicesData','servicelist','canocial'));
    }

    public function blogs($slug=null)
    {
        $homepage = Title::select('seo_title_blog','seo_des_blog','seo_key_blog')->first();
        $title = 'All blog Page';
        if($slug!=null){
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->paginate(4);
            $seo_data['seo_title'] =$blogCategory->seo_title;
            $seo_data['seo_description'] =$blogCategory->seo_description;
           $seo_data['keywords'] =$blogCategory->seo_keyword;
           $canocial ='https://codepin.org/blogs/'.$slug;

         

        }else{
            $blogList = Blog::latest()->with('blogCategory')->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_title_blog;
            $seo_data['seo_description'] =$homepage->seo_des_blog;
            $seo_data['keywords'] =$homepage->seo_key_blog;
            $canocial ='https://codepin.org/blogs';
         
         }
        return view('blogs',compact('title','blogList','seo_data','canocial'));
    }

    public function blogDetails($slug=null)
    {
        $title = 'Blog details';
        
        // $blogCategory = BlogCategory::withcount('blogs')->get(); // Filter by blog Category
        $blog = Blog::latest()->limit(3)->get();
        $blogData = Blog::with('blogCategory')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$blogData->seo_title;
        $seo_data['seo_description'] =$blogData->seo_description;
       $seo_data['keywords'] =$blogData->seo_keyword;
       $canocial ='https://codepin.org/blog-details/'.$slug;
       
           
        return view('blog-details',compact('title','blogData','blog','seo_data','canocial'));
    }


    public function casestudies()
    {
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_case;
        $seo_data['seo_description'] = $homepage->seo_des_case;
        $seo_data['keywords'] = $homepage->seo_key_case;
        $canocial = 'https://codepin.org/casestudies';

        return view('casestudies',compact('seo_data','canocial'));
    }


    public function contact()
    {
        $homepage = Title::first();
        $seo_data['seo_title'] = $homepage->seo_title_contact;
        $seo_data['seo_description'] = $homepage->seo_des_contact;
        $seo_data['keywords'] = $homepage->seo_key_contact;
        $canocial = 'https://codepin.org/contact';
        return view('contact',compact('seo_data','canocial'));
    }

    public function contactPost(Request $request)    
    {
        $this->validate(request(), [
            'fname' => "required",
            'lname' => "required",
            'email' => "required",
            'phone' => "required",
            'message' => "required",
            'image' => "required",
         
          ], [], 
        [
          'fname' => 'First Name',
          'lname' => 'Last Name',
          'email' => 'Email',
          'phone' => 'Number',
            'message' => "Message",
            'image' => "File",
          
         
        ]);

        
  $contact_obj = new Contact;
  $contact_obj->fname   =$request->fname;
  $contact_obj->lname   =$request->lname;
  $contact_obj->email  =$request->email;
  $contact_obj->phone=$request->phone;
  $contact_obj->message=$request->message;
  if ($request->hasFile('image')) {
    $file = $request->file('image'); // Get the uploaded file
    $extension = $file->getClientOriginalExtension(); // Get the file extension
    $filename = time() . '.' . $extension; // Create a unique filename
    $file->move('uploads/', $filename); // Move the file to the uploads directory
    $contact_obj->image = $filename; // Save the filename in the database
}
 
  $contact_obj->save();
 
  return back()->with('message', 'Form Submitted Successfully!');
    }



public function search(Request $request){

    $homepage = Title::first();
    $seo_data['seo_title'] = $homepage->seo_title_search;
    $seo_data['seo_description'] = $homepage->seo_des_search;
    $seo_data['keywords'] = $homepage->seo_key_search;

    $search = $request->search;
    $blogList = Blog::where(function ($query) use ($search) {

        $query->where('title','like',"%$search%");
       
        
    })
    ->paginate(4);

    return view('blogs',compact('blogList','search','seo_data'));
}


public function sample(){
    $homepage = Title::first();
    $seo_data['seo_title'] = $homepage->seo_title_sample;
    $seo_data['seo_description'] = $homepage->seo_des_sample;
    $seo_data['keywords'] = $homepage->seo_key_sample;
    $sample = sample::all();
    return view('samplefile',compact('seo_data','sample'));
}

public function refund(){
    $homepage = Title::first();
    $seo_data['seo_title'] = $homepage->seo_title_refund;
    $seo_data['seo_description'] = $homepage->seo_des_refund;
    $seo_data['keywords'] = $homepage->seo_key_refund;
   
    return view('refundpolicy',compact('seo_data'));

}
public function placeOrder(){
    $homepage = Title::first();
    $seo_data['seo_title'] = $homepage->seo_title_placeorder;
    $seo_data['seo_description'] = $homepage->seo_des_placeorder;
    $seo_data['keywords'] = $homepage->seo_key_placeorder;
   
    return view('placeyourorder',compact('seo_data'));

}
public function genraterPDF($id) {
    $sample = Sample::find($id);

    if (!$sample) {
        return redirect()->back()->with('error', 'Sample not found.');
    }

    $data = [
        'title' => 'Sample PDF',
        'sample' => $sample
    ];

    $pdf = PDF::loadView('pdf', $data);
    return $pdf->download('Sample-file.pdf');
}


public function showResetRequestForm()
    {
        return view('resetpasswordrequest');
    }
    public function handleResetRequest(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $user = User::where('email', $request->email)->first();
    $token = Str::random(60);
    DB::table('password_resets')->insert([
        'email' => $request->email,
        'token' => Hash::make($token),
        'created_at' => Carbon::now(),
    ]);

    return redirect()->route('password.reset.form', ['token' => $token, 'email' => $request->email]);
}



    public function showResetForm($token, $email)
    {
        return view('resetpassword', ['token' => $token, 'email' => $email]);
    }

    public function resetPassword(Request $request)
{
    $request->validate([
        'token' => 'required',
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    $reset = DB::table('password_resets')->where('email', $request->email)->first();

    if (!$reset || !Hash::check($request->token, $reset->token)) {
        return back()->withErrors(['email' => 'Invalid token or email!']);
    }

    $user = User::where('email', $request->email)->first();
    $user->password = Hash::make($request->password);
    $user->save();

    DB::table('password_resets')->where(['email'=> $request->email])->delete();

    return redirect()->route('login')->with('status', 'Password has been reset!');
}




}
