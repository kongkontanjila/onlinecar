<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\employeer;
use App\admin;
use App\member;
use App\wishlist;
use App\availablecar;
use App\rent;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

	public function validSession($req){

		if($req->session()->has('user')){
			return true;
		}else{
			return false;
		}
	}

    public function index(Request $req){
		
		if($this->validSession($req)){
			$user = user::find($req->session()->get('id'));
		return view('home.index',['user'=>$user]);
		}else{
			return redirect()->route('login.index');
		}
    }
    public function add(){

    	return view('home.add');
    }

    public function create(Request $req){

    	$user = new user();
		$user->username = $req->uname;
		$user->mail = $req->mail;
		$user->number = $req->number;
		$user->password = $req->password;
		$user->type = $req->type;
		
    	$user->save();

    	return redirect()->route('login.index');
    }
//car	
	 public function addcar(){

    	return view('home.addcar');
    }
	 public function createcar(Request $req){
      $user = user::find($req->session()->get('id'));
    	$availablecar = new availablecar();
		$availablecar->name = $req->name;
		$availablecar->price = $req->price;
		$availablecar->type = $req->type;
		
    	$availablecar->save();

    	return view('home.index',['user'=>$user]);
    }

	 public function showcar(){

    	$car = availablecar::all();
    	return view('home.availablecar',['car'=>$car]);
    }
	
	 public function showwish(){

    	$car = wishlist::all();
    	return view('home.order',['car'=>$car]);
    }
	
	public function showhistory(){

    	$car = rent::all();
    	return view('home.rent',['car'=>$car]);
    }
	
	
	public function editcar($id){
		$car = availablecar::find($id);
		return view('home.editcar',['car'=>$car]);
	
		
    }
	
	

    public function updatecar(Request $req, $id){

    	$user = user::find($req->session()->get('id'));

    	$availablecar = new availablecar();
		$availablecar->name = $req->name;
		
		$availablecar->price = $req->price;
		
		$availablecar->type = $req->type;
		
		
    	$availablecar->save();

		return view('home.index',['user'=>$user]);
    }
	  public function deletecar($id){
		
		$car = availablecar::find($id);
		return view('home.deletecar',['car'=>$car]);
	}
	

    public function destroycar(Request $req,$id){
		$user = user::find($req->session()->get('id'));

		availablecar::destroy($id);
		return view('home.index',['user'=>$user]);
	}
	
	public function wishlist(Request $req,$id){
		$user = user::find($req->session()->get('id'));
	
		$car = availablecar::find($id);
		$wishlist = new wishlist();
		$wishlist->id=$car->id; 
		$wishlist->name=$car->name; 
		$wishlist->price=$car->price; 
		$wishlist->type=$car->type; 
		
		$wishlist->save();
		availablecar::destroy($id);
		return view('home.index',['user'=>$user]);
    }
	
	
	
	
	//endcar
	
	//member
	
	 public function showmember(){

    	
		$member = user::all()->where('type','user');
				
    	return view('home.member',['member'=>$member]);
    }
	
	
	 public function showprivate(){

    	
		$private = availablecar::all()->where('type','private');
				
    	return view('home.private',['private'=>$private]);
    }
	
	 public function showmicro(){

    	
		$private = availablecar::all()->where('type','micro');
				
    	return view('home.micro',['private'=>$private]);
    }
	 public function showpickup(){

    	
		$private = availablecar::all()->where('type','pickup');
				
    	return view('home.pickup',['private'=>$private]);
    }
	
	  public function deletemember(Request $req,$id){
		$user = user::find($req->session()->get('id'));
		$member = member::find($id);
		

		member::destroy($id);
		return view('home.index',['user'=>$user]);
	}
	
	
	//endmember
	public function details($id){

		$std = User::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = employeer::all();
    	return view('home.stdlist', ['std'=> $stdList]);
    }
	
	
		public function edit(Request $req){
		$user = user::find($req->session()->get('id'));
		return view('home.edit',['user'=>$user]);
	
		
    }
	
	

    public function update(Request $req, $id){

    	$user = user::find($req->session()->get('id'));

    	$user = new user();
		$user->username = $req->uname;
		$user->mail = $req->mail;
		$user->number = $req->number;
		$user->password = $req->password;
		$user->type = $req->type;
		
		
    	$user->save();

		return view('home.index',['user'=>$user]);
    }
	
	 public function cancel($id){
		
		$car = wishlist::find($id);
		return view('home.cancelcar',['car'=>$car]);
	}
	

    public function cancelcar(Request $req,$id){
		$user = user::find($req->session()->get('id'));

		wishlist::destroy($id);
		return view('home.index',['user'=>$user]);
	}
	public function history(Request $req,$id){
		$user = user::find($req->session()->get('id'));
	
		$car = wishlist::find($id);
		$rent = new rent();
		$rent->id=$car->id; 
		$rent->name=$car->name; 
		$rent->price=$car->price; 
		$rent->type=$car->type; 
		
		$rent->save();
		wishlist::destroy($id);
		return view('home.payment',['rent'=>$rent]);
    }
	
	public function paydone(){
		$user = user::find($req->session()->get('id'));
		$message="PAYMENT DONE SUCCESSFULLY";
		return view('home.index',['user'=>$user],compact('message'));
		
		
    }
	
	
	
	
	

   
	
}
