<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Singular\Repositories\LikeRepo;


class ChatController extends Controller{

    public function __construct(LikeRepo $likeRepo)
    {
        $this->likeRepo = $likeRepo;
    }

    public function index()
    {
        $data = $this->likeRepo->lista();
        return view('chat.index', compact('data'));
    }

    public function chat($id)
    {
        $chat = $this->likeRepo->findChat($id);
        return view('chat.chat', compact('chat'));
    }
}