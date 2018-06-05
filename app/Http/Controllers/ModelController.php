<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
     

    public function views( ){
    $flights = Flight::all();
    return view("model", ['flights'=>$flights]);
    }

    public function edit($id){
    	 $flights = Flight::find($id);
    	return view('edit', ['flights'=>$flights]);
    

}





    	//$flights = Flight::where('id',$id)->get();
    	//return view('edit', compact('flights'));






   // $flights = Flight::find($id);
    //if(count($flights) > 0){
    	//return view('edit', ['flights'=>$flights]);
    //}
    //else{
    ///	$flights = Flight::all();
    //	return view('welcome', ['flights'=>$flights]);
      //  }
    


    public function update(Request $req){
    	$id = $req->id; 
        $f = Flight::find($id); 
        $f->name = $req->name;
        $f->surname = $req->surname;
        $f->sector = $req->sector;
        $f->save(); 

          return redirect()->route('model');







    	   // $id=$req->id;
    //$flights=array('name'=>$req->name);

   // $sql = Flight::where('id',$id)->update($flights);
   // if($sql){
    //	return redirect('model');
   // }else{
   // 	echo "Error";
   // }



    	//$id=$request->id;
    	//$flight = Flight::find($id);
    	//$flight->name = $request->input('name');
    	//$flight->save();







    	//$id=$req->id;
    	//$user=Flight::find($req->input('id',$id));

    	//$user->name = $req->input('name');

    	//$user->save();
       // return redirect()->route('model');









   // $id=$req->id;
   // $flights=array('name'=>$req->name);

   // $sql = Flight::where('id',$id)->update($flights);
   // if($sql){
    //	return redirect('model');
   // }else{
  //  	echo "Error";
 //   }







   // dd($req->input());
    //$user = new Flight();

    //$user->name = $req->input('name');
        //$flight = App\Flight::find($id);
    	//$flight->name = $req->input('name');

   // $user->save();
    	//$flight = new Flight();
        //$flight->name = $req->input('name');

        // $flight->save();
       // return redirect()->route('model');
    }

        public function delete($id){
    	
        $f = Flight::find($id); 
  
        $f->delete();

          return redirect()->route('model');
      }


        public function addpost(Request $request){
    	
        $flight = new Flight;

        $flight->name = $request->name;
        $flight->surname = $request->surname;
        $flight->sector = $request->sector;

        $flight->save();

          return redirect()->route('model');
      } 
}
    

