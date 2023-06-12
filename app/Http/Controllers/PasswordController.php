<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    
    public function password(){

        return view('password-generator');

    }

    public function generate(Request $request){

        
        $formData = $request->validate([
            'length' => ['required','integer','min:8','max:25'],
            'uppercase' => ['nullable','boolean'],
            'lowercase' => ['nullable','boolean'],
            'symbols' => ['nullable','boolean'],
            'numbers' => ['nullable','boolean'],
        ]);

        $useLength = $formData['length'];
        $useUppercase = $request->input('uppercase', false);
        $useLowercase = $request->input('lowercase', false);
        $useSymbols = $request->input('symbols', false);
        $useNumbers = $request->input('numbers', false);

        $characters = '';
        if($useUppercase){
            $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        if($useLowercase){
            $characters .= 'abcdefghijklmnopqrstuvwxyz';
        }

        // if($useSymbols){
        //     $defSymbols = " !@#$%^&*() ";
        //     $characters .= $defSymbols;
        // }

        if($useNumbers){
            $characters .= "0123456789";
        }

        $randomlyGenerated = Str::random($useLength, $characters);

        

        if($randomlyGenerated){

            return view('generated', compact('randomlyGenerated', 'useLength'))->with('success', 'Password has been generated successfully');
            

        }else{
            return back()->with('error', 'Something went wrong, try again later');
        }


    }

}
