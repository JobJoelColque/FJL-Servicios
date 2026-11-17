document.addEventListener("DOMContentLoaded", function () {

			const archivo = document.getElementById(
				"contact_archivo_user_grupoamsi"
			);

			const nombreArchivo = document.getElementById(
				"nombre-archivo"
			);

			const errorArchivo = document.getElementById(
				"error-adjunto"
			);

			const formulario = document.getElementById(
				"contact_user_grupoamsi"
			);

			const maxSize = 5 * 1024 * 1024;

			archivo.addEventListener("change", function () {

				errorArchivo.textContent = "";

				if (!this.files.length) {
					nombreArchivo.textContent =
						"Ningún archivo seleccionado";
					return;
				}

				const file = this.files[0];
				const extension = file.name.split(".").pop().toLowerCase();

				if (!["pdf", "txt"].includes(extension)) {

					errorArchivo.textContent =
						"Solo se permiten archivos PDF o TXT.";

					this.value = "";
					nombreArchivo.textContent =
						"Ningún archivo seleccionado";

					return;
				}

				if (file.size > maxSize) {

					errorArchivo.textContent =
						"El archivo supera el límite de 5 MB.";

					this.value = "";
					nombreArchivo.textContent =
						"Ningún archivo seleccionado";

					return;
				}

				nombreArchivo.textContent = file.name;
			});

			formulario.addEventListener("reset", function () {
				nombreArchivo.textContent =
					"Ningún archivo seleccionado";

				errorArchivo.textContent = "";
			});

		});