<?php

namespace app\commands;

use yii\console\Controller;
use app\queues\SendMailToUserJob;
use Yii;

class SendEmailToUsersController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
        Yii::$app->queue->push(new SendMailToUserJob([
        	'email' => 'chipnin@gmail.com',
        	'content' => 'You forgot ticking on MUSE project',
        ]));
    }
}
