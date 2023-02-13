
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block message" >
	<button type="button" class="close" data-dismiss="alert">x</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block message">
	<button type="button" class="close" data-dismiss="alert">x</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block message">
	<button type="button" class="close" data-dismiss="alert">x</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block message">
	<button type="button" class="close" data-dismiss="alert">x</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger message">
	<button type="button" class="close" data-dismiss="alert">x</button>	
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<!-- 
<div class="alert alert-danger alert-block message js-message none" id="error-msg" style="margin-bottom:0; ">
	<button type="button" class="close close-alert" >x</button>	
        <strong></strong>
</div> -->


<div class="alert alert-success alert-block message success-msg js-message none" style="margin-bottom:0; ">
	<button type="button" class="close close-alert" >x</button>	
        <strong></strong>
</div>


<div class="alert alert-danger alert-block message error-msg js-message none" style="margin-bottom:0; ">
	<button type="button" class="close close-alert" >x</button>	
        <strong></strong>
</div>

