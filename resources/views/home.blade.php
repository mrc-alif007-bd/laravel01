@extends ('layouts.default')

@section("content")

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>
    <p>Some text that represents "Me"...</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat temporibus ipsa qui laboriosam, dolorum eos. Voluptatibus modi atque laboriosam voluptas omnis? similique officiis minima cum vitae. Atque vel a debitis, repudiandae consequatur fugiat error harum libero?</p>
  </div>

  <?php // print_r($students) 
  ?>
  <div class='container-fluid bg-3 '> 
     <!-- text-center -->
    <h3>Some of my work</h3>
    <div class='row'>
      <div class='col-sm-6'>
        
          @foreach($students as $student)
          <p>
            <b>Id:{{$student->id}}</b> <br>
            Name:{{$student->name}} <br>
            Email:{{$student->email}} <br>
            Phone:{{$student->phone}} <br>
          </p>
          @endforeach
        
      </div>

      <div class='col-sm-6'>
          <p>something........</p>
      </div>
    </div>
  </div>
  <br>

  <div class='container-fluid bg-3 text centar'>
  </div><br>

</div>



@endsection