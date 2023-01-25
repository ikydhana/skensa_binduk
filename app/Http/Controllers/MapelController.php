<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Mapel;
 
use Session;
 
use App\Exports\MapelExport;
use App\Imports\MapelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class MapelController extends Controller
{
	public function index()
	{
		$mapel = Mapel::all();
		return view('mapel',['mapel'=>$mapel]);
	}
 
	public function export_excel()
	{
		return Excel::download(new MapelExport, 'ListMapel.xlsx');
	}
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_mapel/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Mapel Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/mapel');
	}
}