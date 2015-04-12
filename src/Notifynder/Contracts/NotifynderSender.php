<?php namespace Fenos\Notifynder\Contracts;

use Fenos\Notifynder\Senders\SendOne;
use Fenos\Notifynder\Senders\SendMultiple;

/**
 * Class SenderManager
 *
 * @package Fenos\Notifynder\Senders
 */
interface NotifynderSender
{

    /**
     * Send any notifications
     *
     * @param  array $info
     * @param  null  $category
     * @return mixed
     */
    public function send($info, $category = null);

    /**
     * Send now whatever data passed
     *
     * @param  array $info
     * @param        $category
     * @return mixed
     */
    public function sendNow($info, $category = null);

    /**
     * Send one method to get fully working
     * older version
     *
     * @param $info
     * @param $category
     * @return SendOne
     */
    public function sendOne($info, $category);

    /**
     * Send Multiple method to get fully working
     * older version
     *
     * @param $info
     * @return SendMultiple
     */
    public function sendMultiple($info);

    /**
     * Send a group of notifications
     * at once
     *
     * @param        $group_name
     * @param  array $info
     * @return mixed
     */
    public function sendGroup($group_name, $info = []);

    /**
     * This method allow to Extend
     * notifynder with custom sender
     *
     * @param           $name
     * @param  callable $extendSender
     * @return $this
     */
    public function extend($name, $extendSender);

    /**
     * Call a custom method
     *
     * @param $customMethod
     * @param $notification
     * @return mixed
     */
    public function customSender($customMethod,$notification);
}