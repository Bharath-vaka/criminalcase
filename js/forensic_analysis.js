function openModal() {
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}




jQuery(document).ready(function($) {
    $(document).ready(function() {


        var pin = 1049;
        var enterCode = "";
        enterCode.toString();

        $("#numbers button").click(function() {

            var clickedNumber = $(this).text().toString();
            enterCode = enterCode + clickedNumber;
            var lengthCode = parseInt(enterCode.length);
            lengthCode--;
            $("#fields .numberfield:eq(" + lengthCode + ")").addClass("active");

            if (lengthCode == 3) {

                // Check the PIN
                if (enterCode == pin) {
                    // Right PIN!
                    $("#fields .numberfield").addClass("right");
                    $("#numbers").addClass("hide");
                    $("#anleitung p").html("<img src='../images/qrcode.png' style='width:350px;height:350px;'>");

                    // Display a popup

                } else {
                    // Wrong PIN!
                    $("#fields").addClass("miss");
                    enterCode = "";
                    setTimeout(function() {
                        $("#fields .numberfield").removeClass("active");
                    }, 200);
                    setTimeout(function() {
                        $("#fields").removeClass("miss");
                    }, 500);

                }

            } else {}

        });

        $("#restartbtn").click(function() {
            enterCode = "";
            $("#fields .numberfield").removeClass("active");
            $("#fields .numberfield").removeClass("right");
            $("#numbers").removeClass("hide");
            $("#anleitung p").html("<strong>Please enter the correct PIN-Code.</strong>");
        });

    });
});

const submitBtn = document.getElementById("submit-button");

// Get the timer element
const timerEl = document.getElementById("timer");

// Set the start time to the current time
let startTime = new Date().getTime();

// Update the timer every second
setInterval(() => {
    // Calculate the elapsed time in seconds
    let elapsedTime = Math.floor((new Date().getTime() - startTime) / 1000);

    // Calculate the minutes and seconds
    let minutes = Math.floor(elapsedTime / 60);
    let seconds = elapsedTime % 60;

    // Add leading zeros to the minutes and seconds
    minutes = String(minutes).padStart(2, "0");
    seconds = String(seconds).padStart(2, "0");

    // Update the timer element
    timerEl.innerText = `${minutes}:${seconds}`;
}, 1000);

// Add a click event listener to the submit button
submitBtn.addEventListener("click", () => {
    // Calculate the elapsed time in minutes
    let elapsedMinutes = Math.floor((new Date().getTime() - startTime) / 60000);

    // Send the elapsed time to the server using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "forensic_analysis_data.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = () => {
        console.log(xhr.responseText);
    };
    xhr.send(`time=${elapsedMinutes}`);
});