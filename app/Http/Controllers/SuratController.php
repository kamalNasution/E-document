<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\surat;

class SuratController extends Controller
{
    public function store(){
    	$data = new Surat;
    	$data->kepada = Input::get('kepada',false);
    	$data->dari = Input::get('dari',false);
    	$data->no = Input::get('no',false);
    	$data->hal = Input::get('hal',false);
    	$data->tanggal = Input::get('tanggal');
    	$data->isi = Input::get('isi');
    	$data->save();

    	return redirect('/');
  
    	}

    public function read(){
        $data['daftar_surat'] = Surat::all();
        return view('surat_view',$data);
    }

     public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Input::get('name');
            $nerd->email      = Input::get('email');
            $nerd->nerd_level = Input::get('nerd_level');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('nerds');
        }
    }
}