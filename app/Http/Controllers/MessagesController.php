<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Bringing Message Model 
use App\Message; 

class MessagesController extends Controller
{
    // function to submit contact from 

    public function submit(Request $request){
        // validating contact form
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // Create Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // save message
        $message->save();
        // redirect 
        return redirect('/')->with('success','Message sent successfully!');
    }

    // to dispaly messages

    public function getMessages(){
        $messages = Message::orderBy('created_at','desc')->paginate(5); //Pagination
        return view('messages')->with('messages',$messages);

    }
}
