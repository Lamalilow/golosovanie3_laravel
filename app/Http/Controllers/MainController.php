<?php

namespace App\Http\Controllers;


use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function mainView()
    {
        $votes = Vote::simplePaginate(12);

        return view('main', compact('votes'));
    }

    public function showVote(Vote $vote)
    {
//        dd( $actualCount = Vote::where('id', '=', $vote->id )->first());
        return view('votes.show_vote', compact('vote'));
    }

    public function addCountVote1(Vote $vote, $answer1)
    {

        if($answer1){
            $vote = Vote::where('id', '=', $vote->id )->first();
            $vote->count_answer1 = $vote->count_answer1+1;
            $vote->save();
            return back();
        }
        return back();
    }
    public function addCountVote2(Vote $vote, $answer2)
    {

        if($answer2){
            $vote = Vote::where('id', '=', $vote->id )->first();
            $vote->count_answer2 = $vote->count_answer2+1;
            $vote->save();
            return back();
        }
        return back();
    }

}
