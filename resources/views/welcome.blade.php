<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ env('APP_NAME') }}</title>

	@vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
	<div class="wrapper">
		<header class="header">
		</header>

		<main class="page">
			<div class="page__container _container">

				<div x-data="test"></div>

			</div>
		</main>

		<footer class="footer">
		</footer>
	</div>
</body>

</html>
