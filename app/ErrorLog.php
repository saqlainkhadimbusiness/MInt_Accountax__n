<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $fillable=['status','previous_url','current_url','request_params','error_msg','error_trace','device','browser','platform','user_agent','error_code','error_type'];
    protected $table='error_logs';

}
