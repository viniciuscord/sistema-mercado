<?php 
include('header.php');
include('scripts.php');
include('links.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
// $ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <div class="panel panel-primary">
        <div class="panel-heading">CADASTRO PRODUTOS/TIPO</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body" style="display:none">
            <div class="form-group">
               <label class="control-label col-sm-2">Produto:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <select class="form-control" type="text" name="name" required>
                  <!-- <select name="cars" id="cars"> -->
                    <option value="" selected></option>
                    <option value="A">Produto A</option>
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
                    <option value="1">Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Tipo 3</option>
                  </select>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Imposto(%):<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="imposto" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">Preço(R$):<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="preco" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Quantidade:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="qtd" required>
               </div>
            </div>
            <!-- <div class="form-group">
               <label class="control-label col-sm-2">Observação:</label>
               <div class="col-sm-5">
                  <textarea rows="5" cols="5" class="form-control" name="address"></textarea>
               </div>
            </div> -->
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="Enviar"  value="Enviar">
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