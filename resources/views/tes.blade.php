<!DOCTYPE html>
<html>
	<head>
		<title>Test Center GyM</title> 
        <link type='text/css' rel='stylesheet' href='/css/soal.css'/>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans"/>
	</head>
	<body>
		<div id='container'>
			<div id='title'>
				<h1>Test Center GYM</h1>
			</div>
			<br/>
			   
  			<div id='quiz'></div>
    		<div class='button' id='next'><a href='#'>Next</a></div>
    		<div class='button' id='prev'><a href='#'>Prev</a></div>

            {!! Form::open(['action' =>'LogController@store', 'method' => 'POST']) !!}
            <div class="form-soal">
                {{Form::label('id', 'id')}}
                {{Form::text('id', Auth::user()->id)}}
            </div>
            <div class="form-soal">
                {{Form::label('nilai', 'nilai')}}
                {{Form::textarea('nilai', 'nilai' )}}
            </div>
            {{Form::submit('Submit', ['class' => 'button','id'=>'start'])}}
            {!! Form::close() !!}
        </div>

		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
		<script src="/js/soal.js"></script>
	</body>
</html>