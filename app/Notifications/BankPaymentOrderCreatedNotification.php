<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BankPaymentOrderCreatedNotification extends Notification
{
    use Queueable;

protected $order;
 /**
     * Create a new notification instance.
     *
     * @return void
     */

public function __construct($order) {
        $this->order = $order;
}


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('You Place Order at MizeMart.com Please Deposit '.$this->order->amount.' usd  at '.$this->order->bank_name)
                    ->line('or '.($this->order->amount*50).' ETB  at '.$this->order->bank_name)
                    ->action('After making payment please Use this link to confirm your payment :', url('/bankpayment/'.$this->order->id))
                    ->line('Thank you for using our Application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
