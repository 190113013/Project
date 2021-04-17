<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Upload extends Mailable
{
    use Queueable, SerializesModels;
   protected $data;
   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct($data=[])
   {
       $this->data = $data;
   }
   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {

    return $this->from('190113013@stu.sdu.edu.kz')
        ->view('emails/upload')
        ->subject('Document Upload')
        ->text('emails.demo_plain')
        ->with(
          [
                'testVarOne' => '1',
                'testVarTwo' => '2',
          ]);
       /*return $this->from('190113013@stu.sdu.edu.kz')
                ->view('emails/upload')
               ->subject('Document Upload')
               ->attach($this->data['document']->getRealPath(),
               [
                   'as' => $this->data['document']->getClientOriginalName(),
                   'mime' => $this->data['document']->getClientMimeType(),
               ]);*/
   }
}

/*->with(
          [
                'testVarOne' => '1',
                'testVarTwo' => '2',
          ]);*/

          /*->attach(public_path('img').'\1.png', [
            'as' => 'demo.jpg',
            'mime' => 'image/jpeg',
            ]);*/