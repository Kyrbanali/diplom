<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function adminIndex()
    {
        $groups = Group::all();
        return view('admin.groups', compact('groups'));
    }
}
