<!DOCTYPE html>
<html lang="en" dir="ltr" translate="no" prefix="og: http://ogp.me/ns#">
<head>
 <meta charset="UTF-8" />
 <title><?php echo $myPageTitle; ?></title>
 <meta content="<?php echo $myPageDesc; ?>" name="description"/>

 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="apple-touch-icon" sizes="180x180" href="<?php echo getUrl_wo_params(); ?>src/img/favicon/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="<?php echo getUrl_wo_params(); ?>src/img/favicon/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo getUrl_wo_params(); ?>src/img/favicon/favicon-16x16.png">
 <link rel="manifest" href="<?php echo getUrl_wo_params(); ?>src/img/favicon/site.webmanifest">
 <link rel="mask-icon" href="<?php echo getUrl_wo_params(); ?>src/img/favicon/safari-pinned-tab.svg" color="#000000">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-config" content="<?php echo getUrl_wo_params(); ?>src/img/favicon/browserconfig.xml">
 <meta name="theme-color" content="#ffffff">

 <meta content="<?php echo getUrl_wo_params(); ?>" name="site:root"/>
 <meta content="summary_large_image" name="twitter:card"/>
 <meta content="<?php echo $myPageTitle; ?>" name="twitter:title"/>
 <meta content="<?php echo $myPageDesc; ?>" name="twitter:description"/>
 <meta content="<?php echo getUrl_wo_params(); ?>src/img/passwd-cover-v1.jpg" name="twitter:image"/>
 <meta content="@MrAdib" name="twitter:creator"/>
 <meta content="<?php echo getUrl_wo_params(); ?>/" name="twitter:url"/>
 <meta content="website" property="og:type"/>
 <meta content="<?php echo $myPageTitle; ?>" property="og:title"/>
 <meta content="<?php echo $myPageDesc; ?>" property="og:description"/>
 <meta content="<?php echo getUrl_wo_params(); ?>src/img/passwd-cover-v1.jpg" property="og:image"/>
 <meta content="<?php echo getUrl_wo_params(); ?>/" property="og:url"/>
 <meta content="<?php echo $myPageTitle; ?>" property="og:site_name"/>

 <link href="<?php echo getUrl_wo_params(); ?>src/css/tailwind-2.1.1.min.css" rel="stylesheet">
</head>
<body class="bg-indigo-50">
<?php
if($myPage === '404')
{
  header('HTTP/1.1 404 Not Found');
  require_once $pagePath;
}
else
{
?>
 <div class="container mx-auto 2xl:px-48 xl:px-60 px-2 mt-4 mb-4">

  <nav class="bg-white py-2 md:py-4 mb-4 rounded-lg">
    <div class="container px-4 mx-auto md:flex md:items-center">

      <div class="flex justify-between items-center">
        <a href="<?php echo getUrl_wo_params(); ?>" class="font-bold text-xl text-indigo-600"><?php echo $myPageTitle; ?></a>
        <a href="<?php echo getUrl_wo_params(); ?>?page=about" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">About</a>
      </div>

      <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
<?php if($_GET && isset($_GET["id"])) {?>
        <a href="<?php echo getUrl_wo_params(); ?>" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Back</a>
<?php }?>
      </div>
    </div>
  </nav>
  <?php require_once $pagePath; ?>

 </div>
<?php }?>
 <script src="<?php echo getUrl_wo_params(); ?>src/js/passwd-runner.js"></script>
</body>
</html>