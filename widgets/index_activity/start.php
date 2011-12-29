<?php 
/* init file for index_activity widget */

function widget_index_activity_init(){
	//elgg_register_widget_type("index_activity", elgg_echo("activity"), elgg_echo("widget_manager:widgets:index_activity:description"), "index", true);
	widget_manager_add_widget_title_link("index_activity", "[BASEURL]activity");
}

elgg_register_event_handler("widgets_init", "widget_manager", "widget_index_activity_init");
