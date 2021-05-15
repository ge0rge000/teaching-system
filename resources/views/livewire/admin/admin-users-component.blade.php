<div>
    <br>
    <br>
    <div class="content">

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th scope="col">academic year</th>
                <th>unituser</th>
                <th scope="col">
                    التعديلات
                 </th>
    
              </tr>
            </thead>
            <tbody> 

                @foreach($users as $key => $user)
                    
         
               <tr>

                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td> {{ $user->email }}</td>
                <td>{{ $user->phone_number }} </td>
                @if( $user->year_type===1 )
                <td>اولى ثانوى</td>
                @elseif($user->year_type===2 )
                <td>ثانيه ثانوى</td>
                @elseif ($user->year_type===3 )
                <td>ثالثه ثانوى</td>
                @endif
                <td><a href="{{ route('admin.unit_user_admin',['email'=>$user->email]) }}">unituser</a></td>
                <td>
                    <a href="#" wire:click.prevent="">
                        <i class="fas fa-trash-alt"></i>
                      </a>
          <a href="">
          <i class="fas fa-edit"></i></a>
                    
          
          
                </td>
 
      
      
                
      
                   
              </tr>
     
        
              @endforeach
         
             
            </tbody>
          
          </table>
         
    </div>
</div>
