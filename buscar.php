<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pesquisar...</title>
	<link rel="stylesheet" href="css/component.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
<div class="title-container">
  <h1 class="title">Pesquise por um profissional...</h1>
  
</div>

<fieldset class="field-container">
  <input type="text" placeholder="Pesquisar..." class="field" />
  <div class="icons-container">
    <div class="icon-search"></div>
    <div class="icon-close">
      <div class="x-up"></div>
      <div class="x-down"></div>
    </div>
  </div>
</fieldset>

<script>
	$(document).on('ready', function() {
  
  $('.field').on('focus', function() {
    $('body').addClass('is-focus');
  });
  
  $('.field').on('blur', function() {
    $('body').removeClass('is-focus is-type');
  });
  
  $('.field').on('keydown', function(event) {
    $('body').addClass('is-type');
    if((event.which === 8) && $(this).val() === '') {
      $('body').removeClass('is-type');
    }
  });
  
});
</script>

</body>
</html>