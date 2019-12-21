@extends('layouts.sbadmin2')

@section('content')
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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
<div class="container-fluid">
    <a href="/home" class="main-title-w3layouts mb-2 float-right"><i class="fa fa-arrow-left"></i>  Back</a>
    <h5 class="main-title-w3layouts mb-2">Profile</h5>
    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="{{route('profile')}}" method="post">
                   @csrf            
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Name</label>
                        <input name="name" value="{{$data['name']}}" type="text" class="form-control" placeholder="Name" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Email</label>
                        <input name="email" value="{{$data['email']}}" type="email" class="form-control" placeholder="Email" >
                    </div>
                </div>
             
                
                <button type="submit" name="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Submit</button>
            </form>
        </div>
    </div>
</div>
      
@endsection