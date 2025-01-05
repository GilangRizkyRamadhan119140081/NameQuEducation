<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NameQuotientController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        $users = Users::all();
        // Mengarahkan ke namequotient.blade.php
        return view('namequotient.namequotient', compact('users'));
    }

    // Menampilkan form tambah pengguna
    public function create()
    {
        return view('namequotient.create');
    }

    // Menyimpan data pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'tanggal_lahir' => $request->tanggal_lahir,
            'referal_id' => $request->referal_id,
            'referal_code' => $request->referal_code,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'image' => $request->image,
            'kode_voucher' => $request->kode_voucher,
            'kode_paket' => $request->kode_paket,
            'expired' => $request->expired,
        ]);

        return redirect()->route('namequotient.index')->with('success', 'User created successfully.');
    }

    // Menampilkan form edit pengguna
    public function edit($id)
    {
        $user = Users::findOrFail($id);
        return view('namequotient.edit', compact('user'));
    }

    // Memperbarui data pengguna
    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$id}",
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'tanggal_lahir' => $request->tanggal_lahir,
            'referal_id' => $request->referal_id,
            'referal_code' => $request->referal_code,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'image' => $request->image,
            'kode_voucher' => $request->kode_voucher,
            'kode_paket' => $request->kode_paket,
            'expired' => $request->expired,
        ]);

        return redirect()->route('namequotient.index')->with('success', 'User updated successfully.');
    }

    // Menghapus pengguna
    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect()->route('namequotient.index')->with('success', 'User deleted successfully.');
    }
}
