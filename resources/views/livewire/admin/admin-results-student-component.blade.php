<div>
    <div class="content">
        <br>
        <br>
         <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">exam_id</th>
            <th scope="col">result</th>
            <th scope="col">Details</th>
        

          </tr>
        </thead>
        <tbody> 
            @foreach($results as $result )
          <tr>
             
            <th scope="row">{{  $result->id }}</th>
         
            <td>{{   $result->user['name'] }}</td>
            <th scope="row">{{  $result->exam_id }}</th>
            
            <td>
              {{ $result->result }}
            </td>
          
            <td><a href="{{ route('admin.result_more_student',['year_type'=>$result->user['year_type'],'user_id'=>$result->user_id,'exam_id'=> $result->exam_id ]) }}">MoreDetails</a></td>
            
          </tr>
          </tr>

          @endforeach

     
         
        </tbody>
     
      </table>
    </div>
   
</div>
