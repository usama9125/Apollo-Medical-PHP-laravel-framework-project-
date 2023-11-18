<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\prescriptionModel;
use App\Models\registerModel;
use App\Models\loginModel;
use App\Models\addproModel;

class apolloController extends Controller
{
    public function index()
    {
        return view('index');
    }


public function uploadd()
{
    return view('uploadd');
}

public function prescription(Request $req)
{
     $file=$req->file('file');
     $name=$file->getClientOriginalName();
     $extension=$file->getClientOriginalExtension();
     $fnm=time()."-prescription.".$extension;
     $path="public/upload".$fnm;
     $file->storeAs('public/upload',$fnm);

     $register=new prescriptionModel();
     $register->name=$req['name'];
     $register->email=$req['email'];
     $register->contact=$req['contact'];
     $register->file=$path;
     $register->message=$req['message'];
     $reg=$register->save();
     if($reg)
     {
       return redirect()->back()->with('msg','Your Feedback Successfully Submited');
     }
     else
     {
     echo  "<script>alert('failed')</script>";
     }
}


public function register()
{
    return view('register');
}
public function registerr(Request $req)
{
 $register= new registerModel();
 $register->name=$req['name'];
 $register->email=$req['email'];
 $register->contact=$req['contact'];
 $register->gender=$req['gender'];
 $register->address=$req['address'];
 $reg=$register->save();
 if($reg)
 {
    $signin=new loginModel();
    $signin->email=$req['email'];
    $signin->password=$req['password'];
    $signin->user_type='user';
    $res=$signin->save();
    if($res)
    {
    return redirect()->back()->with('msg','your feedback successfully submitted');
    }
 }
 else
 {
    echo  "<script>alert('failed')</script>";
 }
}

public function signin()
{
    return view('signin');
}
public function signing(Request $req)
 {   
$mo=new loginModel();
$email=$req['uid'];
$pw=$req['password'];
if($mo->where('email',$email)->first())
{
        if($mo->where('password',$pw)->first())
        {
           $data=$mo->where('email',$email)->get();
           $ut=$data[0]['user_type'];
           if($ut=='admin')
           {
            session()->put('email',$email);
            return redirect('admin_profile');
           }
           else
           {
            session()->put('email',$email);
            return redirect('user_profile');
           }
        }
        else
        {
            return view('admin/dashboard');
        }
}
else
{
    return redirect()->back()->with('message','invalid login details');
}
}

public function user_profile()
{
    $email=session()->get('email');
    return view('user/dashboard');
}
public function admin_profile()
{
    $email=session()->get('email');
    return redirect('dashboard');
}


public function addpro()
{
    return view('admin/addpro');
}


public function managepro()
{
    return view('admin/managepro');
}


public function addprod(Request $req)
{
      $file=$req->file('image');
      $name=$file->getClientOriginalName();
      $extension=$file->getClientOriginalExtension();
      $fnm=time()."-product.".$extension;
      $path="public/upload/".$fnm;
      
       $file->storeAs('public/upload',$fnm);
       
     $register=new addproModel();
     $register->proname=$req['productn'];
     $register->price=$req['price'];
     $register->qantity=$req['quantity'];
     $register->image=$path;
     $register->productdes=$req['productdes'];
     $reg=$register->save();
     if($reg)
     {
         return redirect()->back()->with('msg','Data submitted');
     }
}

public function dashboard(Request $req)
{
    $showpro=new addproModel();
    $data['data']=$showpro->all();
   
    return view('admin/dashboard',$data);
}

public function manage(Request $re)
{
$id=$re['id'];
$reg=addproModel::find($id);
$reg->proname=$re['productn'];
$reg->price=$re['price'];
$reg->quantity=$re['quantity'];
$res=$reg->save();


if($res)
{
    return redirect()->back()->with('msg', 'Data Updated');
}

}


}

