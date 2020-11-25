    <footer>
        <p>Todos os direitos reservados &copy Afonso Medeiros 2020.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/script.js" ></script>

    <script type="text/javascript">
        window.onload = function () {
            const path = window.location.pathname.split("/");
            const file = path[path.length - 1];

            let links = document.getElementsByClassName("nav-link");
            let menu_path = [];
            for (const key in links) {
                if (links.hasOwnProperty(key)) {
                    const element = links[key];
                    let path_link = element.pathname.split("/");
                    let link_file = path_link[path_link.length - 1];

                    if (link_file === file) {
                        element.classList.add("active");
                    }

                    menu_path.push(element)
                }
            }
        }
    </script>
</body>

</html>