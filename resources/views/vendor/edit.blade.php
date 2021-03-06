@extends('../layouts.sbadmin2')

@section('content')
<div class="container-fluid">
    <a href="{{ '/vendor' }}" class="main-title-w3layouts mb-2 float-right"><i class="fa fa-arrow-left"></i>  Back</a>
    <h5 class="main-title-w3layouts mb-2">Edit Vendor</h5>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Please check your input code<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('vendor.update',$vendor->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Vendor Name</label>
                        <input type="name" class="form-control" value="{{ $vendor->name }}" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $vendor->email }}" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Mobile No.</label>
                        <input type="mobile" class="form-control" value="{{ $vendor->mobile }}" name="mobile">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="address" class="form-control" value="{{ $vendor->address }}" name="address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Registered Vendor No.</label>
                        <input type="text" class="form-control" value="{{ $vendor->register_number }}" name="register_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Firm name</label>
                        <input type="text" class="form-control" value="{{ $vendor->firm_name }}" name="firm_name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>GST No.</label>
                        <input type="text" class="form-control" value="{{ $vendor->gst_number }}" name="gst_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Alternate Number</label>
                        <input type="number" class="form-control" value="{{ $vendor->alt_number }}" name="alt_number">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection