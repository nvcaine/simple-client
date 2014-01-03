<!DOCTYPE html>
<html lang="en">

<head>
	{include file="components/head.tpl"}
</head>

<body>

<div id="wrap">

	{include file="components/menu.tpl"}

	<div id="mainArea" class="container">
		<div class="innerWrapper">
		{include file="$page.tpl"}
		</div>
	</div>

	<div id="push" style="height:60px;"></div>
</div>

{include file="components/footer.tpl"}

</body>
</html>