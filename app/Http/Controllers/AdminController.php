<?php

namespace App\Http\Controllers;


use App\Http\Requests\VoteRequest;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('user.admins.admin_panel');
    }

    public function addVoteView()
    {
        $votes = Vote::all();
        return view('votes.add_vote', compact('votes'));
    }
    public function addVotePost(VoteRequest $request)
    {
        $data = $request->validated();
        Vote::create($data);

        return redirect()->route('addVote')->with(['successVote' => true]);
    }

    public function deleteVotePost(Vote $vote)
    {
        $vote->delete();
        return redirect()->route('addVote');
    }




}
