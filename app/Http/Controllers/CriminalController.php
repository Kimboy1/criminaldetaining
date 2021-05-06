<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CriminalCreateValidation;
use App\Models\Criminal;
use Storage;
use Toastr;
use Carbon\Carbon;

class CriminalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('criminals.add');
    }

    public function store(CriminalCreateValidation $request)
    {
        dd("reached here");
        $criminal = Criminal::create([
            'criminal_name' => $request->movie_name,
            'criminal_address' => $request->criminal_address,
            'criminal_age' => $request->criminal_age,
            'criminal_gender' => $request->criminal_gender
        ]);
        //dd($request->hasFile('movie_image'));
        if($request->hasFile('criminal_image')){
            
            $file = $request->file('criminal_image');
            $name =  str_replace(' ','_',$request->movie_name).'.'.$file->getClientOriginalExtension();  
            
            try{
                Storage::disk('disk')->putFileAs('Documents/', $file,$name);
            }catch(\Exception $e)
            {
                dd($e->getMessage());
            }
            
            $criminal->criminal_image = $name;
            $criminal->save();
        }
        Toastr::success('Criminal added successfully');
        return redirect(route('dashboard'));
    }

    public function edit(Request $request)
    {
        return view('criminals.edit');
    }

    public function update(Request $request)
    {
        return redirect('dashboard');
    }

    public function delete(Request $request)
    {
        $movie = Movies::find($request->id);
        if($movie){
            $movie->delete();
            Toastr::success('Criminal deleted successfully');
        }else{
            Toastr::error('Unable to delete movie');
        }
        
        return redirect(route('dashboard'));
    }
}
