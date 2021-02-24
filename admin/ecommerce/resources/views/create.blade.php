@extends ('layouts.main')
@section('content')
     <div class="container">
         <form action="{{ route('store')}}" method="POST">
            {{ csrf_field() }}
        <div class="form">
            <div class="form-group">
                <label for="exampleFormControlInput1">First name</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Last name</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="emeil" id="exampleFormControlInput1"">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone number</label>
                <input type="number" class="form-control" name="phone_number" id="exampleFormControlInput1" ">
            </div><br>

               <input type="submit" class="btn btn-primary" value="" style="padding-right: 1100px;">

        </div>
    </form>
     </div>
@endsection
