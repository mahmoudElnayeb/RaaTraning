@if($errors->any())
<div class="alert alert-danger">
   @foreach ($errors->all() as  $value) {
       
      <h3> $value </h3>
   } 
  @endforeach
</div>
@endif