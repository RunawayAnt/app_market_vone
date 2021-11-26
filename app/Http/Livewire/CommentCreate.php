<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentCreate extends Component
{
    public $product;
    public $user;

    public $comment;
    public $calification;

    protected $rules = [
        'comment' => 'required|max:100',
        'calification' => 'required',
    ];

    public function mount($product)
    {
        $this -> product = $product;
        $this -> user = Auth::user();
    }

    public function render()
    {
        return view('livewire.comment-create');
    }

    public function sendComment()
    {
        $this->validate();

        Comment::create([
            'cmessage' => $this->comment,
            'qualification' => $this->calification,
            'commentable_id' => $this->product -> id,
            'commentable_type' => 'App\Models\Product',
            'user_id' => $this->user -> id
        ]);
        $this->reset('comment', 'calification');
        $this->emitTo('comments-users','activecomment');
        // $this->emitTo('comments-users-data','render');


    }

}
