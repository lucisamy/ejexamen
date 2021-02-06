<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailContactoController extends Controller
{
  public function contact(Request $request){
    request()->validate([
      'name' => 'required',
      'email' => 'required|email',
      'msg' => 'required'
    ]);

      $subject = "Proyectos Universidad";
      $for = $request['email'];
      Mail::send('emails.email',$request->all(), function($msj) use($subject,$for){
          $msj->from("universidad@uni.org","Universidad proyectos");
          $msj->subject($subject);
          $msj->to($for);
      });
      return redirect()->back();
  }

}
