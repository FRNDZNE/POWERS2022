<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'nim' => ['required','min:10'],
            'gender' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required'],
            'kontak' => ['required'],
            'angkatan' => ['required'],
            'semester' => ['required'],
            'jurusan_id' => ['required'],
            'prodi_id' => ['required'],
            'reason' => ['required'],
            'foto' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $foto = "uploads/profiles/" . md5(date('dmyhis')) . '.jpg';
        Image::make($data['foto'])->encode('jpg',100)->orientate()->resize(1024, null, function ($constraint){
            $constraint->upsize();
            $constraint->aspectRatio();
        })->save($foto);
        $newranger = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nim' => $data['nim'],
            'gender' => $data['gender'],
            'tmp_lahir' => $data['tmp_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'jurusan_id' => $data['jurusan_id'],
            'prodi_id' => $data['prodi_id'],
            'angkatan' => $data['angkatan'],
            'semester' => $data['semester'],
            'kontak' => $data['kontak'],
            'alamat' => $data['alamat'],
            'reason' => $data['reason'],
            // Upload foto profile
            'foto' => $foto
        ]);
        $newranger->attachRole('new');
        $newranger->attachPermission('no');
        return $newranger;
    }
}
