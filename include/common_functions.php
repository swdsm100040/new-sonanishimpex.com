<?php 

function getPageName($local_folder_url = ''){
    $host = $_SERVER['HTTP_HOST'];
    $page_name = $_SERVER['SCRIPT_NAME'];
    if($host == 'localhost'){
       
        $page_name = str_replace($local_folder_url,'',$page_name);
    }
     $page_name = "page_".str_replace(".htm","",str_replace(".php","",str_replace(".html","",str_replace(" ","_",trim(str_replace("/","",$page_name))))));
     return $page_name;
}

function getMenuActive($page_name,$page_cuurent = 'page_index'){
	$active_class=  ($page_name == $page_cuurent)?'active':'';
	return $active_class;
}

function getParentMenuActive($page_name,$page_cuurent=''){
	if(in_array($page_name,array('page_appe','page_wristband','page_gymbag','page_jew'))) {
		$page_name = 'shop';
	}
	$page_name=  ($page_name == $page_cuurent)?'parent-menu-active':'';
	
	return $page_name;
}
function getservicesMenuActive($page_name){
	switch ($page_name) {
		case 'page_project-binding':
			return 'active';
			break;
		case 'page_leather-binding':
			return 'active';
			break;
		case 'page_fancy-binding':
			return 'active';
			break;
		case 'page_thesis-binding':
			return 'active';
			break;
			case 'page_book-demo':
			return 'active';
			break;
			case 'page_contract-agreement-binding':
			return 'active';
			break;
			case 'page_perfect-glue-binding':
			return 'active';
			break;
			case 'page_mapprinting':
			return 'active';
			break;
			

		default:
			return '';
			break;
	}
}

  ?>