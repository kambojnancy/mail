<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void

     */
    public $demo;
    public function __construct()
    {
        
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return [
          "driver" => "smtp",
          "host" => "smtp.mailtrap.io",
          "port" => 2525,
          "from" => array(
              "address" => "from@example.com",
              "name" => "Example"
          ),
          "username" => "2c90fb17221910",
          "password" => "c7567fe4f07491",
          "sendmail" => "/usr/sbin/sendmail -bs"
        ];
    }
}
