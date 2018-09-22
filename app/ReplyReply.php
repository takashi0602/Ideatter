<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyReply extends Model
{
    protected $fillable = [
      'user_id', 'reply_id', 'description',
    ];
}
