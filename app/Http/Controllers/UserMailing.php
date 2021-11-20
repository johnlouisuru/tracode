<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserMailing extends Controller
{
    public function store(Request $request)
    {
        $users=User::create($this->validatedData());

        Mail::to($users->email)->send(new TestMail());

        return redirect('/admin');
    }
}
