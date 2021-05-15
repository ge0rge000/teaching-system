 <div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
<style>
    .result {
        width: 52%;
        margin: 132px auto;
    }
</style>

 

 <div class="content">
     <div class="result">
         <div class="w3-panel w3-pale-green w3-round-large w3-border">
  <h3>My dear Student:{{ $student_result->user['name'] }}</h3>
  <p>your result is :{{ $student_result->result }}</p>
</div>
     </div>

 </div>


 

 </div>