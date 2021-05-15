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
     
        <h1>New unit</h1>
 <form   wire:submit.prevent="storeUnit" enctype="multipart/form-data">
    <label>السنه الدراسيه</label>

    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect"  wire:model="year">
        <option selected >Choose...</option>
        <option value="1"  >One</option>
        <option value="2"  >Two</option>
        <option value="3" >Three</option>
      </select>
      <br>
      <br>
        <div class="form-group">
          <label for="exampleFormControlInput1">name Unit</label>
          <input type="text" class="form-control"   placeholder="name Unit" wire:model="unit">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">price</label>
            <input type="text" class="form-control"   placeholder=" Enter Price" wire:model="price" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">unit image</label>
            <input type="file" name="image"   wire:model="image">
          </div>
          
          <div wire:loading wire:target="image">Uploading...</div>

          <div class="form-group">
            <label for="exampleFormControlInput1">pdf Words</label>
            <input type="file"   name="pdf_words"  wire:model="pdf_words">
            <div wire:loading wire:target="pdf_words">Uploading...</div>
          </div>
          @error('pdf_words') <span class="error">{{ $message }}</span> @enderror
          <div class="form-group">
            <label for="exampleFormControlInput1">pdf grammer</label>
            <input type="file" name="pdf_grammer"    wire:model="pdf_grammer">
            <div wire:loading wire:target="pdf_grammer">Uploading...</div>

          </div>
          
          @error('pdf_grammer') <span class="error">{{ $message }}</span> @enderror

         

          <div class="form-group">
            <label for="exampleFormControlInput1">video grammer</label>
            <input type="text" class="form-control"   name="video_grammer"   wire:model="video_grammer">

          </div>
          @error('video_grammer') <span class="error">{{ $message }}</span> @enderror
          <div class="form-group">
            <label for="exampleFormControlInput1">video Words</label>
            <input type="text" class="form-control"  name="words_video"   wire:model="words_video">

          </div>
          @error('words_video') <span class="error">{{ $message }}</span> @enderror


       
          <div class="form-group">
            <label for="exampleFormControlInput1">Short_descripation</label>
            <textarea style="    width: 100%;
    border: 1px solid #000;
    resize: none;"
    wire:model="short_desc">

            </textarea>

        </div>
        <div class="form-group row">
            <div class="col-sm-10">
              <button   type="submit" class="btn btn-primary startab"  >Add Unit</button>
            </div>
          </div>

      </form>
      @if(Session::has('message'))
      <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
      </div>
      @endif
    </div>
    <script>
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>

    </script>
    
</div>
