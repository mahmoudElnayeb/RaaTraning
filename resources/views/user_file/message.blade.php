@if(session()->has('success'))
<div class="alert alert-success">
    <p> session()->get('success') </p>

</div>
@endif


@if(session()->has('fail'))
<div class="alert alert-danger">
    <p> session()->get('fail')</p>
</div>
@endif