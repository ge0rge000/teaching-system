<div>
    <br>
    <br>
    <br>
    <style>
        form{
            width: 50%;
            margin: auto;
        }
    </style>
    <div class="content">
     
        <h1>New Question</h1>
 <form wire:submit.prevent="storeQuestion">
        <div class="form-group">
          <label for="exampleFormControlInput1">Question</label>
          <input type="text" class="form-control"   placeholder="enter Question?" wire:model="question">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Id_exam</label>
          <input type="text" class="form-control"   placeholder="enter Question?" wire:model="exam_id">
        </div>
        <label>السنه الدراسيه</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect"  wire:model="year">
            <option selected >Choose...</option>
            <option value="1"  >One</option>
            <option value="2"  >Two</option>
            <option value="3" >Three</option>
          </select>
        <br>
        <br>
        <label>الاختيارات</label>
        <div class="form-group">
            <label for="exampleFormControlInput1">a</label>
            <input type="text" class="form-control"   placeholder=" choose a" wire:model="a" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">b</label>
            <input type="text" class="form-control"   placeholder=" choose b" wire:model="b">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">c</label>
            <input type="text" class="form-control"   placeholder=" choose c" wire:model="c">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">d</label>
            <input type="text" class="form-control"   placeholder=" choose d" wire:model="d">
          </div>
          <br>
         
          <label>الاجابه الصحيحه</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" wire:model="ans">
            <option selected >Choose...</option>
            <option value="a" >a</option>
            <option value="b" >b</option>
            <option value="c" >c</option>
            <option value="d" >d</option>

          </select>
          <br>
          <br>
        <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Add Question</button>
            </div>
          </div>

      </form>
      @if(Session::has('message'))
      <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
      </div>
      @endif
    </div>
   
</div>
