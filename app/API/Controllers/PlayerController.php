<?php

namespace App\API\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Player;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        //ToDo: implement pagination
        return response()->json(['data' => $players]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {
        $player = Team::create($request->validated());
        return response()->json($player, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return response()->json(['data' => $player]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PlayerRequest  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, Player $player)
    {
        $player->update($request->validated());
        return response()->json($player, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
