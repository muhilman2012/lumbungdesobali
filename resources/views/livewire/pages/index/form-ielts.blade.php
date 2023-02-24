<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                @if($success)
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Terimakasih!',
                            text: 'Kami akan segera cek Pendaftaran Anda',
                            showConfirmButton: false,
                            timer: 5000
                        })
                    </script>
                    @elseif(session()->has('error'))
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Opps...!',
                            text: '{{ session()->get("error") }}',
                            showConfirmButton: false,
                            timer: 2500
                        })
                    </script>
                @endif
                <div class="card-header">Formulir Pendaftaran Pelatihan Bahasa Inggris IELTS</div>
                <div class="card-body">
                    <form wire:submit.prevent="ieltsFormSubmit" action="/ielts" method="POST" class="w-full">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Nama Lengkap</label>
                            <div class="col-md-6">
                                @error('nama')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="nama" value="{{ old('nama') }}" id="nama" type="text" class="col-md-12" placeholder="Nama Lengkap" name="nama" required autocomplete="nama" autofocus />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dob" class="col-md-3 col-form-label">Tempat , Tanggal Lahir</label>
                            <div class="col-md-6">
                                @error('dob')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="dob" value="{{ old('dob') }}" id="dob" type="dob" class="col-md-12" placeholder="Bali , 01 Januari 1990" name="dob" required autocomplete="dob" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_edu" class="col-md-3 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-md-6">
                                @error('last_edu')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <select wire:model="last_edu" value="{{ old('last_edu') }}" name="last_edu" id="last_edu">
                                    <option value="">Pilih Pendidikan Terakhir Anda</option>
                                    <option value="slta">SLTA / Sederajat</option>
                                    <option value="d">Diploma</option>
                                    <option value="s">Sarjana</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="agama" class="col-md-3 col-form-label">Agama</label>
                            <div class="col-md-6">
                                @error('agama')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <select wire:model="agama" value="{{ old('agama') }}" name="agama" id="agama">
                                    <option value="">Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katholik">Katholik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="usia" class="col-md-3 col-form-label">Usia</label>
                            <div class="col-md-6">
                                @error('usia')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="usia" value="{{ old('usia') }}" id="usia" type="usia" class="col-md-12" placeholder="Usia Anda saat ini" name="usia" required autocomplete="usia" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-6">
                                @error('alamat')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="alamat" value="{{ old('alamat') }}" id="alamat" type="alamat" class="col-md-12" placeholder="Masukkan Alamat Lengkap" name="alamat" required autocomplete="alamat" />
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                @error('email')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="email" value="{{ old('email') }}" id="email" type="email" class="col-md-12" placeholder="Email Anda" name="email" required autocomplete="email" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no" class="col-md-3 col-form-label">No Telepon Aktif / Whatsapp</label>
                            <div class="col-md-6">
                                @error('no')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                                <input wire:model="no" value="{{ old('no') }}" id="no" type="no" class="col-md-12" placeholder="Masukkan No Telp anda Disini" name="no" required autocomplete="no" />
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-danger">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
    </div>
</div>