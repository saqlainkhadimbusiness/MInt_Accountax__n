<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuoteCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $total;
    protected $turnover;
    protected $returns;
    protected $employees;
    protected $transactions;

    public function __construct($total, $turnover, $returns, $employees, $transactions)
    {
        $this->total = $total;
        $this->turnover = $turnover;
        $this->returns = $returns;
        $this->employees = $employees;
        $this->transactions = $transactions;
    }

    public function build()
    {
        return $this->view('emails.quote')
            ->with([
                'total' => $this->total,
                'turnover' => $this->turnover,
                'returns' => $this->returns,
                'employees' => $this->employees,
                'transactions' => $this->transactions
            ]);
    }
}
