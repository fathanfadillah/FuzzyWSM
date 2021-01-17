<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Rekomendasi;
use \App\Models\Laptop;
use Ixudra\Curl\Facades\Curl;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class RekomendasiController extends Controller
{
    public function hasil(){
        $index = json_decode(Crul::to('')
                    -get());
        $result = $index->data;
        return view('other.about',compact('data'));
    }
    //
    public function index(){
        // $process = new Process(['python', 'wsm.ipynb']);
        // $process->run();
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }
        
        // return $process->getOutput();
        
        $index = Rekomendasi::pluck('hasil');
        $laptops = Laptop::where('id',$index)->get();
        return view('other.about',compact('laptops'));
    }
    
}
