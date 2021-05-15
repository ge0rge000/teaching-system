<div>
<style>
 
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.content{
    margin-top:74px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="content">
    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
      {{ Session::get('message') }}
    </div>
   @else
<div class="containeer">
   
    

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel" style="display: none;">
         @foreach($qustions as $qustion)
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-{{ $qustion->id }}" type="button" class="btn btn-success btn-circle"> </a>

            </div>
          @endforeach
        </div>
    </div>
    <br>

    <form   role="form" wire:submit.prevent="check">

 @foreach($qustions as $qustion)
 
        <div class="panel panel-primary setup-content" id="step-{{ $qustion->id }}">
            <div class="panel-heading">
                 <h3 class="panel-title">Shipper</h3>
            </div>
            <div class="panel-body">
            
                <div class="form-group"  >

                    <label class="control-label"> {{ $qustion->question }}</label><br>

                     <input   type="radio"  name="E{{ $qustion->id}}"   value="a" wire:model.defer="array.{{ $qustion->id }}"/>   <small> {{ $qustion->a }} </small><br>
                    </small>  <input   type="radio"  name="E{{ $qustion->id}}"  value="b"wire:model.defer="array.{{ $qustion->id }}" />   <small> {{ $qustion->b }} </small> <br>

                      </small> <input   type="radio"  name="E{{ $qustion->id}}" value="c"  wire:model.defer="array.{{ $qustion->id }}"/>    <small> {{ $qustion->c }} </small><br>

                  <input   type="radio" name="E{{ $qustion->id}}" value="d" wire:model.defer="array.{{ $qustion->id }}"/>    <small> {{ $qustion->d }} </small> <br>  

                </div>
                
                @if($loop->first)
                <button class="btn btn-primary prevbtn pull-right" type="submit">submit</button>
                @else
                <button class="btn btn-primary prevbtn pull-right" type="button">Next</button>
               @endif
                <button class="btn btn-primary nextBtn  pull-left" type="button">pervious</button>


            </div>
        </div>
        
    
          @endforeach
         
       
       
    </form>
  
</div>
@endif
<script>

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');
        allprevBtn=$('.prevbtn')
    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),

            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });
    
    allprevBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });


    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>
</div>
</div>