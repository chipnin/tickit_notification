<?php

namespace app\queues;

use yii\base\BaseObject;

class SendMailToUserJob extends BaseObject implements \yii\queue\JobInterface
{
    public $email;
    public $content;
    
    public function execute($queue)
    {
        file_put_contents('E:\storage\queues\send-mail.txt', "Email: $this->email - Content: $this->content");
    }
}
