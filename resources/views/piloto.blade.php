@extends('layout')

@section('content')

<h1>
	{{$piloto->nome}}

	<form onsubmit="" style="display: inline-block" class="pull-right\" action="/pilotos" method="post">
		<input type="hidden" name="_method" value="delete" />
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$piloto->id}}" />
		<button type="submit" style="font-size: 0.9em" class="btn btn-danger deletar-piloto" name="button">EXCLUIR</button>
	</form>
</h1>

@stop

@section('script')

<script type="text/javascript">

  var btn = $('.deletar-piloto').on('click', function(evt) {
    if(!confirm('Cê qué s-cluí?')) {
      evt.preventDefault();
    }
  });

</script>
@endsection