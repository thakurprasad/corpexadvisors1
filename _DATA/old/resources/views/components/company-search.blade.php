<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<style type="text/css">
    .close{
        width:100px;
    }
    .modal button.btn-primary ,.modal button.btn-secondary{
        width: 200px;
    }
    .none{
        display: none;
    }
    .table-responsive-sm .row {
    padding-bottom: 10px;
    border-bottom: 1px solid #ccc;
    padding-top: 10px;
}

.my-10{
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>

<form method="get">
    <div class="row col-md-12">
        
        <div class="col-md-8 my-10">
            <input id="tags" type="text" name="s" class="form-control" 
            value="<?= isset($s) ? $s : "" ?>" 
            placeholder="Enter Company Name/CIN">
        </div>

        <div class="col-md-4 my-10">
            <input type="submit" name="search" value="search" class="custom-button"> 
        </div>
        
    </div>
</form>

<?php
$arr = array();
foreach($companies as $key=>$r){
    $arr[] = $r->company_name;
}

$companies_str = implode("|",$arr); // return string 

 ?>

  <script>

  $( function() {
    var comp_str = "<?= $companies_str ?>";
    var availableTags = comp_str.split("|");
    $( "#tags" ).autocomplete({
     source: availableTags,
      minLength: 3      
    });
  } );
  </script>


 <button  type="button" id="my_popup" class="custom-button none" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title"><?= (isset($_GET['s']) ? $_GET['s']: 'Company Details') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="table-responsive-sm"> 
            @if(!empty($data))
                <?php
                $arr = json_decode($data, true);
                 foreach( $arr as $key => $val) { 
                    $key = ucwords(str_replace("_", " ", $key));
                    ?>        
                        <div class="row">
                            <div class="col-md-4 col-sm-4"><b><?= $key ?></b></div>
                            <div class="col-md-8 col-sm-8"><?= $val; ?></div>        
                        </div>
                <?php } // foreach end ?>
                </div>
                    @else
                        <div class="alert alert-info">
                            No Records Found
                        </div>
                    @endif
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
   $( document ).ready(function() {
        <?php if(isset($_GET['s'])){ ?>
            $("#my_popup").click();    
        <?php } ?>
    });
</script>
