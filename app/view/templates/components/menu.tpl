<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="{$appURL}">
					<span class="brand">Client Demo</span>
				</a>

				<div class="nav-collapse collapse">
					<ul id="mainMenu" class="nav">
						<li{if ($page == 'users')} class="active"{/if}>
							<a href="{$appURL}users/">Manage users</a>
						</li>

						<li{if ($page == 'posts')} class="active"{/if}>
							<a href="{$appURL}posts/">Manage posts</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</header>