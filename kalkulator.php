<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            
            <form role="form" id="mscCalc" action="#" method="post">
                <fieldset>
                    <div class="form-group range-slider">
                        <label id="f-msc-rl">Ile lat chcesz żyć na emeryturze?</label>
                        <input name="retirement_length" type="range" min="10" max="30" step="5" class="input-range" id="f-msc-rl" value="20" autocomplete="off">
                        <span class="range-value">20</span>
                    </div>
                </fieldset>
            </form>
            
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
