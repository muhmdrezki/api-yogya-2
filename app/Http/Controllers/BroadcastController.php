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
}
