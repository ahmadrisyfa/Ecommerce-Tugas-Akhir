<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            @if (session('message'))        
            <p class="alert alert-success text-center" style="margin-bottom:10px;margin-top:10px">{{ session('message') }}</p>
            @endif 
    <div class="card-header">
        <h4>On Sale
        </h4>
    </div>
   
          <div class="card-body">
            <form  wire:submit.prevent="updateSale" enctype="multipart/form-data">
                <div class="row">                    
                    <div class="col-md-12 mb-3">
                        <label style="padding-bottom: 5px;font-weight:300">Select Status</label>
                        <select name="status" id="status" class="form-select" style="margin-top:5px" wire:model="status">
                            <option disabled selected style="font-weight: bold;">Select status</option>
                                <option value="0">No Active</option>
                                <option value="1">Active</option>
                        </select>
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_title">Sale date</label>
                        <input type="text" class="form-control" wire:model="sale_date" placeholder="YYYY/MM/DD H:M:S" id="sale-date" name="sale_date">
                        @error('sale_date')
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
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/css/bootstrap-datetimepicker.css" integrity="sha512-nVbAAnNOPeg+cDdrTvDnpcks7Jwr4E50HSQOYLoJWv3yfaAcKPAVc3isSH+ihRs9JDynH9iOd4DMsnMFGuAk/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/css/bootstrap-datetimepicker.min.css" integrity="sha512-QvNTBT/galbMa1XIwD3maa/o1eD/wCQ+jD7zFpxprrfHjjy7ZhkSTbXG0CHVukGVL8L5hLxySdP3exX5l28upg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha512-63+XcK3ZAZFBhAVZ4irKWe9eorFG0qYsy2CaM5Z+F3kUn76ukznN0cp4SArgItSbDFD1RrrWgVMBY9C/2ZoURA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" integrity="sha512-2e0Kl/wKgOUm/I722SOPMtmphkIjECJFpJrTRRyL8gjJSJIP2VofmEbqyApMaMfFhU727K3voz0e5EgE3Zf2Dg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha512-63+XcK3ZAZFBhAVZ4irKWe9eorFG0qYsy2CaM5Z+F3kUn76ukznN0cp4SArgItSbDFD1RrrWgVMBY9C/2ZoURA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha512-tjNtfoH+ezX5NhKsxuzHc01N4tSBoz15yiML61yoQN/kxWU0ChLIno79qIjqhiuTrQI0h+XPpylj0eZ9pKPQ9g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css.map"> --}}
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $('#sale-date').datetimepicker({
            format : 'Y-MM-DD h:m:s',
        })
        .on('dp.change',function(ev){
            var data = $('#sale-date').val();
            @this->set('sale_date',data);
        });
    });
    </script>
@endsection
