<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentsShopsCreate extends Component
{
    public $shop;
    public $user;

    public $comment;
    public $calification;

    protected $rules = [
        'comment' => 'required|max:100',
        'calification' => 'required',
    ];

    public function mount($shop)
    {
        $this -> shop = $shop;
        $this -> user = Auth::user();
    }

    public function render()
    {
        return view('livewire.comments-shops-create');
    }
    public function sendComment()
    {
        $this->validate();

        Comment::create([
            'cmessage' => $this->comment,
            'qualification' => $this->calification,
            'commentable_id' => $this-> shop -> id,
            'commentable_type' => 'App\Models\Shop',
            'user_id' => $this->user -> id
        ]);
        $this->reset('comment', 'calification');
        $this->emitTo('comments-shops-list','activecommentshop');
        // $this->emitTo('comments-users-data','render');

    }
}
