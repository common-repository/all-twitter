<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="social-feed-main-container" style="width: <?php echo intval( $template_var['width'] ) ?>px;max-width: 100%">
<div

id="feed<?php echo intval($id) ?>"
style="width: <?php echo intval( $template_var['width'] ) ?>px;max-width: 100%"
data-ajaxlink="<?php echo esc_url( $template_var['ajax_link'] ) ?>" 
data-facebook="<?php esc_attr_e( $template_var['facebook_profile'] ) ?>" 
data-fbtoken="<?php esc_attr_e( $template_var['fb_token'] ) ?>" 
data-isfb="<?php esc_attr_e( $template_var['isfb'] ) ?>"
data-id="<?php echo intval( $id ) ?>" 
data-fblimit="<?php echo intval( $template_var['fblimit'] ) ?>" 
data-twlimit="<?php echo intval( $template_var['twlimit'] ) ?>" 
data-instalimit="<?php echo intval( $template_var['instalimit'] ) ?>" 
data-bgcolor="<?php esc_attr_e( $template_var['bgcolor'] ) ?>"
data-txtcolor="<?php esc_attr_e( $template_var['txtcolor'] ) ?>"
data-isondate="<?php esc_attr_e( $template_var['isOnDate'] ) ?>"
data-isicons="<?php esc_attr_e( $template_var['isSocialIcon'] ) ?>"
data-isdisplaypic="<?php esc_attr_e( $template_var['isDisplayPicture'] ) ?>"
data-twitterid="<?php esc_attr_e( $template_var['twitter_id'] ) ?>" 
data-twittersecret="<?php esc_attr_e( $template_var['twitter_secret'] ) ?>"
data-twitter="<?php esc_attr_e( $template_var['twitter'] ) ?>"
data-istw="<?php esc_attr_e( $template_var['istw'] ) ?>"
data-isinsta="<?php esc_attr_e( $template_var['isinsta'] ) ?>"
data-instagram="<?php esc_attr_e( $template_var['instagram'] ) ?>" 
data-instagramtoken="<?php esc_attr_e( $template_var['instagram_token'] ) ?>" 
data-template="<?php esc_attr_e( $template_var['layout'] ) ?>"
class="social-feed-container"></div></div>

<style>
/* Plugin styles */
.textwidget a{
    border-bottom: none;
}
.entry-content a, .entry-summary a, .page-content a, .comment-content a, .pingback .comment-body > a{
     border-bottom: none;
}
.social-feed-container {
            margin: 1.5em 0;
            padding: 0;
            -moz-column-gap: 1.5em;
            -webkit-column-gap: 1.5em;
            column-gap: 1.5em;
            margin: 5px;
            float: left;
            width: 100%;
        }
        #wpsfp-item{ /* Masonry bricks or child elements */
            min-width: 250px;
            width: 300px;
            margin: 0 0 1.5em;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-shadow: 2px 2px 4px 0 #ccc;
            border: 1px solid #D8D8D8;
        }
        @media only screen and (min-width: 400px) {
         .social-feed-container {
             width: 100%;
                -moz-column-count: 2;
                -webkit-column-count: 2;
                column-count: 2;
            }
        }

        @media only screen and (min-width: 700px) {
           .social-feed-container  {
             width: 100%;
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        @media only screen and (min-width: 900px) {
          .social-feed-container{
             width: 100%;
                -moz-column-count: 4;
                -webkit-column-count: 4;
                column-count: 4;
            }
        }

        @media only screen and (min-width: 1100px) {
         .social-feed-container {
             width: 100%;
                -moz-column-count: 5;
                -webkit-column-count: 5;
                column-count: 5;
            }
        }

        @media only screen and (min-width: 1280px) {
         .social-feed-container {
               width: 100%;
                 -moz-column-count: 6;
                -webkit-column-count: 6;
                column-count: 5;
            }
        }
        .entry-content{
    width: 90%;
    max-width: 100%;
}
.social-feed-element {
	padding: 5px;
	background-color: #363636;
}

.social-feed-element .media-attachment {
    text-align: center;
}

.social-feed-element .SMUZSFTW-video {

	text-align: center;
	padding-top: 5px;

}

.social-feed-element.hidden{
    background-color:red !important;
}
.social-feed-element .pull-left{
    float:left;
    margin-right: 10px;
        margin-top: 8px;
    margin-left: 8px;
}
.social-feed-element .pull-right {
    margin-left: 10px;
}
.social-feed-main-container{
    margin: 0 auto;
}
.social-feed-element img {
    width: 100%;
    width: auto\9;
    height: auto;
    border: 0;  
    vertical-align: middle;
    -ms-interpolation-mode: bicubic;
}
.social-feed-element .attachment {
    vertical-align: middle;
    -ms-interpolation-mode: bicubic;
}

/* Link styles */
.social-feed-element a {
    color: #0088cc;
    text-decoration: none;
}
.social-feed-element a:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
.social-feed-element a:hover,
.social-feed-element a:active {
    outline: 0;
    color: #005580;
    text-decoration: underline;
}

/* Text styles */
.social-feed-element small {
    font-size: 85%;
}
.social-feed-element strong {
    font-weight: bold;
}
.social-feed-element em {
    font-style: italic;
}
.social-feed-element p {
    margin: 0 0 10px;
}
.social-feed-element .media-body > p{
    margin-bottom:4px;
    min-height:20px;
    margin-top: 10px;
}
.social-feed-element p.social-feed-text {
    margin: 30px;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
}

/* Message styles */
.social-feed-element,
.social-feed-element .media-body {
    overflow: hidden;
    zoom: 1;
    *overflow: visible;
        
}
.social-feed-element .media-body .social-network-icon{
    margin-top: -3px;
    margin-right:5px;
    width:16px;
}
.social-feed-element .media-body div{
    color:#666;
    line-height: 20px;
}
.social-feed-element:first-child {
    margin-top: 0;
}
.social-feed-element .media-object {
    display: block;
    width:46px;
    border-radius:35px;
}
.social-feed-element .media-heading {
    margin: 0 0 5px;
}
.social-feed-element .media-list {
    margin-left: 0;
    list-style: none;
}

.social-feed-element .muted {
    color: #CBCBCB;
}
.social-feed-element a.muted:hover,
.social-feed-element a.muted:focus {
    color: #808080;
}
.SMUZSFTW-socialicon {


    float: right;
    width: 32px;
    height: 64px;
    background-size: 25px;
    background-repeat: no-repeat;
    margin-top: -10px;
    margin-right: -7px;
    
}
.fa-facebook{
    background-image: url("<?php echo SMUZSFTW_PLUGIN_URL . '/admin/ui/images/fb-ribbon.png'; ?>");
}
.fa-facebook:before{
    content: '';
}
.fa-twitter{
    background-image: url("<?php echo SMUZSFTW_PLUGIN_URL . '/admin/ui/images/twitter-ribbon.png'; ?>");
}
.fa-twitter:before{
    content: '';
}
.fa-instagram{
    background-image: url("<?php echo SMUZSFTW_PLUGIN_URL . '/admin/ui/images/instagram-ribbon.png'; ?>");
}
.fa-instagram:before{
    content: '';
}
.social-feed-element{
    box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2);
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
    margin:-1px;
    margin-top:25px;
    background-color: #fff;
    color: #333;
    text-align:left;
    font-size: 14px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    line-height: 16px;
    width: 402px;
    height:auto;
    zoom: 1;         /* for IE */
    display*:inline; /* for IE */
    max-width: 100%;
}
.social-feed-element:hover{
    box-shadow: 0 0 20px 0 rgba(10, 10, 10, 0.4);
}

.social-feed-element .content{
    padding:15px;
}
.social-feed-element .social-network-icon{
    opacity:0.7;
}


.social-feed-element .author-title{
    color: white;
    line-height: 1.5em;
    font-weight: 500;  
}


.uniqcontent {
	margin: -5px;
}

.social-feed-element  {
    background-color: #363636;
   color: white;
}

.SMUZSFTW-date {
   color: white;
}
<?php if ( $template_var['isOnDate'] !== '1' ): ?>
.SMUZSFTW-date {
    display: none;
}
<?php endif; ?>

<?php if ( $template_var['isSocialIcon'] !== '1' ): ?>
.SMUZSFTW-socialicon {
    display: none;
}
<?php endif; ?>

<?php if ( $template_var['isDisplayPicture'] !== '1' ): ?>
.SMUZSFTW-authorpic {
    display: none !important;
}
<?php endif; ?>

<?php if ( $template_var['isHideTextContent'] == '1' ): ?>
.social-feed-text {
    display: none !important;
}
<?php endif; ?>

<?php if ( $template_var['gfont'] !== '' ):
    $font = str_replace('+', ' ', $template_var['gfont']);
?>
.social-feed-text{
    font-family: "<?php esc_attr_e($font) ?>";
}
<?php endif; ?>

<?php if ( $template_var['isPostLinkEnabled'] == '1' ): ?>
.SMUZSFTW-readlink {
    display: none !important;
}
<?php endif; ?>

</style>
