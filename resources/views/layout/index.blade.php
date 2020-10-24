<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
	<meta charset="uft-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{Config::get('const.site_name')}}</title>
	<!-- body タグの最後に足す-->
	<meta name="keywords" content="aaa" />
	<meta name="description" content="bbb" />
</head>

<body>
	<div id="wrapper">
		<header>
			<div id="top">
				<div class="inner">
					<h1><a href="/">{{Config::get('const.site_name')}}</a></h1>
			</div>
		</header>
		<div id="column2">
			<div id="contents" data-sticky-container>
				<div id="layoutbox" data-sticky-container>
					<div id="main">
						@yield('body')
					</div>
				</div>
			</div>
		</div>
		<div id="pagetop"><a href="#wrapper">このページの先頭へ戻る</a></div>

		<footer id="footer">
			<div class="inner">
				<small>Copyright &copy; 2020 {{Config::get('const.site_name')}} All Rights Reserved</small>
			</div>
		</footer>
	</div>
	@yield('script')
</body>

</html>