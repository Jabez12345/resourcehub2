<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;


class UploadController extends Controller
{
    public function uploadMaterial(Request $request)
    {
        $request->validate([
            'course_code' => 'required|string|max:255',
            'course_title' => 'required|string|max:255',
            'file' => 'required|mimes:doc,pdf,xls,pptx|max:10240', // 10MB max
        ]);
    
        try {
            $user_id = Auth::id();
            $filePath = $request->file('file')->store('materials', 'public');
    
            Material::create([
                'user_id' => $user_id,
                'course_code' => $request->course_code,
                'course_title' => $request->course_title,
                'file_path' => $filePath,
            ]);
    
            return redirect()->back()->with('success', 'File uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Upload failed! Please try again.');
        }
    }
    
}
