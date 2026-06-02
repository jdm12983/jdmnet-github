var a2a_config = a2a_config || {};

/* To enable Google Analytic tracking */
a2a_config.track_links = 'ga';

/* Set to "1" to show titles of sites/services in popup window */
a2a_config.show_title = 1;

/* Which sites/services to show first in popup window  */
a2a_config.prioritize = [ 'x', 'reddit', 'facebook', 'sms', 'email', 'print' ];

/* Color coding info for popup window */
/* Only use HEX color codes; no named codes */
a2a_config.color_bg = "FFFFFF";
a2a_config.color_main = "D7E5ED";
a2a_config.color_border = "AECADB";
a2a_config.color_link_text = "333333";
a2a_config.color_link_text_hover = "333333";

/* Templates for different sites/services */
a2a_config.templates = a2a_config.templates || {};

/* Email */
a2a_config.templates.email = {
  subject: "Check this out: ${title}",
  body: "Click the link:\n${link}",
};

/* Text Message / SMS */
a2a_config.templates.sms = {
  body: "Check this out: ${title}\n${link}",
};

/* Twitter / X */
a2a_config.templates.x = {
  text: "Reading: ${title}\nLink: ${link}",
};

/* Facebook */
/*
a2a_config.templates.facebook = {
  app_id: "2235869766425107",
  redirect_uri: "",
  quote: "",
};
*/
