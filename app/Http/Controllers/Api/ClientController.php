<?php
namespace App\Http\Controllers\Api;
use App\Models\Client;
use App\Http\Resources\ClientResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
   * Get all clients
   * 
   * @return \Illuminate\Http\Response
   */
  public function get()
  {  
    $data = ClientResource::collection(
      Client::orderBy('name')->get()
    );
    return response()->json($data);
  }

  /**
   * Search clients
   * 
   * @return \Illuminate\Http\Response
   */
  public function search($keyword = NULL)
  {  
    $data = ClientResource::collection(
      Client::orderBy('name')
        ->where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhere('acronym', 'LIKE', '%'.$keyword.'%')
        ->orWhere('city', 'LIKE', '%'.$keyword.'%')
        ->get()
    );
    return response()->json($data);
  }
}
