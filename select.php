<style>
.fa-thumbs-up{
     height:250px; 
     position:fixed; 
     bottom: 120px; 
     right: 25px; 
     z-index:99999; 
      
}

</style>
<script src="https://kit.fontawesome.com/ac2e97408d.js" crossorigin="anonymous"></script>

<?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "tcc");  
      $query = "SELECT u.nome, u.email, u.telefone, u.celular, u.sexo, u.cpf, u.descricao_profissao, p.nome_profissao FROM profissionais u INNER JOIN profissoes p ON u.profissao_id = p.id_profissao WHERE u.id = " . (int)$_POST['id']; 
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Nome</label></td>  
                     <td width="70%">'.$row["nome"].' <i class="far fa-thumbs-up"></i></td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Profissão</label></td>  
                     <td width="70%">'.$row["nome_profissao"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Decrição</label></td>  
                     <td width="70%">'.$row["descricao_profissao"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Telefone</label></td>  
                     <td width="70%">'.$row["telefone"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Celular</label></td>  
                     <td width="70%">'.$row["celular"].' <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5541999999"><img src="https://i.imgur.com/ryESuZ5.png" style="height:25px; position:fixed; bottom: 120px; right: 25px; z-index:99999;" data-selector="img"></a></td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }
