<?php
if(!isset($header_title))
{
	$header_title = '';
}
else
{
	$header_title .= ' '.$this->startup->site_config->title_separator.' ';
}
?>
<!DOCTYPE html>
<html lang="<?php echo get_language($this->startup->locale); ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $header_title.$this->startup->site_config->sitename; ?></title>
    <meta name="robots" content="index, follow, noarchive">
    <meta name="googlebot" content="noarchive">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/urban_artist/urban_artist.css">
    <!--[if lte IE 6]> 
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/ie6.css">
    <![endif]-->
    <script type="text/javascript">
      //<![CDATA[
      function ___imageClose(){return '<?php echo base_url(); ?>images/lightbox-btn-close.gif';}
      function ___imageLoading(){return '<?php echo base_url(); ?>images/loading.gif';}
      function ___baseUrl(){return '<?php echo base_url(); ?>';}
      function ___siteUrl(){return '<?php echo site_url(); ?>';}
      //--]]>
    </script>
    <script src="<?php echo base_url(); ?>js/main.php" type="text/javascript"></script>
<?php
if(isset($include_flash_upload_js) && $include_flash_upload_js === TRUE)
{
?>
    <script src="<?php echo base_url(); ?>js/upload.js" type="text/javascript"></script>
<?php
}
if(isset($include_url_upload_js) && $include_url_upload_js === TRUE)
{
?>
    <script src="<?php echo base_url(); ?>js/url.js" type="text/javascript"></script>
<?php
}
?>
  </head>
  <body dir="<?php echo $this->startup->is_rtl; ?>">
    <!-- wrap starts here -->
    <div id="wrap">
      <!--header -->
      <div id="header">
        <h1 id="logo-text"><a href="<?php echo base_url(); ?>" title="home"><?php echo $this->startup->site_config->sitename; ?></a></h1>
        <p id="intro"><?php echo $this->startup->site_config->slogan; ?></p>
        <div  id="nav">
          <ul>
            <?php echo $this->xu_api->menus->get_main_menu(); ?>
          </ul>
        </div>
      <!--header ends-->
      </div>
      <!-- content-wrap starts -->
      <div id="content-wrap">
        <div id="main">