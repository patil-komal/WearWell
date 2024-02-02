<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WearWell</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"
    />
    <link
      rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" type="image/x-icon" href="img/logo4.png" />
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
  </head>

  <body>
    <!-- <section class="text-gray-700 body-font relative mb-2">
		<div class="absolute inset-0 bg-gray-300">
			<iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
				scrolling="no"
				src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
				style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
		</div>
		<div class="container px-5 py-24 mx-auto flex">
			<div
				class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
				<h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Conatct Us</h2>
				<p class="leading-relaxed mb-5 text-gray-600">sent your feedback and Message to Us
				</p>
				
				<input
					class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
					placeholder="Name" type="text" id="name">
					<input
					class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
					placeholder="Email" type="email" id="email">
					<input
					class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
					placeholder="Subject" type="text" id="subject">
				<textarea
					class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none"
					placeholder="Message" id="message"></textarea>
				<button
					class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick = "return sendMessage()">send</button>
				<p class="text-xs text-gray-500 mt-3">contact us using email....
				</p>
			</div>
		</div>
	</section> -->

    <form id="form">
      <h1>contact page</h1>
      <label for="name">Enter Name :- </label>
      <input type="text" name="name" id="name" /><br />
      <label for="email">Enter email :- </label>
      <input type="email" name="email" id="email" /><br />
      <label for="subject">Enter subject :- </label>
      <input type="text" name="subject" id="subject" /><br />
      <label for="message">Enter mesaage :- </label>
      <input type="text" name="message" id="message" /><br />
      <button type="button" onclick="sendMessage()">Send</button>
    </form>

    <script>
      function sendMessage(event) {
        const form = document.getElementById("form");
        try {
          const serviceID = "service_fwikaeu";
          const templateID = "template_ota2dbp";
          const publicKey = "W1DtM2vy9k64ImV22";

          emailjs.sendForm(serviceID, templateID, form, publicKey).then(
            () => {
              alert("Sent!");
            },
            (err) => {
              alert(JSON.stringify(err));
            }
          );
        } catch (error) {
          console.log(error);
        }
      }
    </script>
  </body>
</html>
