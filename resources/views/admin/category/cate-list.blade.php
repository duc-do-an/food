@extends('admin.master')
	
	@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             
                                <thead>

                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    @foreach($cates as $cate)
                                    <tr>
                                            <td>{{ $cate['name']; }}</td>
                                            <td>{{ $cate['description']; }}</td>
                                            <td><img src="/source/image/product/{{ $cate['image']; }}"height="50em" margin="auto" alt=""></td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

           
           
          
        

   

            @endsection	

@section('js')
@endsection	