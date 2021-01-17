<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \App\Models\Produk;
use \App\Models\Laptop;
use \App\Models\Bobot;
use Illuminate\Http\Request;
// use Datatables;
use Yajra\DataTables\DataTables;

class ColController extends Controller{
    protected $title = 'Laptop';

    public function index(){
        return view('other.profile');
    }
    // public function profile(){      
    //     return view('other.profile');
        
    // }

    public function api(){
        //   $produks = Produk::orderBy('updated_at','desc');
          $laptops = Laptop::orderBy('id');
        return DataTables::of($laptops)
        ->addColumn('action', function ($l) {
            return "
            <a href='#' onclick='edit(" . $l->id . ")' title='Edit Data'><i class='icon-pencil mr-1'></i></a>
            <a href='#' onclick='remove(" . $l->id . ")' class='text-danger' title='Hapus Data'><i class='icon-remove'></i></a>";
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
        // ->editColumn('nama',function($produks){
        //     return $produks->nama;
        // })
        // ->rawColumns(['nama'])
        // ->addIndexColumn()
        //     ->toJson();
    }
    
    public function bobot_api(){
        //   $produks = Produk::orderBy('updated_at','desc');
          $bobots = Bobot::get();
        return DataTables::of($bobots)
        ->addColumn('action', function ($b) {
            return "
            <a onclick='edit_bobot(" . $b->id . ")' title='Edit Data'><i class='icon-pencil mr-1 text-primary btn '></i></a>";
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
        // ->editColumn('nama',function($produks){
        //     return $produks->nama;
        // })
        // ->rawColumns(['nama'])
        // ->addIndexColumn()
        //     ->toJson();
    } 



    public function store(Request $request)
    {
        // dd('tai');
        $count = Laptop::count();
        // if($count < 8 ){
            $request->validate([
                'nama'=> 'required',
                'ram'=> 'required', 
                'memory_internal'=> 'required',
                'resolusi_layar'=> 'required',
                'berat'=> 'required',
                'baterai'=> 'required',
                'harga'=> 'required'
            ]);

            $ram = $request->ram;
            if($ram<4 || $ram>36){
                return response()->json([
                    'message' => 'Inputan RAM tidak sesuai'
                ],406);
            }
            $memori = $request->memory_internal;
            if($memori<200 || $memori>1400){
                return response()->json([
                    'message' => 'Inputan Memori tidak sesuai'
                ],406);
            }
            $resolusi = $request->resolusi_layar;
            if($resolusi<1000000 || $resolusi>9000000){
                return response()->json([
                    'message' => 'Inputan Resolusi tidak sesuai'
                ],406);
            }
            $berat = $request->berat;
            if($berat<1 || $berat>15){
                return response()->json([
                    'message' => 'Inputan Berat tidak sesuai'
                ],406);
            }
            $baterai = $request->baterai;
            if($baterai<1 || $baterai>15){
                return response()->json([
                    'message' => 'Inputan Baterai tidak sesuai'
                ],406);
            }
            $harga = $request->harga;
            if($harga<5000000 || $harga>55000000){
                return response()->json([
                    'message' => 'Inputan Harga tidak sesuai'
                ],406);
            }
    
            // $file     = $request->file('icon');
            // $fileName = time() . "." . $file->getClientOriginalName();  
            // $request->file('icon')->move("images/privy/", $fileName);
            // $request->file('icon')->storeAs($this->path, $fileName, 'sftp', 'public');
    
            $laptops = new Laptop();
            $laptops->nama = $request->nama;
            $laptops->ram = $request->ram;
            $laptops->memory_internal = $request->memory_internal;
            $laptops->resolusi_layar = $request->resolusi_layar;
            $laptops->berat = $request->berat;
            $laptops->baterai = $request->baterai;
            $laptops->harga = $request->harga;
            $laptops->save();
            $status = ' berhasil tersimpan.';
            // $code = 200;
        // }else{
        //     $status = ' sudah penuh. Anda perlu menghapus data laptop';
        //     $code = 507;
        // }      
        
        return response()->json([
            'message' => 'Data ' . $this->title . $status
        ]
        // ,$code
        );
    }

    public function destroy($id)
    {
        $laptops = Laptop::findOrFail($id);
        // $exist = $dokumentasis->icon;
        // Storage::disk('sftp')->delete($this->path . $exist);

        // $path  = "images/privy/" . $exist;
        // \File::delete(public_path($path));

        $laptops->delete();   

        return response()->json([
            'message' => 'Data ' . $this->title . ' berhasil dihapus.'
        ]);
    }

    public function edit($id)
    {
        $laptops = Laptop::findOrFail($id);

        return $laptops;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=> 'required',
            'ram'=> 'required', 
            'memory_internal'=> 'required',
            'resolusi_layar'=> 'required',
            'berat'=> 'required',
            'baterai'=> 'required',
            'harga'=> 'required'
        ]);
        
        
        $nama = $request->nama;
        $ram = $request->ram;
        $memory_internal = $request->memory_internal;
        $resolusi_layar = $request->resolusi_layar;
        $berat = $request->berat;
        $baterai = $request->baterai;
        $harga = $request->harga;

        $ram = $request->ram;
            if($ram<4 || $ram>36){
                return response()->json([
                    'message' => 'Inputan RAM tidak sesuai'
                ],406);
            }
            $memori = $request->memory_internal;
            if($memori<200 || $memori>1400){
                return response()->json([
                    'message' => 'Inputan Memori tidak sesuai'
                ],406);
            }
            $resolusi = $request->resolusi_layar;
            if($resolusi<1000000 || $resolusi>9000000){
                return response()->json([
                    'message' => 'Inputan Resolusi tidak sesuai'
                ],406);
            }
            $berat = $request->berat;
            if($berat<1 || $berat>15){
                return response()->json([
                    'message' => 'Inputan Berat tidak sesuai'
                ],406);
            }
            $baterai = $request->baterai;
            if($baterai<1 || $baterai>15){
                return response()->json([
                    'message' => 'Inputan Baterai tidak sesuai'
                ],406);
            }
            $harga = $request->harga;
            if($harga<5000000 || $harga>55000000){
                return response()->json([
                    'message' => 'Inputan Harga tidak sesuai'
                ],406);
            }
        
        $laptops   = Laptop::find($id);

        $laptops->update([
            'nama' => $nama,
            'ram' => $ram,
            'memory_internal' => $memory_internal,
            'resolusi_layar' => $resolusi_layar,
            'berat' => $berat,
            'baterai' => $baterai,
            'harga' => $harga
        ]);

        return response()->json([
            'message' => 'Data ' . $this->title . ' berhasil diperbaharui.'
        ]);
    }

    // bobot
    public function edit_bobot($id)
    {
        $bobots = Bobot::findOrFail($id);

        return $bobots;
    }

    public function update_bobot(Request $request, $id)
    {
        $request->validate([
            'bobot_ram'=> 'required', 
            'bobot_memory_internal'=> 'required',
            'bobot_resolusi_layar'=> 'required',
            'bobot_berat'=> 'required',
            'bobot_baterai'=> 'required',
            'bobot_harga'=> 'required'
        ]);
        
        
        $ram = $request->bobot_ram;
        $memory_internal = $request->bobot_memory_internal;
        $resolusi_layar = $request->bobot_resolusi_layar;
        $berat = $request->bobot_berat;
        $baterai = $request->bobot_baterai;
        $harga = $request->bobot_harga;
        
        $bobots   = Bobot::find($id);

        $bobots->update([
            'bobot_ram' => $ram,
            'bobot_memory_internal' => $memory_internal,
            'bobot_resolusi_layar' => $resolusi_layar,
            'bobot_berat' => $berat,
            'bobot_baterai' => $baterai,
            'bobot_harga' => $harga
        ]);

        return response()->json([
            'message' => 'Bobot ' . $this->title . ' berhasil diperbaharui.',
            'success' => true,
            'data'    => $bobots 
            // .' ini idnya='.$id
        ],200);
    }
    // bobot

    // public function about(){
    //     return view('other.about');
    // }
}