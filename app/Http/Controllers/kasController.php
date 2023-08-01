<?php

namespace App\Http\Controllers;

use App\Models\kas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class kasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $halaman = 4;
        if (strlen($katakunci)) {
            $data = kas::where('nim', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('tanggal', 'like', "%$katakunci%")
                ->orWhere('keterangan', 'like', "%$katakunci%")
                ->paginate($halaman);
        } else {
            $data = kas::orderBy('nim', 'desc')->paginate($halaman);
        }
        return view('kas.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     @param  \Illuminate\Http\Request  $request
     @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('keterangan', $request->keterangan);
        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ], [
            'nim.required' => 'NIM harus diisi',
            'nim.numeric' => 'NIM harus bernilai angka',
            'nim.unique' => 'NIM sudah ada',
            'nama.required' => 'Nama Harus diisi',
            'tanggal.required' => 'tanggal Harus diisi',
            'keterangan.required' => 'keterangan harus diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ];
        kas::create($data);
        return redirect()->to('kas')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kas::where('nim', $id)->first();
        return view('kas.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $request->validate([
                'nama' => 'required',
                'tanggal' => 'required',
                'keterangan' => 'required',
            ], [
                'nama.required' => 'Nama Harus diisi',
                'tanggal.required' => 'tanggal Harus diisi',
                'keterangan.required' => 'keterangan harus diisi',
            ]);
            $data = [
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
            ];
            kas::where('nim', $id)->update($data);
            return redirect()->to('kas')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            kas::where('nim', $id)->delete();
            return redirect()->to('kas')->with('success', 'Data berhasil dihapus');
        }
    }
}