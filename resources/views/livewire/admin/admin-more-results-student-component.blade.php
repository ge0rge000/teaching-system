<div>
   

<br>
<br>
<div class="content">
    <div class="tables" style="    display: flex;text-align: center;">
          <table class="table table-striped"  >
        <thead>
          <tr>
          
            <th scope="col">question</th>
          
          
          </tr>
        </thead>
     
        <tbody>
        
            @foreach  ( $questions as  $question ) 
             <tr>
             
                 <td>{{  $question->question }}</td>
             </tr>
        
            @endforeach
        </tbody>
      </table>
    <table class="table table-striped">
    </div>
  
        <thead>
          <tr>
          
            <th scope="col">choice</th>
          
          
          </tr>
        </thead>
     
        <tbody>
        
            @foreach  ( $choices_details->choices as  $choice ) 
             <tr>
             
                 <td>{{ $choice }}</td>
             </tr>
        
            @endforeach
        </tbody>
      </table>
</div>


 
</div>
