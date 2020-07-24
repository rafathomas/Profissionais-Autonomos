<?php
$connect = mysqli_connect("localhost", "root", "", "tcc");
$query = "SELECT * FROM profissionais where profissao_id = " . $_GET['prof'];
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
     <title>Profissionais</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" type="text/css">
     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<style>
     h3 {
          font-family: "Krona One";
          text-align: center;
          text-transform: uppercase;
          font-weight: bold;
     }

     .btn-default:hover {
          background-color: #B0B9BC;
     }

     .fade {
          background-color: rgba(0, 0, 0, .3);
     }

     h4 {
          right: -4px;
          position: relative;
     }

     #datepicker {
          display: flex;
          justify-content: center;
          left: -5px;
          top: 30px;
          position: relative;
     }

     div.card-block {
          margin: 5px 0;
     }

     .btn-xs {
          width: 150px;
          top: 15px;
          left: 50px;
          position: relative;
     }

     .card {
          margin: 25px;
     }

     .card-title {
          font-size: 20px;
          line-height: 20px;
          font-family: roboto;
          font-weight: 700;
          color: #0075bb;
          position: relative;
          left: 10px;
     }

     @font-face {
          font-family: Roboto;
          src: url('fonts/Roboto.ttf');
     }
</style>


<body>
     <br /><br />
     <div class="container">
          <h3>Lista de Profissionais</h3>
          <br />
          <div class="py-5">
               <div class="row hidden-md-up">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                         <div class="col col-lg-4 mb-3">
                              <div class="card">
                                   <div class="card-block">
                                        <h6 class="card-title"><?php echo $row["nome"]; ?></h6>
                                        <br>
                                        <center>
                                             <div><span>Clique abaixo no dia que deseja reservar para sua consulta</span></div>
                                        </center>


                                        <div id="datepicker"></div>
                                        <br>
                                        <td><input type="button" name="view" value="Ver" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>

                                        </tr>
                                   </div>
                              </div>
                         </div>
                    <?php
                    }
                    ?>
               </div>
          </div>
     </div>



     <div id="dataModal" class="modal fade">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h4 class="modal-title">Detalhe do profissional</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" id="employee_detail">
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
               </div>
          </div>
     </div>
     <script>
          $(document).ready(function() {
               $('.view_data').click(function() {
                    var id = $(this).attr("id");
                    $.ajax({
                         url: "select.php",
                         method: "post",
                         data: {
                              id: id
                         },
                         success: function(data) {
                              $('#employee_detail').html(data);
                              $('#dataModal').modal("show");
                         }
                    });
               });
          });
     </script>

     <script>
          $(function() {
               $("#datepicker").datepicker();
          });
     </script>


</html>
</body>