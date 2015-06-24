<?php

class view {

	function generate ($content_view, $teamplate_view, $data=NULL)
	{
		if(is_array($data)){
			extract($data);
		}
		include 'application/views/'.$teamplate_view;
	}

	function content($content_view, $data=NULL)
	{
		if(is_array($data)){
			extract($data);
		}
		include 'application/views/'.$content_view;
	}
}
