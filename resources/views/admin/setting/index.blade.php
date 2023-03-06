@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="card">
            <div class="card-header">
                <h3>Profile Anda
                    <a href="{{ url('admin/ganti-password') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-pound-box"></span>Ganti Password</a>
                    <a  href="#" class="btn btn-success btn-sm float-end" style="font-weight: bold;color:#F2F2F2;margin-right:5px" onclick="event.preventDefault();document.getElementById('changeAuthorPictureFile').click();"><span class="mdi mdi-image"></span>Ganti Foto Profil</a>
                        <input  type="file" name="file" id="changeAuthorPictureFile" style="opacity: 0" onchange="this.dispatchEvent(new InputEvent('input'))">
            
                </h3>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    Foto Profil: <br>
                    <img  style="margin-top:5px" src="{{ auth()->user()->picture }}" alt="{{ auth()->user()->name }}" width="150px">
                </div>
                <hr>
                <div class="col-md-12">
                    <form action="{{ url('profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">                    
                            <div class="col-md-12 mb-3">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" value="{{ auth::user()->name }}" style="margin-top:5px" class="form-control" name="name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>     
                            <div class="col-md-12 mb-3">
                                <label for="name">Email</label>
                                <input type="email" value="{{ auth::user()->email }}" style="margin-top:5px" class="form-control" name="email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>      
                            <div class="col-md-12 mb-3">
                                <label for="name">No Telepon</label>
                                <input type="number" value="{{ auth::user()->userdetail->phone ?? '' }}" style="margin-top:5px" class="form-control" name="phone">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> 
                            <div class="col-md-12 mb-3">
                                <label for="name">Alamat</label>
                                <textarea name="address" style="margin-top:5px" id="" cols="30" rows="5" class="form-control">{{ auth::user()->userdetail->address ?? '' }}</textarea>
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> 
                                                                 
                            <div class="py-2">
                                <a href="{{ url('admin/dashboard') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                                <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('IjaboCropTool/ijaboCropTool.min.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('IjaboCropTool/ijaboCropTool.min.js') }}"></script>
<script>

  $('#changeAuthorPictureFile').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['Simpan','Batal'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
            
            // .Livewire.emit('updateAuthorProfileHeader');
            // .Livewire.emit('updateTopHeader');
          },
          onError:function(message, element, status){
            alert(message);
          }
  });
</script>
@endsection