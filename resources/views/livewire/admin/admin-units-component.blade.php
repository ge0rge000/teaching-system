<div>
    <style>
        .fa, .fas {
            font-family: "Font Awesome 5 Pro";
            font-weight: 900;
            font-size: 15px;
        }
        h3 {
            text-align: center;
            color: #200769;
        }
    </style>
    <div class="content">
            <br>
            <br>
         
            <h1 style="
                text-align: center;
                text-decoration: underline;
            ">All Units</h1>
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
              {{ Session::get('message') }}
            </div>
            @endif
        <a href="{{ route('admin.addunit') }}">
            <i class="fas fa-plus"> add new Unit</i>
           </a>
            <h3 >الصف الاول الثانوى</h3>
            <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">regular_price</th>
            <th scope="col">image</th>
            <th scope="col">
                التعديلات
             </th>

          </tr>
        </thead>
        <tbody> 
            @foreach($unitsone as $unitone )
          <tr>
             
                  <th scope="row">{{ $unitone->id }}</th>
            <td>{{ $unitone->name }}</td>
            <td>{{ $unitone->regular_price }}</td>
            <td>{{ $unitone->image }}</td>
            <td>
              <a href="#" wire:click.prevent="deleteunit({{ $unitone->id }})">
                <i class="fas fa-trash-alt"></i>
              </a>
  <a href="{{ route('admin.editunit',['unit_id'=>$unitone->id]) }}" >
  <i class="fas fa-edit"></i></a>
  <a href="{{ route('admin.unit_details',['name'=>$unitone->name,'year_type'=>$unitone->year_type]) }}"><i class="fas fa-info-circle"></i></a>

  
              
              </td>
          </tr>

          @endforeach

     
         
        </tbody>
      
      </table>
     

      <h3>الصف الثانى الثانوى</h3>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">regular_price</th>
            <th scope="col">image</th>
            <th scope="col">
                التعديلات
             </th>

          </tr>
        </thead>
        <tbody> 
            @foreach($unitstwo as $unittwo )
            <tr>
             
                <th scope="row">{{ $unittwo->id }}</th>
          <td>{{ $unittwo->name }}</td>
          <td>{{ $unittwo->regular_price }}</td>
          <td>{{ $unittwo->image }}</td>
          <td>
      
            <a href="#" wire:click.prevent="deleteunit({{ $unittwo->id }})">
              <i class="fas fa-trash-alt"></i>
            </a>
<a href="{{ route('admin.editunit',['unit_id'=>$unittwo->id]) }}" >
<i class="fas fa-edit"></i></a>
          

<a href="{{ route('admin.unit_details',['name'=>$unittwo->name,'year_type'=>$unittwo->year_type]) }}"><i class="fas fa-info-circle"></i></a>

            </td>
        </tr>

          @endforeach

     
         
        </tbody>
       
      </table>
  
     <h3>الصف الثالث الثانوى</h3>
     <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">regular_price</th>
            <th scope="col">image</th>
            <th scope="col">
                التعديلات
             </th>

          </tr>
        </thead>
        <tbody> 
            @foreach($unitsthree as $unitthree )
            <tr>
             
                <th scope="row">{{ $unitthree->id }}</th>
          <td>{{ $unitthree->name }}</td>
          <td>{{ $unitthree->regular_price }}</td>
          <td>{{ $unitthree->image }}</td>
          <td>
          
            <a href="#" wire:click.prevent="deleteunit({{ $unitthree->id }})">
                              <i class="fas fa-trash-alt"></i>
                            </a>
<a href="{{ route('admin.editunit',['unit_id'=>$unitthree->id]) }}" >
   <i class="fas fa-edit"></i></a>
                          <a href="{{ route('admin.unit_details',['name'=>$unitthree->name,'year_type'=>$unitthree->year_type]) }}"><i class="fas fa-info-circle"></i></a>
          
            
            </td>
        </tr>

          @endforeach

     
         
        </tbody>
       
      </table>
 
     </div>
    </div>
