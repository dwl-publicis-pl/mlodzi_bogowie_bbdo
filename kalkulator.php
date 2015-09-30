<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            
            <form role="form" id="mscCalc" action="#" method="post">
                <fieldset>
                    <div class="form-group">
                        <label id="f-msc-rl">Ile lat chcesz żyć na emeryturze?</label>
                        <input name="retirement_length" type="range" min="10" max="30" step="5" class="form-control" id="f-msc-rl" value="20">
                        <span class="retirement_length_value">20</span>
                    </div>
                    
                    <div class="form-group">
                        <label id="f-msc-ms">Ile dodatkowo chcesz dostawać miesięcznie PLN na emeryturze?</label>
                        <input name="monthly_savings" type="range" min="500" max="5000" step="500" class="form-control" id="f-msc-ms" value="1500">
                        <span class="monthly_savings_value">1500</span>
                    </div>
                    
                    <div class="form-group">
                        <label id="f-msc-ss">Kiedy chcesz zacząć oszczędać?</label>
                        <input name="start_save_up" type="range" min="20" max="66" step="1" class="form-control" id="f-msc-ss" value="20">
                        <span class="start_save_up_value">20</span>
                    </div>
                    
                    <div>
                        Oszczędzaj miesięcznie <span id="retirement_saves_result">...</span> zł.
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
