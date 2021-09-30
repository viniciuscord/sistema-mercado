<?php 
include('header.php');
include('scripts.php');
include('links.php');
// $user = $_SESSION['user'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">     
  <div class="panel panel-primary">
        <div class="panel-heading">ALTERAR DADOS PRODUTOS</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body" style="display:none">             
            <div class="form-group">
               <label class="control-label col-sm-2">Produto:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <select class="form-control" type="text" name="name" disabled>
                  <!-- <select name="cars" id="cars"> -->
                    <option value=""></option>
                    <option value="A" selected>Produto A</option>
                    <option value="B">Produto B</option>
                    <option value="C">Produto C</option>
                    <option value="D">Produto D</option>
                    <option value="E">Produto E</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Tipo:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <select class="form-control" type="text" name="name" required>
                  <!-- <select name="cars" id="cars"> -->
                    <option value=""></option>
                    <option value="1" selected>Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Tipo 3</option>
                  </select>
               </div>
            </div>            
             <div class="form-group">
               <label class="control-label col-sm-2">Imposto(%):<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "10"  type="number" name="mobileno" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Preço(R$):<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "20,00" type="number" name="mobileno" required>
               </div>
            </div>
            <!-- <div class="form-group">
               <label class="control-label col-sm-2">Address:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <textarea rows="5" cols="5" class="form-control" name="address" required><?=$user->address?></textarea>
               </div>
               <input type="hidden" value="<?=$user->id?>" name="id">
            </div> -->
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="update" value="Alterar">                    
                </div>
            </div> 
        </div>      
</form>
</div>
</div>  
<?php
include('footer.php');
?>
<script><?php include 'mercado.js';?></script>