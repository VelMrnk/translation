@extends('template.template')

@section('content')

   <div class="word">
       {!! Form::open(array('url' => 'foo/bar')) !!}
            {!! Form::select('size', array('L' => 'Большой', 'S' => 'Маленький')) !!}
            {!! Form::text('username', null, [ 'placeholder' => 'Слово для перевода', 'name' => 'word', 'autocomplete' => 'off' ]) !!}
            {!! Form::submit('Перевести') !!}
       {!! Form::close() !!}
   </div>

    <div class="translate">

    </div>
@stop