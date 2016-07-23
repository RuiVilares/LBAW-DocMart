<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 04:49:07
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/info/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5220651525747079cca2539-69771027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2999520ec7b8524d9ee9dbcaf46e6117b19e9d7a' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/info/location.tpl',
      1 => 1465267738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5220651525747079cca2539-69771027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5747079cd546d7_73030732',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747079cd546d7_73030732')) {function content_5747079cd546d7_73030732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbzBzA_844mIB43D_gqph92jB8Q4-nUUQ">
  </script>

  <script>
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(41.1781332,-8.5952825),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };

      var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

      var marker = new google.maps.Marker({
        position:new google.maps.LatLng(41.177469, -8.595341),
        map: map,
        title: 'DocMart'
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <div id="googleMap" class"col-xs-6 col-sm-6 col-md-12 col-lg-12" style="margin: 0 auto;width:750px;height:570px;"></div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
