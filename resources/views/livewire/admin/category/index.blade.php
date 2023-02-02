
<div class="row">
    <div class="col-md-12">
        @if (session('message'))    
            <div class="alert alert-success">{{ session('message') }}</div>            
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight:bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span> Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/category/'.$category->id.'/edit') }}"  style="font-weight:bold" class="btn btn-success"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                    <a href="{{ url('admin/category/'.$category->id.'/delete') }}" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="margin-top:10px">
                    {{ $categories->links() }}
                  </div>
            </div>
        </div>
    </div>
</div>
