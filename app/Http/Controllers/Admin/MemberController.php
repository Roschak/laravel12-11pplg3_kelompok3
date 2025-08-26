<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create');
    }
    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        if ($member->image && file_exists(public_path('images/members/' . $member->image))) {
            unlink(public_path('images/members/' . $member->image));
        }

        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/members'), $imageName);
        }

        Member::create([
            'name' => $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'image' => $imageName,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'twitter' => $request->twitter,
        ]);

        return redirect()->route('admin.members.index')->with('success', 'Member added successfully!');
    }
}
