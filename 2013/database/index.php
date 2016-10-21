<?php
include('db.php');
include('header.php');

switch ($_GET['page']) {
	case 'read':
		include('read.php');
		break;

	case 'input':
		include('input.php');
		break;

	case 'detail':
		include('detail.php');
		break;

	case 'edit':
		include('edit.php');
		break;

	default:
		include('read.php');
		break;
}

include('footer.php');