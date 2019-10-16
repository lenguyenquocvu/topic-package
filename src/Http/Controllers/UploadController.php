<?php
namespace Topic\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function index()
    {
        return view('topicview::upload', array());
    }
    public function upload(Request $request)
    {
        if($request->hasFile('filesTest'))
        {
            $request->file('filesTest')->move(base_path(('\public\topicpub\upload')), 
                                                $request->file('filesTest')->getClientOriginalName());

            return "Upload successed!";
            
        } 
        else 
        {
            return "Upload failed!";
        }
    }
}