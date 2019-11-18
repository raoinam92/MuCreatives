<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Mail\LandingPage;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
         'company_name' =>  'required',
         'states' =>  'required',
         
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'phone' => 'required|min:11|numeric'
     ]);

        $data = array(
            'email' => $request->email,
            'states' => $request->states,
            'phone' => $request->phone,
            'choose_sub' => $request->choose_sub, 
            'name'      =>  $request->name,
            'company_name'  =>  $request->company_name,
            'message'   =>   $request->message
        );

     Mail::to('info@mavenup.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
    
    public function send_lamdingpage(Request $request)
    {
    //     $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'phone' => 'required|min:11|numeric'
    //  ]);
     
     $data = array(
            'email' => $request->email,
            'phone' => $request->number,
            'name'      =>  $request->name
        );

        Mail::to('info@mavenup.com')->send(new LandingPage($data));
          return back()->with('success', 'Thanks for contacting us!');
    }
}

?>