<?php

class qa_xsearch_widget {

    function allow_template($template)
    {
        return ($template=='search');	//only visible on tag pages
    }
    function allow_region($region)
	{
	    return true;				//allowed to be placed anywhere
	}

	function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
	{
		if (qa_opt('qa_xsearch_enable')  == 1){
			require_once QA_INCLUDE_DIR.'qa-base.php';
			$query = qa_get('q');

			if ($query){
				$query = urlencode($query);
				$html = str_replace('[query]', $query, qa_opt('qa_xsearch_html'));
				$themeobject->output($html);
			}
		}
	}
}