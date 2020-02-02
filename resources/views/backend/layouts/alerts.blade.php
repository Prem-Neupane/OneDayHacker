@if(Session::has('info'))
<br/>
<br/>
<div class='callout callout-info alert-dismissable'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    {{ Session::get('info') }}
</div>
@endif
@if(Session::has('success'))
<br/>
<br/>
<div class='alert alert-success alert-dismissable'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    {{ Session::get('success') }}
</div>
@endif
@if(Session::has('danger'))
<br/>
<br/>
<div class='alert alert-danger alert-dismissable'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
{{ Session::get('danger') }}
</div>
@endif
