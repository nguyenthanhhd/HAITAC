<?php
	if($_POST){
		if (isset($_POST['goBackBtn'])){
			header("Location: /_admincp_v4/index.php");
			exit;
		} else if (isset($_POST['sendHeroWithMail'])){
			header("Location: /_admincp_v4/AddHeroToAccount.php");
			exit;
		} else if (isset($_POST['sendItemWithMail'])){
			header("Location: /_admincp_v4/AddItemToAccount.php");
			exit;
		} else if (isset($_POST['toolCompareFileXMLS'])){
			header("Location: /_admincp_v4/ToolCompareFileXMLS.php");
			exit;
		} else if (isset($_POST['toolCompareFileMainSWF'])){
			header("Location: /_admincp_v4/ToolCompareFileMain.php");
			exit;
		} else if (isset($_POST['serverController'])){
			header("Location: /_admincp_v4/ServerController.php");
			exit;
		} else if (isset($_POST['showDetailAccount'])){
			header("Location: /_admincp_v4/ShowDetailAccount.php");
			exit;
		} else if (isset($_POST['gotoQueryDatabase'])){
			header("Location: /_admincp_v4/QueryDatabase.php");
			exit;
		} else if (isset($_POST['gotoCustomSendAllServer'])){
			header("Location: /_admincp_v4/CustomSendAllServer.php");
			exit;
		}
	}
?>
