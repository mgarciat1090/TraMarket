<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Candidate;

class CandidateController extends Controller
{
	public function index(){
		return Candidate::all();
	}

	public function show(Candidate $candidate)
	{
		return $candidate;
	}

	public function store(){
		$candidate = Candidate::create($request->all());
		return Response()->json($candidate,201);
	}

	public function update(Request $request,Candidate $candidate){
		$candidate->update($request->all());
		return response()->json($candidate,200);
	}

	public function delete(Candidate $candidate)
	{
		$candidate->delete();
		return candidate()->json(null,204);
	}

}