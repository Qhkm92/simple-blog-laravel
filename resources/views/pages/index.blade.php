@extends('layout.app')

@section('content')
	<div class='jumbotron text-center'>
    <img class="img-responsive "src="/images/test.jpg"
    width="460" height="345" alt="notext">    
		<p>Dapatkan pakej-pakej percutian menarik ke Jepun melalui website kami</p>
	 	<div class="typewriter">
 		<h1>Come and join us!!</h1>
		</div>
<hr>
		<p>
			<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
			<a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
		</p>


	
	</div>


	   <div id="app">
		 <ais-index
   		 app-id="latency"
   		 api-key="3d9875e51fbd20c7754e65422f7ce5e1"
   		 index-name="bestbuy">
    <ais-search-box></ais-search-box>
    <ais-results>
      <template slot-scope="{ result }">
        <h2>
          <ais-highlight :result="result" attribute-name="name"></ais-highlight>
        </h2>
      </template>
    </ais-results>
  		</ais-index>

  		</div>
      

		
	
	
 




	{{-- <form action="/search/{input}" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="input"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form> --}}

	

	


@endsection

