document.addEventListener("DOMContentLoaded", function() {

    const cForm = document.getElementById("contact_form");
    const rElem = document.getElementById("result");

    if (cForm && rElem) {
        cForm.addEventListener("submit", function(event) {
            event.preventDefault();

            const formData = new FormData(event.target);
            const name = formData.get("name");

            if (name) {
                fetch("process.php", {
                    method: "POST",
                    body: formData,
                })
                .then(resp => resp.text())
                .then(result => {
                    rElem.innerHTML = result;
                })
                .catch(error => {
                    console.error(`Error: ${error}`);
                })
            }

            //rElem.innerHTML = `Hello, ${name}`;
        });
    }

});