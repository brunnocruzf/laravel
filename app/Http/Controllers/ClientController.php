<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
		return Client::all();
	}
	public function salva(Request $request){
		return Client::create($request->all());
	}
	public function busca($id){
		return Client::find($id);
	}
	public function deleta($id){
		Client::find($id)->delete();
	}
}
