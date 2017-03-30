@extends('layouts.materializehead')

@section('content')
<div class="row">
    <form class="col s12">
		


    </form>
</div>


    <div class="container">
<h3>Post: <a class="btn-floating btn-large waves-effect waves-light red" href="/class/create"><i class="material-icons">add</i></a></h3>
        <table>
        <thead>
            <tr>
                <th data-field="id">id</th>
				<th data-field="Title">Title</th>
				
				<th data-field="Date">Date</th>
				<th data-field="Time">Time</th>
				<th data-field="Location">Location</th>
				
				
				
				
                <th data-field="edit">Edit</th>
                <th data-field="delete">Delete</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($classes as $class)
                <tr>
                <td>{{ $class->id }}</td>
				<td>{{ $class->Title }}</td>
				
				<td>{{ $class->Date }}</td>
				<td>{{ $class->Time }}</td>
				<td>{{ $class->Location }}</td>
				
				
				
				
                    <td><a class="waves-effect waves-light btn yellow" href="{{ URL::to('/class/' . $class->id . '/edit') }}">
                    	<i class="material-icons">edit</i></a>
                    </td>
                    <td>
                    {{ Form::open(array('url' => 'class/' . $class->id)) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        <button class="btn waves-effect waves-light red" type="submit" name="action">
                          <i class="material-icons">delete</i>
                        </button>
                    {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
@endsection