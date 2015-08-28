<?php
/**
 * EtchAPost
 *
 * By Larry Judd Oliver
 * http://larryjudd.us
 * Copyright (c)2015 Tradesouthwest. All rights reserved.
 * Released under GPL3 License, see readme.md
 * Do not remove the above copyright notice or text. 
 *
 * version 0.1
 *
 * Instructions:
 * Insert your personal passcode between the double quotes, on line below.
 * That is all that is required. You may change styles or add an external stylesheet.
 */
session_start();
// uncomment below if having header errors upon first setup
//if(session_status()!=PHP_SESSION_ACTIVE) session_start();

//Enter your passcode here
    $my_passcode = "pass";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Private relay etchAPost">
    <meta name="author" content="For more info visit Tradesouthwest, Larry Judd Oliver tradesouthwest.com">
    <link rel="icon" href="favicon.ico">
<style>
*{box-sizing: border-box; margin: 0; padding 0; }  
article,aside,details,figcaption,figure,footer,header,nav,section,summary { display: block; }
h1 {    font-size: 2em;    margin: 0.67em 0;}
h2 {    font-size: 1.5em;  margin: 0.83em 0;}
h3 {    font-size: 1.17em; margin: 1em 0;}
h4 {    font-size: 1em;    margin: 1.33em 0;}
h5 {    font-size: 0.83em; margin: 1.67em 0;}
body{width:98%; margin: 0 auto; padding: 20px 10px; font-size: 16px; font-family:helvetica,arial,sans-serif; color: #222; line-height: 1.222;}
.row{       width: 1200px; max-width: 100%;  margin: 0 auto; } 
.column{    float:left; padding:15px; } 
.column:last-child{      float: right; } 
.column.sidebar-wrapper{ width: 24.99999999997%; background: #fafafa; }
.column.container-form{  width: 75%; background: #fafafa; }  
.column.full{            width: 100%; background: #fafafa;}
@media (max-width: 767px){ 
	.row { width:auto;  } .column{ float:none !important; width: auto !important; } 
}
#frontMsg{ padding: 20px; text-align:justify; border-top: 1px solid #bbb; border-bottom:1px solid #bbb; }  
#etchPost{ min-height:539px; display:block; padding-top: 0;background: none; }
#etchform{ height: auto; }
.button:hover  {    border-top-color: #28597a;background: #28597a;color: #2fffff; }
.button:active {    border-top-color: #1b435e;background: #1b435e; }
.button        {    border-top: 1px solid #96d1f8;background: #65a9d7;background:linear-gradient(top, #3e779d, #65a9d7);
                    padding: 5px 11px;border-radius: 5px;box-shadow: rgba(0,0,0,1) 0 1px 0;text-shadow: rgba(0,0,0,.4) 0 1px 0;
                    color: white; cursor: pointer;text-decoration: none;vertical-align: middle; font-size: 15px; width: 85px; }
.submit { border-top: 1px solid #96d1f8;background: #65a9d7;background:linear-gradient(top, #3e779d, #65a9d7);padding: 7px 11px;border-radius: 5px;box-shadow: rgba(0,0,0,1) 0 1px 0;text-shadow: rgba(0,0,0,.4) 0 1px 0;color: white;cursor: pointer;text-decoration: none;vertical-align: middle; font-size: 15px; width: 125px; }
fieldset { background: #fcfdfc; border: thin solid #ddd; }
legend   { color: #833; }
input[type='checkbox'] { display:inline-block; width:19px; height:19px; }
.secondfieldset {        margin-bottom:8px; }
.secondfieldset input[type='text'] {   width:320px; }
.secondfieldset input[type='submit'] { margin-bottom: 1em;}
.secondfieldset textarea {             width: 95.33333333334%; height: 100px; }
.firstfieldset label { display:inline-block; margin:2px auto 2px 0; position:relative; min-width:53%; width:auto; max-width:53%; } 
input[type='password'], input[type='text'], textarea { border-radius: 3px; padding: 3px; margin: 3px auto; }
#login input[type='password'] { width: 150px; }
#login          { margin-bottom: 1em; border-bottom: thin solid #bbb; overflow: hidden; }
#login .button  { float: right;}
#logout .button { float: right; clear:both; }
.top { display: block; width: 100%; magin: 0 auto; height: auto; position: relative; top: -1em; }
.alignright{ float: right; margin:1px 20px 1px auto; position: relative; }
footer .column.full { background: #f7f7f7; } footer small xmp {line-height: 1.2;}
#logo{background:silver;border:8px solid red;border-radius:7px;height:42px; width:54px;display: inline-block;
margin-left: 1em;  padding: 0;} 
#logo:after{content:'o';font-weight:900; color:white; position:relative;left:-8px;top:17px;}
#logo:before{content:'o'; font-weight:900;color:white; position:relative;left:0;top:17px;}
#logo span{position:relative; left: -5px;top: 3px;vertical-align:middle;}

/* the four below selectors are for the page output text
-------------------------------------------------------- */
.subject { color: #455; }
.message { font-size: 1em; line-height: 132%; }
.intro-text{ font-size: 1.5em; margin: 0.83em 0; color: #777; line-height: 1; padding-bottom: 8px; margin-top: 1em; }
.header-text{ font-size: 2em; margin: 0.67em 0; color: #444; line-height: 1; }
</style>


</head>
<body>
   <div class="row"> 
       <article class="column full" id="etchPost">
<a class="button" href="#login"><span>LOGIN</span></a>
<?php
// @uses rand to generate appended user session
if(isset($_POST['loginSubmit'])) {
    $passcode = escmim($_POST['passcode']);
    if( $passcode == $my_passcode ) 
        { 
        $help_code = rand(1000,99999);
        $_SESSION['adminuser'] = ($passcode.$help_code); }
            else { echo "<h3>This login did not work</h3>"; }
}
?>
<?php
if( isset( $_POST['submitMsg'] ) ) {

    if (isset($_SESSION['adminuser'])) 
    {
        if(isset($_POST['header_text'])) { 
        $data = $_POST['header_text'];
        $html = new Html();
        $data = $html->filter( $data );
            $header_text = '<div class="header-text">' . $data . '</div>'; 
        }
        if(isset($_POST['intro_text'])) { 
        $data = $_POST['intro_text'];
        $html = new Html();
        $data = $html->filter( $data );
            $intro_text = '<div class="intro-text">' . $data . '</div>'; 
        }
        if(isset($_POST['frontSbj'])) { 
        $data = $_POST['frontSbj'];
        $html = new Html();
        $data = $html->filter( $data );
            $frontSbj = '<div class="subject">' . $data . '</div>'; 
        }
        if(isset($_POST['frontMsg'])) { 
        $data = $_POST['frontMsg'];
        $html = new Html();
        $data = $html->filter( $data );
            $frontMsg = '<div class="message">' . $data . '</div>'; 
        }
        if(isset($_POST['colorRed'])) { $newColor = "#990000"; }
        if(isset($_POST['colorGrn'])) { $newColor = "#009a00"; }
        if(isset($_POST['colorBlu'])) { $newColor = "#0020bb"; }
        if(isset($_POST['colorBlk'])) { $newColor = "#000000"; }
        if(!isset($_POST['hideDat'])) { 
            $date_stamp =  date('m/d/Y H:i:s');
            $time_stamp = '<time>' . $date_stamp . '</time>';
        } 
        
    $myFile = "etchaFile.txt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $strData = $header_text; 
    fwrite($fh, $strData);
    $strData = $intro_text; 
    fwrite($fh, $strData);
    $strData = $frontSbj; 
    fwrite($fh, $strData);
    $strData = $frontMsg;
    fwrite($fh, $strData);
     
    $strData = "\n";
    fwrite($fh, $strData);
    
    $strData = $time_stamp; 
    fwrite($fh, $strData);

    fclose($fh);
    
    } else {
        printf('You must be logged in to post'); 
        }
} // ends if isset submitMsg 
?>

                <div id="frontMsg">
                    <div style="color:<?php echo $newColor; ?>;">

                <?php                                         //converts line returns to breaks
                $data = file_get_contents("etchaFile.txt");   //read the file
                $convert = explode("\n", $data);              //create array separate by new line
                    for ($i=0;$i<count($convert);$i++) 
                    {
                    echo $convert[$i].'<br> ';                //write value by index
                    }
                ?>

                    </div>
                </div>
        </article>                      
    </div>
            <div class="row" id="etchForm">
                <div class="column sidebar-wrapper">
 
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="login-form" name="login_form">
                        <fieldset><legend><?php 

                                          if (isset($_SESSION['adminuser']))
                                              { echo "<h4>Logged In </h4>"; } 
                                                   else { echo "<h3>Please Log In</h3>"; }
                                          ?></legend>    
                             
                             <div id="login"> 
                                 <p><label>login passcode:</label><br>
                                     <input type="password" name="passcode" maxlength="35" /> 
                                     <input type="submit" class="button" name="loginSubmit" value="LOGIN"/></p>
                                <br>
                             </div>

                             <div id="logout"> 
                                 <p><label>log out: <a class="button" href="etchapost.php?logoutNow=true" id="logout" onclick="admin_logout();"><span>LOGOUT</span></a></label></p>
                             </div>
                             
                        </fieldset>
                    </form>
                        <br>
 
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="page-form" name="pageform">
                        <fieldset class="firstfieldset"><legend>Select a color</legend>
                            <p><label>color red: </label><input type="checkbox"   name="colorRed" value=true /></p>
                            <p><label>color green: </label><input type="checkbox" name="colorGrn" value=true /></p>
                            <p><label>color blue: </label><input type="checkbox"  name="colorBlu" value=true /></p>
                            <p><label>color black: </label><input type="checkbox" name="colorBlk" value=true /></p>
                        </fieldset> 
                            <br>               
                        <fieldset class="firstfieldset"><legend>Do not show time/date</legend>
                            <p><label>no time stamp: </label><input type="checkbox" name="hideDat" value=true /></p>
                        </fieldset>
                </div>  

                <article class="column container-form">
                    <div id="etchForm">
                         <fieldset class="secondfieldset"><legend>Current posted message will be written over!</legend>
 
	                    <p><label>subject:</label><br>
                                <input type="text" name="frontSbj" id="title" /></p>

                            <p><label>message:</label><br>
                                <textarea name="frontMsg" id="message"></textarea></p>

                            <p><label>header text:</label><br>
                                <input type="text" name="header_text" maxlength="165" /></p>
    
                            <p><label>intro text:</label><br>
                                <input type="text" name="intro_text" /></p>
 
                            <p><input type="submit" name="submitMsg" value="Post Message" class="button submit" /></p>
                            <p><label>remember to select all your options before submitting</label></p>
                        </fieldset> 
                    </form>
                          
<?php
// simple kill session function
function admin_logout() {
    session_start();
    unset($_SESSION['adminuser']);
}
  if (isset($_GET['logoutNow'])) {
    admin_logout();
  
echo "you are logged out";
}
?>
               
                       </div>
                </article>
            </div> <!-- ends row -->
                <footer class="row">
                    <div class="column full">
                        <small>HTML allowed tags inside of post: <xmp> <h1> <h2> <h3> <h4> <b> <dd> <dt> <dl> <p> (not needed/built in w/line return) <ol> <ul> <li> <small> </xmp></small>
                        <small><xmp> <blockquote> <table>... <br> <hr> <span> <a href...> <img src=...(use external link)/> </xmp></small>
                        <small>Hint: Use line return often to keep paragraph width minimal. </small>
                     
                        <div class="alignright">
                            <small>EtchAPost | TSW <a href="http://tradesouthwest.com" title="open source rocks">=|=</a></small>
                            <figure id="logo"><span>&#931;aP</span></figure>
                            
                        </div>
                    </div>
                </footer>
 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

<?php
 
/**
 * HTML parsing, filtering and sanitization
 * This class depends on Tidy which is included in the core since PHP 5.3
 *
 * @author Eksith Rodrigo <reksith at gmail.com>
 * @license http://opensource.org/licenses/ISC ISC License
 * @version 0.2
 */
 
class Html {
     
    /**
     * @var array HTML filtering options
     */
    public static $options = array( 
        'rx_url'    => // URLs over 255 chars can cause problems
            '~^(http|ftp)(s)?\:\/\/((([a-z|0-9|\-]{1,25})(\.)?){2,7})($|/.*$){4,255}$~i',
         
        'rx_js'     => // Questionable attributes
            '/((java)?script|eval|document)/ism',
         
        'rx_xss'    => // XSS (<style> can also be a vector. Stupid IE 6!)
            '/(<(s(?:cript|tyle)).*?)/ism',
         
        'rx_xss2'   => // More potential XSS
            '/(document\.|window\.|eval\(|\(\))/ism',
         
        'rx_esc'    => // Directory traversal/escaping/injection
            '/(\\~\/|\.\.|\\\\|\-\-)/sm'    ,
         
        'scrub_depth'   => 6, // URL Decoding depth (fails on exceeding this)
         
        'nofollow'  => true // Set rel='nofollow' on all links
 
    );
     
    /**
     * @var array List of HTML Tidy output settings
     * @link http://tidy.sourceforge.net/docs/quickref.html
     */
    private static $tidy = array(
        // Preserve whitespace inside tags
        'add-xml-space'         => true,
         
        // Remove proprietary markup (E.G. og:tags)
        'bare'              => true,
         
        // More proprietary markup
        'drop-proprietary-attributes'   => true,
         
        // Remove blank (E.G. <p></p>) paragraphs
        'drop-empty-paras'      => true,
         
        // Wraps bare text in <p> tags
        'enclose-text'          => true,
         
        // Removes illegal/invalid characters in URIs
        'fix-uri'           => true,
         
        // Removes <!-- Comments -->
        'hide-comments'         => true,
         
        // Removing indentation saves storage space
        'indent'            => false,
         
        // Combine individual formatting styles
        'join-styles'           => true,
         
        // Converts <i> to <em> & <b> to <strong>
        'logical-emphasis'      => true,
         
        // Byte Order Mark isn't really needed
        'output-bom'            => false,
         
        // Ensure UTF-8 characters are preserved
        'output-encoding'       => 'utf8',
         
        // W3C standards compliant markup
        'output-xhtml'          => true,
         
        // Had some unexpected behavior with this
        //'markup'          => true,
 
        // Merge multiple <span> tags into one        
        'merge-spans'           => true,
         
        // Only outputs <body> (<head> etc... not needed)
        'show-body-only'        => true,
         
        // Removing empty lines saves storage
        'vertical-space'        => false,
         
        // Wrapping tags not needed (saves bandwidth)
        'wrap'              => 0
    );
     
     
    /**
     * @var array Whitelist of tags. Trim or expand these as necessary
     * @example 'tag' => array( of, allowed, attributes )
     */
    private static $whitelist = array(
        'p'         => array( 'style', 'class', 'align' ),
        'div'       => array( 'style', 'class', 'align' ),
        'span'      => array( 'style', 'class' ),
        'br'        => array( 'style', 'class' ),
        'hr'        => array( 'style', 'class' ),
        'small'     => array( 'style', 'class' ),
         
        'h1'        => array( 'style', 'class' ),
        'h2'        => array( 'style', 'class' ),
        'h3'        => array( 'style', 'class' ),
        'h4'        => array( 'style', 'class' ),
        'h5'        => array( 'style', 'class' ),
        'h6'        => array( 'style', 'class' ),
         
        'strong'    => array( 'style', 'class' ),
        'em'        => array( 'style', 'class' ),
        'u'     => array( 'style', 'class' ),
        'strike'    => array( 'style', 'class' ),
        'del'       => array( 'style', 'class' ),
        'ol'        => array( 'style', 'class' ),
        'ul'        => array( 'style', 'class' ),
        'li'        => array( 'style', 'class' ),
        'code'      => array( 'style', 'class' ),
        'pre'       => array( 'style', 'class' ),
         
        'sup'       => array( 'style', 'class' ),
        'sub'       => array( 'style', 'class' ),
         
        // Took out 'rel' and 'title', because we're using those below
        'a'     => array( 'style', 'class', 'href' ),
         
        'img'       => array( 'style', 'class', 'src', 'height', 
                      'width', 'alt', 'longdesc', 'title', 
                      'hspace', 'vspace' ),
         
        'table'     => array( 'style', 'class', 'border-collapse', 
                      'cellspacing', 'cellpadding' ),
                     
        'thead'     => array( 'style', 'class' ),
        'tbody'     => array( 'style', 'class' ),
        'tfoot'     => array( 'style', 'class' ),
        'tr'        => array( 'style', 'class' ),
        'td'        => array( 'style', 'class', 
                    'colspan', 'rowspan' ),
        'th'        => array( 'style', 'class', 'scope', 'colspan', 
                      'rowspan' ),
         
        'q'     => array( 'style', 'class', 'cite' ),
        'cite'      => array( 'style', 'class' ),
        'abbr'      => array( 'style', 'class' ),
        'blockquote'    => array( 'style', 'class' ),
         
        // Stripped out
        'body'      => array()
    );
     
     
     
    /**#@+
     * HTML Filtering
     */
     
     
    /**
     * Convert content between code blocks into code tags
     * 
     * @param $val string Value to encode to entities
     */
    protected function escapeCode( $val ) {
         
        if ( is_array( $val ) ) {
            $out = self::entities( $val[1] );
            return '<code>' . $out . '</code>';
        }
         
    }
     
     
    /**
     * Convert an unformatted text block to paragraphs
     * 
     * @link http://stackoverflow.com/a/2959926
     * @param $val string Filter variable
     */
    protected function makeParagraphs( $val ) {
         
        /**
         * Convert newlines to linebreaks first
         * This is why PHP both sucks and is awesome at the same time
         */
        $out = nl2br( $val );
         
        /**
         * Turn consecutive <br>s to paragraph breaks and wrap the 
         * whole thing in a paragraph
         */
        $out = '<p>' . preg_replace('#(?:<br\s*/?>\s*?){2,}#', 
            '<p></p><p>', $out ) . '</p>';
         
        /**
         * Remove <br> abnormalities
         */
        $out = preg_replace( '#<p>(\s*<br\s*/?>)+#', '</p><p>', $out );
        $out = preg_replace( '#<br\s*/?>(\s*</p>)+#', '<p></p>', $out );
         
        return $out;
    }
     
     
    /**
     * Filters HTML content through whitelist of tags and attributes
     * 
     * @param $val string Value filter
     */
    public function filter( $val ) {
         
        if ( !isset( $val ) || empty( $val ) ) {
            return '';
        }
         
        /**
         * Escape the content of any code blocks before we parse HTML or 
         * they will get stripped
         */
        $out    = preg_replace_callback( "/\<code\>(.*)\<\/code\>/imu", 
                array( $this, 'escapeCode' ) , $val
            );
         
        /**
         * Convert to paragraphs and begin
         */
        $out    = $this->makeParagraphs( $out );
        $dom    = new DOMDocument();
         
        /**
         * Hide parse warnings since we'll be cleaning the output anyway
         */
        $err    = libxml_use_internal_errors( true );
         
        $dom->loadHTML( $out );
        $dom->encoding = 'utf-8';
         
        $body   = $dom->getElementsByTagName( 'body' )->item( 0 );
        $this->cleanNodes( $body, $badTags );
         
        /**
         * Iterate through bad tags found above and convert them to 
         * harmless text
         */
        foreach ( $badTags as $node ) {
            if( $node->nodeName != "#text" ) {
                $ctext = $dom->createTextNode( 
                        $dom->saveHTML( $node )
                    );
                $node->parentNode->replaceChild( 
                    $ctext, $node
                );
            }
        }
         
         
        /**
         * Filter the junk and return only the contents of the body tag
         */
        $out = tidy_repair_string( 
                $dom->saveHTML( $body ), 
                self::$tidy
            );
         
         
        /**
         * Reset errors
         */
        libxml_clear_errors();
        libxml_use_internal_errors( $err );
         
        return $out;
    }
     
     
    protected function cleanAttributeNode( 
        &$node, 
        &$attr, 
        &$goodAttributes, 
        &$href
    ) {
        /**
         * Why the devil is an attribute name called "nodeName"?!
         */
        $name = $attr->nodeName;
         
        /**
         * And an attribute value is still "nodeValue"?? Damn you PHP!
         */
        $val = $attr->nodeValue;
         
        /**
         * Default action is to remove the attribute completely
         * It's reinstated only if it's allowed and only after 
         * it's filtered
         */
        $node->removeAttributeNode( $attr );
         
        if ( in_array( $name, $goodAttributes ) ) {
             
            switch ( $name ) {
                 
                /**
                 * Validate URL attribute types
                 */
                case 'url':
                case 'src':
                case 'href':
                case 'longdesc':
                    if ( self::urlFilter( $val ) ) {
                        $href = $val;
                    } else {
                        $val = '';
                    }
                    break;
                 
                /**
                 * Everything else gets default scrubbing
                 */
                default:
                    if ( self::decodeScrub( $val ) ) {
                        $val = self::entities( $val );
                    } else {
                        $val = '';
                    }
            }
             
            if ( '' !== $val ) {
                $node->setAttribute( $name, $val );
            }
        }
    }
     
     
    /**
     * Modify links to display their domains and add 'nofollow'.
     * Also puts the linked domain in the title as well as the file name
     */
    protected static function linkAttributes( &$node, $href ) {
        try {
            if ( !self::$options['nofollow'] ) {
                return;
            }
             
            $parsed = parse_url( $href );
            $title  = $parsed['host'] . ' ';
             
            $f  = pathinfo( $parsed['path'] );
            $title  .= ' ( /' . $f['basename'] . ' ) ';
                 
            $node->setAttribute( 
                'title', $title
            );
             
            if ( self::$options['nofollow'] ) {
                $node->setAttribute(
                    'rel', 'nofollow'
                );
            }
             
        } catch ( Exception $e ) { }
    }
     
     
    /**
     * Iterate through each tag and add non-whitelisted tags to the 
     * bad list. Also filter the attributes and remove non-whitelisted ones.
     * 
     * @param htmlNode $node Current HTML node
     * @param array $badTags Cumulative list of tags for deletion
     */
    protected function cleanNodes( $node, &$badTags = array() ) {
         
        if ( array_key_exists( $node->nodeName, self::$whitelist ) ) {
             
            if ( $node->hasAttributes() ) {
                 
                /**
                 * Prepare for href attribute which gets special 
                 * treatment
                 */
                $href = '';
                 
                /**
                 * Filter through attribute whitelist for this 
                 * tag
                 */
                $goodAttributes = 
                    self::$whitelist[$node->nodeName];
                 
                 
                /**
                 * Check out each attribute in this tag
                 */
                foreach ( 
                    iterator_to_array( $node->attributes ) 
                    as $attr ) {
                    $this->cleanAttributeNode( 
                        $node, $attr, $goodAttributes, 
                        $href
                    );
                }
                 
                /**
                 * This is a link. Treat it accordingly
                 */
                if ( 'a' === $node->nodeName && '' !== $href ) {
                    self::linkAttributes( $node, $href );
                }
                 
            } // End if( $node->hasAttributes() )
             
            /**
             * If we have childnodes, recursively call cleanNodes 
             * on those as well
             */
            if ( $node->childNodes ) {
                foreach ( $node->childNodes as $child ) {
                    $this->cleanNodes( $child, $badTags );
                }
            }
             
        } else {
             
            /**
             * Not in whitelist so no need to check its child nodes. 
             * Simply add to array of nodes pending deletion.
             */
            $badTags[] = $node;
             
        } // End if array_key_exists( $node->nodeName, self::$whitelist )
         
    }
     
    /**#@-*/
     
     
    /**
     * Returns true if the URL passed value is harmless.
     * This regex takes into account Unicode domain names however, it 
     * doesn't check for TLD (.com, .net, .mobi, .museum etc...) as that 
     * list is too long.
     * The purpose is to ensure your visitors are not harmed by invalid 
     * markup, not that they get a functional domain name.
     * 
     * @param string $v Raw URL to validate
     * @returns boolean
     */
    public static function urlFilter( $v ) {
         
        $v = strtolower( $v );
        $out = false;
         
        if ( filter_var( $v, 
            FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED ) ) {
             
            /**
             * PHP's native filter isn't restrictive enough.
             */
            if ( preg_match( self::$options['rx_url'], $v ) ) {
                $out = true;
            } else {
                $out = false;
            }
             
            if ( $out ) {
                $out = self::decodeScrub( $v );
            }
        } else {
            $out = false;
        }
         
        return $out;
    }
     
     
    /**
     * Regular expressions don't work well when used for validating HTML.
     * It really shines when evaluating text so that's what we're doing here
     * 
     * @param string $v string Attribute name
     * @param int $depth Number of times to URL decode
     * @returns boolean True if nothing unsavory was found.
     */
    public static function decodeScrub( $v ) {
        if ( empty( $v ) ) {
            return true;
        }
         
        $depth      = self::$options['scrub_depth'];
        $i      = 1;
        $success    = false;
        $old        = '';
         
         
        while( $i <= $depth && !empty( $v ) ) {
            // Check for any JS and other shenanigans
            if (
                preg_match( self::$options['rx_xss'], $v ) || 
                preg_match( self::$options['rx_xss2'], $v ) || 
                preg_match( self::$options['rx_esc'], $v )
            ) {
                $success = false;
                break;
            } else {
                $old    = $v;
                $v  = self::utfdecode( $v );
                 
                /**
                 * We found the the lowest decode level.
                 * No need to continue decoding.
                 */
                if ( $old === $v ) {
                    $success = true;
                    break;
                }
            }
             
            $i++;
        }
         
         
        /**
         * If after decoding a number times, we still couldn't get to 
         * the original string, then there's something still wrong
         */
        if ( $old !== $v && $i === $depth ) {
            return false;
        }
         
        return $success;
    }
     
     
    /**
     * UTF-8 compatible URL decoding
     * 
     * @link http://www.php.net/manual/en/function.urldecode.php#79595
     * @returns string
     */
    public static function utfdecode( $v ) {
        $v = urldecode( $v );
        $v = preg_replace( '/%u([0-9a-f]{3,4})/i', '&#x\\1;', $v );
        return html_entity_decode( $v, null, 'UTF-8' );
    }
     
     
    /**
     * HTML safe character entitites in UTF-8
     * 
     * @returns string
     */
    public static function entities( $v ) {
        return htmlentities( 
            iconv( 'UTF-8', 'UTF-8', $v ), 
            ENT_NOQUOTES | ENT_SUBSTITUTE, 
            'UTF-8'
        );
    }   
}
?>       

 </body> 
 </html>
