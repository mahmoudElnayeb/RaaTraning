@if (session()->has("success")) 
                                  
<div class=" alert alert-success">
    <h5>{{session('success')}}</h5>
</div>
@endif

@if(session()->has("danger"))
<div class=" alert alert-danger">
  <h5> {{ session('alert') }} </h5>
</div>
@endif