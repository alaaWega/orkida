<div class="actions" >
	<a href="{{ url('/adminpanel/faqs/'.$id.'/edit') }}">
		<button type="button" class="Btn btn btn-default btn-xs" data-id="{{$id}}"><i class="fa fa-pencil"></i></button>
	</a>
	<form action="{{ url( strtolower($controller), $id) }}" class="deleteForm" method="POST" style="display: inline;">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
	</form>
</div>
