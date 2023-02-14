<?php

namespace App\Models;

use App\Mail\SupportRequestAutoResponse;
use App\Mail\SupportRequestSubmitted;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class SupportRequest extends Model
{
    use CrudTrait;

    protected $guarded = [];

    protected static function boot()
    {

        // send an email whenever a request is submitted
        static::created(function ($supportRequest) {

            // send confirmation email to requester
            Mail::to($supportRequest->email)->send(new SupportRequestAutoResponse($supportRequest));

            // send notification email to RMS
            Mail::to(config('mail.to'))->send(new SupportRequestSubmitted($supportRequest));
        });

        parent::boot();
    }

}
