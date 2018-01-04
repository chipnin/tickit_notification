<?php

namespace app\queues;

use yii\base\BaseObject;

class SendMailToUserJob extends BaseObject implements \yii\queue\JobInterface
{
    public $email;
    public $content;
    
    public function execute($queue)
    {
        Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['mailSupport'])
            ->setTo($this->email)
            ->setSubject('Thong bao quen checkout du an MUSE')
            ->setTextBody($this->content)
            ->send();
    }
}
