<!DOCTYPE HTML>
<html lang="pt-PT">
  <head>
    <base href="https://gnomo.fe.up.pt/~lbaw1511/final/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DocMart</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/sandstone/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="javascript/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
  </head>
  <body>
  {if $EMAIL}
  {if $ADMIN}
    {include file='common/navbarAdmin.tpl'}
  {else}
    {include file='common/navbarLoggedIn.tpl'}
  {/if}
  {else}
    {include file='common/navbarLoggedOut.tpl'}
  {/if}

  {foreach $ERROR_MESSAGES as $error}
    <script>
      swal("Erro", "{$error}", "error");
    </script>
  {/foreach}

  {foreach $SUCCESS_MESSAGES as $success}
    <script>
      swal("Sucesso", "{$success}", "success");
    </script>
  {/foreach}
