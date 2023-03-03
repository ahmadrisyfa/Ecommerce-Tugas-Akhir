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
                <h3>Edit Banner One</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/banner-one/'.$data->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">                    
                        <div class="col-md-12 mb-3">
                            <label for="meta_title">Image One 1</label>
                            <input type="hidden"  name="oldImage" value="{{ old('image_banner_one_1', $data->image_banner_one_1)}}">
                            <img src="{{ asset('storage/'.$data->image_banner_one_1) }}" alt="Gambar banner One 1" class="img-preview mb-3 col-sm-6 d-block" style="width:500px;margin-top:10px">
                            <input type="file" class="form-control" onchange="previewImage()"  style="margin-top:5px" name="image_banner_one_1" id="image_banner_one_1">
                            @error('image_banner_one_1')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_title">Image One 2</label>
                            <input type="hidden"  name="oldImage1" value="{{ old('image_banner_one_2', $data->image_banner_one_2)}}">
                            <img src="{{ asset('storage/'.$data->image_banner_one_2) }}" alt="Gambar banner One 2" class="img-preview-1 mb-3 col-sm-6 d-block" style="width:500px;margin-top:10px">
                            <input type="file" class="form-control" onchange="previewImage1()"    style="margin-top:5px"  id="image_banner_one_2" name="image_banner_one_2">
                            @error('image_banner_one_2')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" name="status_image_banner_One"  {{ $data->status_image_banner_One == '1' ? 'checked':'' }} id="status_image_banner_One" style="width:30px;height:30px;margin-top:10px"> Checked=Sembunyikan,UnChecked=Tampilkan
                            @error('status_image_banner_One')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                        <div class="py-2">
                            <a href="{{ url('admin/banner-one') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
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
    
    const gambar = document.querySelector('#image_banner_one_1');
    const imgpreview = document.querySelector('.img-preview');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  function previewImage1() {
    
    const gambar = document.querySelector('#image_banner_one_2');
    const imgpreview = document.querySelector('.img-preview-1');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  
</script>
@endsection