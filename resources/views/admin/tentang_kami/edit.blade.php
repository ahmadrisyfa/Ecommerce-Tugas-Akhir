@extends('layouts.admin')
@section('css')
<style>
    label{
        text-transform: capitalize;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Banner One</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/tentang-kami/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">    
                        <div class="col-md-12 mb-3">
                            <label for="meta_title">Name</label>
                            <input required type="text" required class="form-control" value="{{ $data->nama }}" style="margin-top:5px" name="nama" id="nama">
                            @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>                
                        <div class="col-md-12 mb-3">
                            <label for="meta_title">Image</label>
                            <input type="hidden"  name="oldImage" value="{{ old('image', $data->image)}}">
                            <img src="{{ asset('storage/'.$data->image) }}" alt="Gambar banner One 1" class="img-preview mb-3 col-sm-6 d-block" style="width:500px;margin-top:10px">
                            <input type="file" class="form-control" onchange="previewImage()"  style="margin-top:5px" name="image" id="image">
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position">Position</label>
                            <select name="position" required class="form-select" id="position" style="margin-top: 5px">
                                <option disabled selected style="text-align: center">Silahkan Pilih Position</option>
                                <option value="Direktur" @if ($data->position == "Direktur") {{ 'selected' }}@endif>Direktur</option>
                                <option value="Mandor" @if ($data->position == "Mandor") {{ 'selected' }}@endif>Mandor</option>
                                <option value="Manager" @if ($data->position == "Manager") {{ 'selected' }}@endif>Manager</option>
                                <option value="Marketer" @if ($data->position == "Marketer") {{ 'selected' }}@endif>marketer</option>
                                <option value="Member" @if ($data->position == "Member") {{ 'selected' }}@endif>Member</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Description">Description</label>
                            <textarea name="description" id="" cols="30" rows="5"  style="margin-top:5px" class="form-control">{{ $data->description }}</textarea>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status"  {{ $data->status == '1' ? 'checked':'' }} id="status" style="width:30px;height:30px;margin-top:10px"> Checked=Sembunyikan,UnChecked=Tampilkan
                                @error('status')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="py-2">
                            <a href="{{ url('admin/tentang-kami') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                            <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage() {
    
    const gambar = document.querySelector('#image');
    const imgpreview = document.querySelector('.img-preview');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  
</script>
@endsection