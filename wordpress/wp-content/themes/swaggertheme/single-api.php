<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="message-bar" class="swagger-ui-wrap">&nbsp;</div>
<div class="swagger-ui-wrap" style="margin-bottom: 20px;"><a href="/docs/index.html">Back</a></div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>

<script type="text/javascript">
	$(function () {
		var url = window.location.search.match(/url=([^&]+)/);
		if (url && url.length > 1) {
			url = url[1];
		} else {
			url = "<?php echo get_field( "api_uri" );?>";
		}
		window.swaggerUi = new SwaggerUi({
			url: url,
			dom_id: "swagger-ui-container",

			supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
			supportHeaderParams: true,
			onComplete: function(swaggerApi, swaggerUi){
				window.authorizations.add('oauth2', new ApiKeyAuthorization('client_id', '<?php echo get_field( "client_id" );?>', 'header'));
				log("Loaded SwaggerUI");
				if(typeof initOAuth == "function") {
					/**/
					initOAuth({
						clientId: '<?php echo get_field( "client_id" );?>',
						realm: "your-realms",
						appName: "Swagger UI"
					});
				}
				$('pre code').each(function(i, e) {
					hljs.highlightBlock(e)
				});
			},
			onFailure: function(data) {
				log("Unable to Load SwaggerUI");
			},
			docExpansion: "none",
			sorter : "alpha"
		});


		window.swaggerUi.load();
	});
</script>

<?php get_footer(); ?>
