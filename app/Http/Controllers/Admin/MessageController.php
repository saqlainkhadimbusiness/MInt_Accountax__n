<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();

        return view('admin.messages.index', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('admin.messages.edit', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
    }
}
