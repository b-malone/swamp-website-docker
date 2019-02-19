<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;
use App\Mail\Volunteer;

class EmailController extends Controller
{
  public $toAddr = "bmalone.developer@gmail.com";

  /**
   * @summary
   */
  public function sendMessage(Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $msg = $request->input('message');

    try {

       \Mail::to($this->toAddr)->send(new Message($name, $email, $msg));

      // \Mail::send('emails.basic', [
      //   'title' => "Message from: $name",
      //   'content' => join('<br><br>', array("Name: $name", "Email: $email", $msg))
      // ], function ($message) {
      //
      //   $message->from($this->toAddr, 'Christian Nwamba');
      //   $message->to($this->toAddr);
      //   $message->subject("Swamp Website Message");
      // });
    } catch(\Exception $e){
      // ERROR
      return response()->json([
        'status' => 'error',
        'message' => $e->getMessage(),
        'params' => json_encode($request->input())
      ]);
    }

    // SUCCESS
    // return response()->json(['message' => 'Request completed']);
    return redirect('/')->with(array(
      'alert' => 'Message sent!'
    ));
  }

  /**
   * @summary
   */
  public function sendVolunteerRequest(Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');

    try {

      \Mail::to($this->toAddr)->send(new Volunteer($name, $email));


    } catch(\Exception $e){
      // ERROR
      return response()->json([
        'status' => 'error',
        'message' => $e->getMessage(),
        'params' => json_encode($request->input())
      ]);
    }

    // SUCCESS
    // return response()->json(['message' => 'Request completed']);
    return redirect()->back()->with(array(
      'alert' => 'Volunteer request sent!'
    ));
  }

  public function send(Request $request) {
    $title = $request->input('title');
    $content = $request->input('content');

    // API Base URL
    // https://api.mailgun.net/v3/sandbox25b573c86fb04cf7b5bc2a9cf54665fe.mailgun.org


    $toAddr = "bmalone.developer@gmail.com";
    // $fromAddr = $request->input('from');
    // $attach = $request->file('file');

    /**
     *  Mail::queue() =>
     *    php artisan queue:listen
     *    sude nohup php artisan queue:work --daemon --tries=3
     */

    try {

      \Mail::send('emails.basic', ['title' => $title, 'content' => $content], function ($message) {

        $message->from($toAddr, 'Christian Nwamba');
        $message->to($toAddr);

        // $message->from($address, $name = null);
        // $message->sender($address, $name = null);
        // $message->to($address, $name = null);
        // $message->cc($address, $name = null);
        // $message->bcc($address, $name = null);
        // $message->replyTo($address, $name = null);
        // $message->subject($subject);
        // $message->priority($level);
        // $message->attach($pathToFile, array $options = []);
      });
    } catch(\Exception $e){
      // ERROR
      return response()->json(['message' => 'ERROR::'+$e->getMessage()]);
    }

    // SUCCESS
    return response()->json(['message' => 'Request completed']);
  }
}
