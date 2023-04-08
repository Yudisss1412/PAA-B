<?php
  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class HomeController extends Controller
{
    public function index()
    {
        $users = User::select('*')
        ->get();
        return view('home', ['users' => $users]);
    }
    public function tambahuser()
    {
        return view('tambahuser');
    }

    public function simpanuser(Request $request)
    {
        $tambah = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'remember_token' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);
        return redirect()->route('home');
    }
    public function ubahkuser($id_user)
    {
       $ubah = User::select('*')
                 ->where('id_user', $id_user)
                 ->get();
       return view('ubahuser', ['users' => $ubah]);
    }

public function updateuser(Request $request)
{
   $update = User::where('id_user', $request->id_user)
             ->update([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'remember_token' => Hash::make($request->password),
                'role' => $request->role,
                'active' => 1
             ]);

   return redirect()->route('home');
}

public function hapususer($id_user)
{
    $hapus = User::where('id_user', $id_user)
              ->delete();

    return redirect()->route('home');
}

}