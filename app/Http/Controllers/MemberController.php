<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function getAll()
    {
        return view('member', [
            "title"         => "Member",
            "listMember"    => Member::all()
        ]);
    }

    public function show($link)
    {
        return view('detailMember', [
            "title" => "Detail Member",
            "post"  => Member::find($link)
        ]);
    }
}