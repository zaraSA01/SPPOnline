<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function index()
    {
        function confirmDelete($title, $text){
            echo "<script>
            if(confirm('$text')) {
                window.location.href='/delete';
            }
         </script>";
        }

        $siswa = DB::table('siswa')->get();

        $title = 'Peringatan !!';
        $text = "apakah anda yakin ingin menghapus?";
        $icon = "Question";
        confirmDelete($title, $text);

        return view('pages.siswa.indexsiswa');
    }
    
    public function tambahsiswa()
    {
        return view('pages.siswa.tambahsiswa');
    }
    public function siswa(Request $request){
        $request->validate([
            'nama' => 'required|',
            'nis' => 'required|',
            'kelas' => 'required|',
            'angkatan' => 'required|',
            'totalbiaya' => 'required|',
            'walimurid' => 'required|',
        ]);
        DB::table('siswa')-> insert([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
            'totalbiaya' => $request->totalbiaya,
            'walimurid' => $request->walimurid,
        ]);
        return redirect('/siswa');}

        public function edit($id){
            $siswa = DB::table('siswa')->find($id);
            return view('pages.siswa.editsiswa', compact('siswa'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required',
                'nis' => 'required',
                'kelas' => 'required',
                'angkatan' => 'required',
                'totalbiaya' => 'required',
                'walimurid' => 'required',
            ]);
            
            DB::table('siswa')
                ->where('id', $id)
                ->update([
                    'nama' => $request->nama,
                    'nis' => $request->nis,
                    'kelas' => $request->kelas,
                    'angkatan' => $request->angkatan,
                    'totalbiaya' => $request->totalbiaya,
                    'walimurid' => $request->walimurid,
                ]);
        
            Session::success('success', 'Data berhasil diupdate');
            return redirect('/siswa');
        
        }

        public function destroy($id){
            $siswa = DB::table('siswa')->where('id', $id)->delete();
            Session::success('success', 'Data berhasil dihapus');
            return redirect('/siswa');
        }
}
