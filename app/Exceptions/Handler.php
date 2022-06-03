<?php

namespace App\Exceptions;

use App\ErrorLog;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
//use Illuminate\Support\Facades\URL;
use Throwable, Session, Mail, Auth, URL, Agent, DB;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception, $status = 500)
    {
        $current_url = request()->url();
        $route_arr = explode("/", $current_url, 10);
        $route3= (isset($route_arr[3]) &&  $route_arr[3])?$route_arr[3]:'';

        if($route3!=='Res') {
            $previous = URL::previous();
            $request_param = json_encode(request()->all());
            $device = Agent::device();
            $browser = Agent::browser();
            $platform = Agent::platform();
            $user_agent = request()->header('User-Agent');
            $error_type = '';
            if (str_contains($exception->getMessage(), 'Maximum execution time')) {
                $error_type = 'maximum_execution_time';
            } else if (str_contains($exception->getMessage(), 'Allowed memory size')) {
                $error_type = 'allowed_memory';
            } else if (str_contains($exception->getMessage(), 'queue') ) {
                $error_type = 'queue';
            }else {
                $error_type = 'general';
            }
            if (!($status >= 400 && $status < 500)) {
                $data = [
                    'status' => 'new',
                    'previous_url' => $previous,
                    'current_url' => $current_url,
                    'request_params' => $request_param,
                    'error_msg' => $exception->getMessage() . " " . $exception->getFile() . " " . $exception->getLine(),
                    'error_trace' => json_encode($exception->getTraceAsString()),
                    'device' => $device,
                    'browser' => $browser,
                    'platform' => $platform,
                    'user_agent' => $user_agent,
                    'error_type' => $error_type,
                    'error_code' => $status
                ];
                try {
                    ErrorLog::create($data);
                }catch (Exception $exception){
                    return parent::render($request, $exception);
                }
            }

        }
        return parent::render($request, $exception);
    }
}
