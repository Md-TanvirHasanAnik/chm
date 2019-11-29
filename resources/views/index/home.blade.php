<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script type="text/javascript">
    $(function() {
      $('#mindate').datetimepicker({
        minDate: new Date(),
        format: 'DD/MM/YYYY'
      });
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>






  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h2>Apply for counselling</h2>
        <form action="{{route('create.counseling')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="email">Faculty Name & Initials:</label>
            <input type="text" class="form-control" name="init" id="init" placeholder="Enter Faculty Name (Initials inside parenthesis)">
          </div>
          <div class="form-group">
            <label for="comment">Description of Meeting:</label>
            <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
          </div>
          <div class="form-group">
            <label for="">Simple Date</label>
            <div class='input-group date' id='mindate'>
              <input type='text' class="form-control" name="date" id ="date" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      @if(!($lists->isEmpty()))
      <div class="col-md-8">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders to a table:</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Faculty Member</th>
              <th>Subject</th>
              <th>Date</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($lists as $ls)
            <tr>
              <td>{{ $ls->facultyNameInit }}</td>
              <td>{{ $ls->description  }}</td>
              <td>{{ $ls->date }}</td>
              <td>

                <button type="button" class="btn btn-success">Edit</button>

              </td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach


          </tbody>
        </table>
      </div>
      @endif
    </div>

    <div>

    </div>
  </div>

</body>