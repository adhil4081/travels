@extends('adminpanel.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Form Edit') }}</h1>
                    <a href="{{ route('adpackage') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action=" {{ route('updatepackage',[$travel_package->id]) }}"enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $travel_package->name) }}"
                                        id="name" placeholder="example: Tales of Western Ghats">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ old('price', $travel_package->price) }}" placeholder="example: 300 ">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="duration" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="duration" value="{{ old('duration', $travel_package->duration) }}"
                                        id="duration" placeholder="example: 4D5N">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="route" class="col-sm-2 col-form-label">Route</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="route" name="route"
                                        value="{{ old('route', $travel_package->route) }}"
                                        placeholder="example: Cochin-Munnar-Marayur-Vattavada-Cochin">
                                </div>
                            </div>
                            
                        
                            <div class="form-group row border-bottom pb-4">
                                <label for="media" class="col-sm-2 col-form-label">Images</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $travel_package->media }}" readonly>

                                    <input type="file" class="form-control" name="new_media" id="media">

                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"  id="description" cols="30" rows="7"
                                        placeholder="Description text...">{{ old('description', $travel_package->description) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="continent" class="col-sm-2 col-form-label">Continent</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="continent"value="{{ old('name', $travel_package->continent) }}" name="continent"
                                        placeholder="Enter continent">
                                </div>

                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="country" value="{{ old('name', $travel_package->country) }}" name="country"
                                        placeholder="Enter country">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="state" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="state" value="{{ old('name', $travel_package->state) }}"          name="state"
                                        placeholder="Enter state">
                                </div>

                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="city" name="city" value="{{ old('name', $travel_package->city) }}"  
                                        placeholder="Enter city">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


@section('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
