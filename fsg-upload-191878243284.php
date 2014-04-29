<?
/**
  * Configuration
  */

$SITEMAPDIR = "./";					// Where to put new sitemaps

/**
  * No changes needed below this line
  * ==================================================================================
  */

/**
  * This file receives the newly created sitemaps
  * by www.freesitemapgenerator.com
  *
  * Please do not make any changes
  *
  *
  * (c) 2005 www.freesitemapgenerator.com
  *
  * This product comes with ABSOLUTELY NO WARRANTY, to the extent
  * permitted by applicable law.
  *
  * Use at own risk, we cannot be held responsable for any damages
  * caused directly or indirectly by installing this sofware.
  *
  */

$FSG_VERSION = "0.92";					// fsg-upload version
$FSG_UNIQUEID = "6993f7a4c2ffb6964e9d38cb9e65ca37";	// unique identifier

/**
  * Act like a 404 page if FSG_UNIQUEID is incorrect or method is not POST
  */
if (sizeof($_POST) != 4 || $_POST["uniqueid"] != $FSG_UNIQUEID)
{
  /**
    * Produce 404 error message
    */

  header("HTTP/1.1 404 Not Found");
 
  echo   "<HTML><HEAD><META NAME=\"ROBOTS\" CONTENT=\"NOINDEX,FOLLOW\"><META ".
	 "HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\">".
	 "<TITLE>404 Not Found</TITLE>".
	 "</HEAD><BODY>".
	 "<H1>404 Page not found</H1>".
	 "Go to the <A HREF=\"/\">Homepage</A>".
	 "<BR><BR>".
	 $_SERVER[SERVER_SIGNATURE].
	 "</BODY></HTML>";

  die();
}

/**
  * Check version
  */
if ($_POST["minversion"] > $FSG_VERSION)
{
  /**
    * We need to upgrade!
    */
  error_log("fsg-update.php: You need to upgrade to a newer version of fsg-update.");
  echo "error=101\n";
  die();
}

/**
  * Verification succeeded, now time to save data
  */

$outfile = $_POST["file"];

/**
  * remove slashes from file, just to make sure
  */
$outfile = str_replace("/", "", $outfile);


if (substr($outfile, 0,7) != "sitemap")
{
  error_log("fsg-upload.php: eeks. upload of $outfile tried");
  echo "error=103";
  die();
}

if (array_key_exists("gzdata" , $_POST))
{
	/**
	  * Using compressed data
	  */

	if (function_exists("gzuncompress"))
	{
          error_log("Compressed upload! (" . strlen($_POST[gzdata]) . " bytes)");
          
          $outdata = gzuncompress($_POST[gzdata]);
          
          if (strlen($outdata) == 0)
          {
            echo "error=104";
            die();
          }
	}
	else
	{
	  /**
	    * We cannot handle compressed data
	    */
        
          error_log("Compressed upload failed ...gzuncompress() not supported");
          echo "error=104";
          die();
	}

}
else
{
	/**
	  * Assume normal ASCII data
	  */

	$outdata=$_POST["data"];
}

$outdata = str_replace("\\", "", $outdata); 


$fp = @fopen($SITEMAPDIR . "/" . $outfile, "wb");
if (!$fp)
{
  /**
    * File permissions ?
    */
  error_log("fsg-upload.php: Could not write to $SITEMAPDIR/$outfile");
  echo "error=100";
  die();
}

@fwrite($fp, $outdata);
@fclose($fp);

/**
  * Write done!
  */

error_log("fsg-upload.php: Received OK '$outfile'");
echo "error=0";
die();

?>
