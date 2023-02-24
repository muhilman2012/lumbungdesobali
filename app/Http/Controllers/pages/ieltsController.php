<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ielts;
use Mail;

class ieltsController extends Controller
{
    public $nama;
    public $dob;
    public $last_edu;
    public $agama;
    public $usia;
    public $alamat;
    public $email;
    public $no;
    public $success;
    protected $rules = [
        'nama' => 'required',
        'dob' => 'required',
        'email' => 'required|email',
        'no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'last_edu' => 'required',
        'agama' => 'required',
        'usia' => 'required',
        'alamat' => 'required',
    ];

    public function ieltsFormSubmit()
    {
        $ielts = $this->validate();

        Mail::send('ielts',
        array(
            'nama' => $this->nama,
            'dob' => $this->dob,
            'last_edu' => $this->last_edu,
            'agama' => $this->agama,
            'usia' => $this->usia,
            'alamat' => $this->alamat,
            'email' => $this->email,
            'no' => $this->no,
            ),
            function($message){
                $message->from('balilumbungdeso@gmail.com');
                $message->to('balilumbungdeso@gmail.com', 'Admin OOH Miracle Global')->subject('Pendaftar Pelatihan Baahas Inggris IELTS Baru');
            }
        );

        $this->success = 'Terimakasih , Kami akan segera cek Pendaftaran Anda';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->nama = '';
        $this->dob = '';
        $this->last_edu = '';
        $this->agama = '';
        $this->usia = '';
        $this->alamat = '';
        $this->email = '';
        $this->no = '';
    }

    public function render()
    {
        return view('livewire.pages.index.form-ielts');
    }
    // show index
    public function index()
    {
        return view('pages.ielts.index');
    }

    public function register()
    {
        return view('pages.ielts.register');
    }
}