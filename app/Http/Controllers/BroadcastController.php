<?php

namespace App\Http\Controllers;

use App\Broadcast;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
  /**
   * Get All Broadcast
   */
  public function index()
  {
    $broadcasts = Broadcast::all();
    return response()->json([
      'status' => true,
      'data' => $broadcasts
    ]);
  }

  /**
   * Get Broadcast for home page
   */
  public function broadcastHome() {
    $broadcasts = Broadcast::all()->random(4);
    return response()->json([
      'status' => true,
      'data' => $broadcasts
    ]);
  }

  /**
   * Get Detail Broadcast
   */
  public function broadcastDetail($id)
  {
    $broadcast = Broadcast::find($id);
    return json()->json([
      'status' => true,
      'data' => $broadcast
    ]);
  }
}
