<div>
    <style>
        .fa, .fas {
            font-family: "Font Awesome 5 Pro";
            font-weight: 900;
            font-size: 15px;
        }
    
        h3 {
            text-align: end;
            color: #200769;
        }
    </style>
    <div class="content">
            <br>
            <br>
      

            
            <h1 style="
                text-align: center;
                text-decoration: underline;
            ">All Questions</h1>
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
              {{ Session::get('message') }}
            </div>
            @endif
        <a href="{{ route('admin.addexam') }}">
            <i class="fas fa-plus"> add new Questions</i>
           </a>
            <h3>الصف الاول الثانوى</h3>
            <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Question</th>
            <th scope="col">exam_id</th>
            <th scope="col">a</th>
            <th scope="col">b</th>
            <th scope="col">c</th>
            <th scope="col">d</th>
            <th scope="col">True Answer</th>
            <th scope="col">
                التعديلات
             </th>

          </tr>
        </thead>
        <tbody> 
            @foreach($questionsone as $question )
          <tr>
             
                  <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->question }}</td>
            <td>{{ $question->exam_id }}</td>
            <td>{{ $question->a }}</td>
            <td>{{ $question->b }}</td>
            <td>{{ $question->c }}</td>
            <td>{{ $question->d }}</td>
            <td>{{ $question->trueans['ans'] }}</td>
            <td>
              <a href="{{ route('admin.editexam',['question_id'=>$question->id]) }}"><i class="fas fa-edit"></i></a>
              <a href="#" wire:click.prevent="deletequestion({{ $question->id }})">
                                <i class="fas fa-trash-alt"></i>

              </a>
              
              </td>
          </tr>

          @endforeach

     
         
        </tbody>
        {{ $questionsone->links() }}
      </table>
      

      <h3>الصف الثانى الثانوى</h3>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Question</th>
            <th scope="col">exam_id</th>
            <th scope="col">a</th>
            <th scope="col">b</th>
            <th scope="col">c</th>
            <th scope="col">d</th>
            <th scope="col">True Answer</th>
            <th scope="col">
                التعديلات
             </th>

          </tr>
        </thead>
        <tbody> 
            @foreach($questionstwo as $question )
          <tr>
             
                  <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->question }}</td>
            <td>{{ $question->exam_id }}</td>
            <td>{{ $question->a }}</td>
            <td>{{ $question->b }}</td>
            <td>{{ $question->c }}</td>
            <td>{{ $question->d }}</td>
            <td>{{ $question->trueans['ans'] }}</td>
            <td>
              <a href="{{ route('admin.editexam',['question_id'=>$question->id]) }}"><i class="fas fa-edit"></i></a>
              <a href="#" wire:click.prevent="deletequestion({{ $question->id }})">
                                <i class="fas fa-trash-alt"></i>

              </a>
              
              </td>
          </tr>
          </tr>

          @endforeach

     
         
        </tbody>
     
      </table>
     <h3>الصف الثالث الثانوى</h3>
     <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Question</th>
            <th scope="col">exam_id</th>
            <th scope="col">a</th>
            <th scope="col">b</th>
            <th scope="col">c</th>
            <th scope="col">d</th>
            <th scope="col">True Answer</th>
            <th scope="col">
                التعديلات
             </th>


          </tr>
        </thead>
        <tbody> 
            @foreach($questionsthree as $question )
          <tr>
             
                  <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->question }}</td>
            <td>{{ $question->exam_id }}</td>
            <td>{{ $question->a }}</td>
            <td>{{ $question->b }}</td>
            <td>{{ $question->c }}</td>
            <td>{{ $question->d }}</td>
            <td>{{ $question->trueans['ans'] }}</td>
            <td>
              <a href="{{ route('admin.editexam',['question_id'=>$question->id]) }}"><i class="fas fa-edit"></i></a>
              <a href="#" wire:click.prevent="deletequestion({{ $question->id }})">
                                <i class="fas fa-trash-alt"></i>

              </a>
              
              </td>
          </tr>
          </tr>


          @endforeach

     
         
        </tbody>
     
      </table>
      {{ $questionsone->links() }}
    </div>
    </div>
