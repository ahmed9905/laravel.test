   <div class="page-header">
        <h1>Tables</h1>
      </div>
  
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@if(count($date) > 3)
        
                 в массиве равно 3 элеметов
                 @elseif(count($date) < 5)

                 меньше 5
                 @else

                  в массиве не равно 3 элеметов
           @endif</td>
              </tr>
            </tbody>
          </table>
        </div>

        <ul>
          @for($i = 0; $i < count($dataI);$i++)
            <li>{{ $dataI[$i] }}</li>
          @endfor
        </ul>
        <ul>
          @foreach($date as $key => $value)
              <li>{{ $key.'=>'.$value }}</li>
          @endforeach
        </ul>
           <ul>
          @forelse($date as $key => $value)
              <li>{{ $key.'=>'.$value }}</li>
              @empty
              <p>No items</p>
          @endforelse
        </ul>

        @each('default.list', $date,'value')

        @myDir('Hello')