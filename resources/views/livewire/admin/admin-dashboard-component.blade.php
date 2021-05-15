<link rel="stylesheet" href="{{ asset('assets/css/dashboard/dash.css')}}">
    <div class="containeeer">
      <div class="content">
        <div class="list-group" style="width: 43%;">
            <a href="{{ route('admin.exams') }}"class="list-group-item">
          Exams
            </a>
          </div>
            <ul class="list-group"  style="width: 43%;     font-weight: bold;">
           <li class="list-group-item active">Results</li> 
              <a  href="{{ route('admin.result_student',['year_type'=>1]) }}"><li class="list-group-item ">first</li></a>
              <a  href="{{ route('admin.result_student',['year_type'=>2]) }}"><li class="list-group-item ">secound</li></a>
              <a  href="{{ route('admin.result_student',['year_type'=>3]) }}"><li class="list-group-item ">third</li></a>

            </ul>

            <ul class="list-group"  style="width: 43%;     font-weight: bold;">
              <a  href="{{ route('admin.units') }}"><li class="list-group-item ">
                  <li class="list-group-item active">units</li>  </a>
            
             
               </ul>

               <ul class="list-group"  style="width: 43%;     font-weight: bold;">
                <li class="list-group-item active">users</li> 
                   <a  href="{{ route('admin.users',['year_type'=>1]) }}"><li class="list-group-item ">first</li></a>
                   <a  href="{{ route('admin.users',['year_type'=>2]) }}"><li class="list-group-item ">secound</li></a>
                   <a  href="{{ route('admin.users',['year_type'=>3]) }}"><li class="list-group-item ">third</li></a>
     
                 </ul>
          
          
       
  </div>

    </div>

   