<div>
<style>
 
  
  .heading {
    color: #fff;
    text-align: center;
  }
  .heading h1 {
    margin-bottom: 3rem;
    font-weight: 300;
    position: relative;
  }
  .heading h1:after {
    content: '';
    height: 2px;
    width: 2rem;
    position: absolute;
    left: 50%;
    bottom: -1rem;
    transform: translateX(-50%);
    background-color: #fff;
  }
  .containeeeer {
    background-color: #fff;
    padding: 2rem;
    box-shadow: 4px 4px 8px rgba(0,0,0,0.1);
    width: 50%;
  }
  .containeeeer .nav {
    background-color: #fafafa;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    margin: 0 -3rem 2rem;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.1); 
    position: relative;
  }
  .containeeeer .nav:before,
  .containeeeer .nav:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    top: 0;
    border: 0.75rem solid transparent;
    border-bottom: 0.75rem solid #f2f0f0;
    transform-origin: center;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    z-index: -1;
  }
  .containeeeer .nav:before {
    left: 0;
    transform: translateY(-0.45rem) rotate(135deg) translateX(-0.4rem);
  }
  .containeeeer .nav:after {
    right: 0;
    transform: translateY(-0.45rem) rotate(-135deg) translateX(0.4rem);
  }
  .containeeeer .nav a {
    display: inline-block;
    margin: 0 3rem;
    font-size: 2rem;
    color: #2980b9;
    opacity: 0.7;
    transition: 0.25s;
  }
  .containeeeer .nav a:hover {
    opacity: 1;
  }
  .containeeeer .list .num {
    padding: 0.5rem 2rem;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    transition: 0.25s;
    font-size: 23px;
    color: black;
  }
  .containeeeer .list .num:nth-child(0):before {
    content: '0';
    font-size: 4rem;
    font-weight: bold;
    color: #000;
    width: 2rem;
    opacity: 0.05;
    transition: 0.25s;
  }
 

  .containeeeer .list .num:nth-child(1):before {
    font-size: 4rem;
    font-weight: bold;
    color: #000;
    width: 2rem;
    opacity: 0.05;
    transition: 0.25s;
  }
 
  .containeeeer .list .num h3 {
    position: relative;
    left: -1.5rem;
    color: #3d3d3d;
    font-size: 0.85rem;
    transition: 0.25s;
  }
  .containeeeer .list .num:hover {
    background-color: #a0a0a0 ;
    cursor: pointer;
  }
  .containeeeer .list .num:hover:before {
    opacity: 0.2;
  }
  .containeeeer .list .num:hover h3 {
    left: 1rem;
  }
  .message {
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    margin-top: 2rem;
  }
  
</style>
  <div class="content">
        <br>
        <br>
   
          <div class="heading">
            <h1>Ordered List UI</h1>
        </div>
        <div class="containeeeer">
            <div class="list">
              @foreach($question_numbers as $question_number)
              <a href="{{ route('user.exam',['exam_id'=> $question_number->exam_id]) }}"  > 
                <div class="num">
{{                  $question_number->exam_id
}}                                &nbsp; &nbsp; Exam  
                </div>
              </a>
                @endforeach
            </div>
        </div>

  </div>
 
  
  </div>
  