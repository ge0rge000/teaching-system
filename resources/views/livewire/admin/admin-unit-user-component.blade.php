<div>
    <br>
    <br>
    <br>
    <br>

    <br>
 <style>
  input.btn.btn-primary {
    margin-top: 5px;
}
    th {
         
        text-align: center;
    }
 </style>
    <div class="content">

      <table class="table">
        <thead class="thead-dark">
          <tr>
          
            <th scope="col">unitone</th>
            <th scope="col">unittwo</th>
            <th scope="col">unitthree</th>
            <th scope="col">unitfour</th>
            
            
          </tr>
        </thead>
        <tbody> 
            <form  wire:submit.prevent="editCase">

            <tr>
        
             <th>
                <select class="form-select" name="one" wire:model="unitone">
                    <option value="">No</option>
                    <option value="one">yes</option>
                  </select>  
                  @if($unituser->unitone==="one")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitone===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="two" wire:model.defer="unittwo">
                    <option value="">No</option>
                    <option value="two">yes</option>
                  </select>  
                  @if($unituser->unittwo==="two")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unittwo===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="three" wire:model.defer="unitthree">
                    <option value="">No</option>
                    <option value="three">yes</option>
                  </select>  
                  @if($unituser->unitthree==="three")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  


                  @elseif($unituser->unitthree===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
            <th>
 
                <select class="form-select" name="four" wire:model.defer="unitfour">
                    <option value="">No</option>
                    <option value="four">yes</option>
                  </select>  
                  @if($unituser->unitfour==="four")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 

                  @elseif($unituser->unitfour===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 
                  

                  @endif
            </th>
           
             
        </tr>
            </form>
                </tbody>
       
       </table>
 


     
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">unitfive</th>
            <th scope="col">unitsix</th>
            <th scope="col">unitseven</th>
            <th scope="col">uniteight</th>
            
            
          </tr>
        </thead>
        <tbody> 
            <form  wire:submit.prevent="editCase">

            <tr>
                <th>
 
                    <select class="form-select" name="five" wire:model.defer="unitfive">
                        <option value="">No</option>
                        <option value="five">yes</option>
                      </select>  
                      @if($unituser->unitfive==="five")
                      <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                      <input type="submit"  class="btn btn-primary" value="removeunit"> 
    
                      @elseif($unituser->unitfive===null)
                      <input type="checkbox" disabled="disabled"   id="myCheck">
                      <input type="submit" class="btn btn-primary" value="addunit"> 
                      
    
                      @endif
                </th>

             <th>
                <select class="form-select" name="six" wire:model.defer="unitsix">
                    <option value="">No</option>
                    <option value="six">yes</option>
                  </select>  
                  @if($unituser->unitsix==="six")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitsix===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="seven" wire:model.defer="unitseven">
                    <option value="">No</option>
                    <option value="seven">yes</option>
                  </select>  
                  @if($unituser->unitseven==="seven")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitseven===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="eight" wire:model.defer="uniteight">
                    <option value="">No</option>
                    <option value="three">yes</option>
                  </select>  
                  @if($unituser->uniteight==="eight")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  


                  @elseif($unituser->uniteight===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
        
           
             
        </tr>

      

            </form>
                </tbody>
       
       </table>


      
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">unit nine</th>
            <th scope="col">unit ten</th>
            <th scope="col">unit eleven</th>
            <th scope="col">unit twelve</th>
            
          </tr>
        </thead>
        <tbody> 
            <form  wire:submit.prevent="editCase">

            <tr>
                <th>
 
                    <select class="form-select" name="nine" wire:model.defer="unitnine">
                        <option value="">No</option>
                        <option value="nine">yes</option>
                      </select>  
                      @if($unituser->unitnine==="nine")
                      <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                      <input type="submit"  class="btn btn-primary" value="removeunit"> 
    
                      @elseif($unituser->unitnine===null)
                      <input type="checkbox" disabled="disabled"   id="myCheck">
                      <input type="submit" class="btn btn-primary" value="addunit"> 
                      
    
                      @endif
                </th>

             <th>
                <select class="form-select" name="ten" wire:model.defer="unitten">
                    <option value="">No</option>
                    <option value="ten">yes</option>
                  </select>  
                  @if($unituser->unitten==="ten")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitten===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="eleven" wire:model.defer="uniteleven">
                    <option value="">No</option>
                    <option value="eleven">yes</option>
                  </select>  
                  @if($unituser->uniteleven==="eleven")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->uniteleven===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="twelve" wire:model.defer="unittwelve">
                    <option value="">No</option>
                    <option value="twelve">yes</option>
                  </select>  
                  @if($unituser->unittwelve==="twelve")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  


                  @elseif($unituser->unittwelve===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
        
           
             
        </tr>

      

      </form>
        </tbody>
       
       </table>

       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">unitthriten</th>
            <th scope="col">unitfourten</th>
            <th scope="col">unitfiften</th>
            <th scope="col">unitsixten</th>
            
          </tr>
        </thead>
        <tbody> 
            <form  wire:submit.prevent="editCase">

            <tr>
                <th>
 
                    <select class="form-select" name="nine" wire:model.defer="unitthriten">
                        <option value="">No</option>
                        <option value="thriten">yes</option>
                      </select>  
                      @if($unituser->unitthriten==="thriten")
                      <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                      <input type="submit"  class="btn btn-primary" value="removeunit"> 
    
                      @elseif($unituser->unitthriten===null)
                      <input type="checkbox" disabled="disabled"   id="myCheck">
                      <input type="submit" class="btn btn-primary" value="addunit"> 
                      
    
                      @endif
                </th>

             <th>
                <select class="form-select" name="ten" wire:model.defer="unitfourten">
                    <option value="">No</option>
                    <option value="fourten">yes</option>
                  </select>  
                  @if($unituser->unitfourten==="fourten")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitfourten===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="eleven" wire:model.defer="unitfiften">
                    <option value="">No</option>
                    <option value="fiften">yes</option>
                  </select>  
                  @if($unituser->unitfiften==="fiften")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  

                  @elseif($unituser->unitfiften===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
           
            <th>
 
                <select class="form-select" name="twelve" wire:model.defer="unitsixten">
                    <option value="">No</option>
                    <option value="sixten">yes</option>
                  </select>  
                  @if($unituser->unitsixten==="sixten")
                  <input type="checkbox" checked="true"  disabled="disabled"  id="myCheck">
                  <input type="submit"  class="btn btn-primary" value="removeunit"> 
                  


                  @elseif($unituser->unitsixten===null)
                  <input type="checkbox" disabled="disabled"   id="myCheck">
                  <input type="submit" class="btn btn-primary" value="addunit"> 

                  @endif
            </th>
        
           
             
        </tr>

      

      </form>
        </tbody>
       
       </table>

    </div>
  
</div>
