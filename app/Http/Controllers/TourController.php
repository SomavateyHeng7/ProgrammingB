<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\File;
 
class TourController extends Controller
{
        public function index()
        {
            $files =File::all();
          return view ('package.index')->with('files', $files);
        }
    
        
        public function create()
        {
            return view('package.create');
        }
    
       
        public function store(Request $request)
        {
            $input = $request->all();
            File::create($input);
            return redirect('packages')->with('flash_message', 'Contact Addedd!');  
        }
    
        
        public function show($id)
        {
            $files = File::find($id);
            return view('package.show')->with('files', $files);
        }
    
        
        public function edit($id)
        {
            $files= File::find($id);
            return view('package.edit')->with('files', $files);
        }
    
      
        public function update(Request $request, $id)
        {
            $files = File::find($id);
            $input = $request->all();
            $files->update($input);
            return redirect('packages')->with('flash_message', 'Contact Updated!');  
        }
    
       
        public function destroy($id)
        {
            File::destroy($id);
            return redirect('packages')->with('flash_message', 'Contact deleted!');  
        }
    }