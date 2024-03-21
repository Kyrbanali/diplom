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

    public function showGroup(int $groupId)
    {
        $group = Group::find($groupId);

        return view('group.index', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update([
            'group_name' => $request->input('group_name'),
            'group_code' => $request->input('group_code'),
        ]);

        return redirect()->route('admin.group.show', $group->id);
    }
}
