<!doctype html>
<html lang="es">

<head>
	<title>Registro</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS v5.2.1 -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous" />
</head>

<body>
	<!-- Section: Design Block -->
	<section class="background-radial-gradient overflow-hidden">
		<style>
			.background-radial-gradient {
				background-color: hsl(218, 41%, 15%);
				background-image: radial-gradient(650px circle at 0% 0%,
						hsl(218, 41%, 35%) 15%,
						hsl(218, 41%, 30%) 35%,
						hsl(218, 41%, 20%) 75%,
						hsl(218, 41%, 19%) 80%,
						transparent 100%),
					radial-gradient(1250px circle at 100% 100%,
						hsl(218, 41%, 45%) 15%,
						hsl(218, 41%, 30%) 35%,
						hsl(218, 41%, 20%) 75%,
						hsl(218, 41%, 19%) 80%,
						transparent 100%);
			}

			#radius-shape-1 {
				height: 220px;
				width: 220px;
				top: -60px;
				left: -130px;
				background: radial-gradient(#44006b, #ad1fff);
				overflow: hidden;
			}

			#radius-shape-2 {
				border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
				bottom: -60px;
				right: -110px;
				width: 300px;
				height: 300px;
				background: radial-gradient(#44006b, #ad1fff);
				overflow: hidden;
			}

			.bg-glass {
				background-color: hsla(0, 0%, 100%, 0.9) !important;
				backdrop-filter: saturate(200%) blur(25px);
			}
		</style>

		<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
			<div class="row gx-lg-5 align-items-center mb-5">
				<div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
					<h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
						The best offer <br />
						<span style="color: hsl(218, 81%, 75%)">for your business</span>
					</h1>
					<p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
						Temporibus, expedita iusto veniam atque, magni tempora mollitia
						dolorum consequatur nulla, neque debitis eos reprehenderit quasi
						ab ipsum nisi dolorem modi. Quos?
					</p>
				</div>

				<div class="col-lg-6 mb-5 mb-lg-0 position-relative">
					<div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
					<div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

					<div class="card bg-glass">
						<div class="card-body px-4 py-5 px-md-5">
							<form action="{{ route('registro') }}" method="POST">
							@csrf
								<!-- 2 column grid layout with text inputs for the first and last names -->
								<div class="row">
									<div class="col-md-6 mb-4">
										<div data-mdb-input-init class="form-outline">
											<input type="text" id="form3Example1" name="nombre" class="form-control" />
											<label class="form-label" for="form3Example1">Nombre</label>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div data-mdb-input-init class="form-outline">
											<input type="text" id="form3Example2" name="apellido" class="form-control" />
											<label class="form-label" for="form3Example2">Apellido</label>
										</div>
									</div>
								</div>

								<!-- Email input -->
								<div data-mdb-input-init class="form-outline mb-4">
									<input type="email" id="form3Example3" name="email" class="form-control" />
									<label class="form-label" for="form3Example3">Correo</label>
								</div>

								<!-- Password input -->
								<div data-mdb-input-init class="form-outline mb-4">
									<input type="password" id="form3Example4" name="password" required class="form-control" />
									<label class="form-label" for="form3Example4">Contraseña</label>
								</div>

								<!-- Submit button -->
								<button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
									Registrar
								</button>

								<!-- Sign up text -->
								<div class="text-center">
									<p>¿Ya tienes cuenta?</p>
									<a href="{{route('login')}}">Inicia sesión</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Design Block -->
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
		integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
		crossorigin="anonymous"></script>
</body>

</html>