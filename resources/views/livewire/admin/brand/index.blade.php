<div>
    @include('livewire.admin.brand.modal-form')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
    <div class="card-header">
        <h4>Brand List
            <a href="#" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#addBrandModal" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span> Add Brands</a>
        </h4>
    </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                          @if ($brand->category)
                              {{ $brand->category->name }}
                          @else
                              No Category
                          @endif
                        </td>
                        <td>{{ $brand->slug }}</td>
                        <td>{{ $brand->status == '1' ? 'Sembunyikan' : 'Tampilkan' }}</td>
                        <td>
                            <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-sm btn-success " style="font-weight: bold"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                            <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal" class="btn btn-sm btn-danger" style="font-weight: bold"><span class="mdi mdi-delete-forever"></span> Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Brands Found</td>
                    </tr>
                @endforelse
                </tbody>
              </table>
              <div style="margin-top:10px">
                {{ $brands->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event =>{
        $('#addBrandModal').modal('hide');
        $('#updateBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');

        
    })
    </script>
@endpush