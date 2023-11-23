@extends('adminpanel.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Travel Package') }}</h1>
                    <a href=" {{ route('createpackage') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Route</th>
                                        <th>Images</th>
                                        <th>Description</th>
                                        <th>Continent</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($travel_packages as $travel_package)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $travel_package->name }}</td>
                                        <td>{{ $travel_package->price }}</td>
                                        <td>{{ $travel_package->duration }}</td>
                                        <td>{{ $travel_package->route }}</td>
                                        <td>{{ $travel_package->media }}</td>
                                        <td>{{ $travel_package->description }}</td>
                                        <td>{{ $travel_package->continent }}</td>
                                        <td>{{ $travel_package->country }}</td>
                                        <td>{{ $travel_package->state }}</td>
                                        <td>{{ $travel_package->city }}</td>




                                        <td>
                                            <a href="{{ route('editpackage', [$travel_package->id]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('deletepackage', [$travel_package->id]) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>                              
                                        </td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            <!--{ $travel_packages->links() }}-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection