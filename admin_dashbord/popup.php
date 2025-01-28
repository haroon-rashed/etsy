<?php
session_start();
function displayMessage($name, $varient)
{
    if (isset($_SESSION[$name])) { ?>
        <div class=" card  top-0 mx-auto flash-message p-3 position-fixed " style="left:50%; transform:translateX(-50%) ; transform:translateY(-105%); opacity:0; transition: all 0.7s; background-color: <?php if (
            $varient == "success"
        ) {
            echo "green";
        } elseif ($varient == "danger") {
            echo "red";
        } ?>;">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Message</h2>
                <i class="bi bi-x fs-3 close-message"></i>
            </div>
            <p class="text-white">
                <?php print_r($_SESSION["category_success"][0]); ?>
            </p>
            <button class="btn text-white bg-dark rounded-3 close-message">OK</button>
        </div>

    <?php }

    unset($_SESSION[$name]);?>


    <script>
        let message = document.querySelector(".flash-message");
        let close_message = document.querySelectorAll(".close-message");

        if (message) {
            setTimeout(() => {
                message.style.transform = "translateY(20%)";
                message.style.opacity = "1";
            }, 100)

            // setTimeout(() => {
            //     message.style.transform = "translateY(0)";
            //     message.style.opacity = "0";
            // }, 6000)

            close_message.forEach((item, index) => {
                item.addEventListener("click", () => {
                    message.style.transform = "translateY(0)";
                    message.style.opacity = "0";
                })
            })
        }
    </script>


<?php
}
?>
