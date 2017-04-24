<?php
class qa_xsearch_admin {

	function option_default($option) {

		switch($option) {
			case 'qa_xsearch_enable': 
				return 1;
			case 'qa_xsearch_html': 
				return '<a class="btn btn-default" style="margin-bottom:15px;" href="http://stackexchange.com/search?q=[query]">Search on <b>Stack<span style="color:#215296;">Exchange</b></span><img src="./qa-plugin/cross-platform-search/stackexchange.png" alt="StackExchange" width="20px" height="20px" style=" display: inline; max-height: 20px; margin-left: 3px;"></a>';
			default:
				return null;				
		}

	}
	
	function allow_template($template)
	{
		return ($template!='admin');
	}       

	function admin_form(&$qa_content)
	{                       

		// Process form input

		$ok = null;

		if (qa_clicked('qa_xsearch_save')) {
			qa_opt('qa_xsearch_enable',(bool)qa_post_text('qa_xsearch_enable'));
			qa_opt('qa_xsearch_html',(string)qa_post_text('qa_xsearch_html'));
			$ok = qa_lang('admin/options_saved');
		}
		
		// Create the form for display

		$fields = array();
		$fields[] = array(
				'label' => 'Enable Cross Platform Search',
				'tags' => 'name="qa_xsearch_enable"',
				'value' => qa_opt('qa_xsearch_enable'),
				'type' => 'checkbox',
				);
		$fields[] = array(
				'label' => 'Search Buttons HTML',
				'tags' => 'name="qa_xsearch_html"',
				'value' => qa_opt('qa_xsearch_html'),
				'type' => 'textarea',
				'rows' => 50,
				);

		return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,

				'fields' => $fields,

				'buttons' => array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'tags' => 'NAME="qa_xsearch_save"',
					     ),
					),

			    );
	}
}

