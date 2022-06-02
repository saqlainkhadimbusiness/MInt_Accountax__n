<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $fillable=['status','previous_url','request_params','error_msg','error_trace','device','browser','user_agent','platform','error_type','error_code','current_url'];
    protected $table='error_logs';

}
