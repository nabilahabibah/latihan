

    
?>
<title>BBMK Online - Berita</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content='index, follow' name='robots'/>
	<meta content='index, follow' name='googlebot'/>
	<meta content='index, follow' name='msnbot'/>
	<meta name="description" content="Website Pendaftaran BBMK Online 2014 Universitas Andalas." />
	<meta name="keywords" content="Pendaftaran, BBMK, 2014, UNAND, Universitas, Andalas,  Website, Online, BBMK 2014," />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="./js/ajax.js">

</script>
<script language="javascript" src="./js/main.js">

</script>
<script language="JavaScript" type="text/javascript" src="./spryasset/accordion/SpryAccordion.js"></script>
<link href="./spryasset/accordion/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../spryasset/accordion/SpryEffects.js"></script>

<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
#rt{
font-size:20pt;
}
.style4 {color: #FF0000}
.style5 {
	color: #FFFFFF;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<br>
<?php
include"slider.php";?>
<div id="all">
  <div id="wrapper">
  
  			<div id="inner1">
	  
	  
	  
              <div id="nav">
                <?php
					$main->loadmenu();
					$main->loadmenutop();
 					$main->isi_menu_top;
				?>
              </div><!-- end nav -->
            		 
</div><!-- inner1 -->
<div id="inner">
          <dl id="browse">


              <dt>Main Menu</dt>
              <?php
echo $main->isi_menu;
?>

              
              <dt>Cek Status</dt>
              <dd class="searchform">
                <div id="form" ><input name="q" type="text" value="Masukkan No BP ..." class="text" onChange="wew=this.value;" onblur="cek_textbox(this,'Masukkan No BP ...');" onClick="cek_textbox(this,'Masukkan No BP ...');"/></div>
                    <p><div class="softright"><input type="image" src="images/btn_search.gif" onclick = "getData('cek.php?bp=' + wew,'targetDiv')"/></div>

                
<p><div id='targetDiv'></div>

              </dd>
          </dl>

         <?php
		 $act=@$_REQUEST['act'];
		  
		 switch($act){
		 case 'post':
		 ?>
		
		  
        <div id="body"><div class="inner">
		<?php
		 
		  $tool->post_berita(1);
		 break;
		 case 'post2':
		 $tool->post_berita(2);
		 break;
		 case 'read':
		 if (isset($_REQUEST['news_id'])){
		 $main->load_berita(3);
		 }
		 case 'ukm':
		 if (isset($_REQUEST['ukm_id'])){
		 $main->load_berita(4);
		 }
		 break;
		 default:
		 ?>
        <div class='kepala1'>Berita Seputar BBMK </div>
        <div id="body"><div class="inner">
		
          <table width="100%" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td colspan="2" class="subkepala1">Hot News</td>
            </tr>
            <?php
            $main->load_berita(1);
            echo $main->hot_news;
            ?>
            <tr>
              <td colspan="2" class="subkepala">Berita BBMK - Update UKM/UKMF </td>
            </tr>
            <?php
            $main->load_berita(2);
            echo $main->update_news;
            ?>
          </table>
      <div style='height:150px'></div>
	  <?php
	  break;
	  }
	  ?>  </div>
      </div>
      </div>
          <div class="clear"></div>
          </div><!-- end wrapper -->
</div><!-- all -->
<div id="footer">
  <div style="float:left">
  <?php
$main->loadmenu(); //memanggil main.inc.php line 589
$main->loadmenutop(); //tombol mybbmk, logout, login
echo $main->isi_menu_top;
?>
</div>
<div style="margin-right:10px; float:right; width:200px;">by UKM Neo Telemetri</div>
<div sytle="clear:both; width:100px;"></div>
</div><!-- end footer --> 
</body>
</html>