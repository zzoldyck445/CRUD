<?php

namespace App\Http\Controllers\Crud;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;    
// use App\Models\User;

class CrudController extends Controller
{
    
     /** Show a list of all of the application's users.
     *
     * @return Response
     */
    public function add() {
  

        return view('users_crud.create');
        // echo $data;
    }

    public function update(){
        return view('users_crud.update');
    }

    public function delete(){
        // return view('home');
    }
    public function show($name){
        
        $data = [
            "Micheal" => "IT",
            "Dana" => "Accounting"
        ];

        return view('users_crud.show', [ 
            'student' => $data[$name] ?? 'Student' .$name. 'does not exist']);

        // return view('users_crud.show');
    }
}
