function openModal() {
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}




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
    xhr.open("POST", "cipher_detection_time.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = () => {
        console.log(xhr.responseText);
    };
    xhr.send(`time=${elapsedMinutes}`);
});

function submitQuizForm() {
    // Get form data
    var answer1 = document.getElementById("answer1").value;
    var answer2 = document.getElementById("answer2").value;
    var answer3 = document.getElementById("answer3").value;

    // Create AJAX request
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Display quiz result
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    }
    xhr.open("POST", "cipher_detection_data.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Send form data
    xhr.send("answer1=" + answer1 + "&answer2=" + answer2 + "&answer3=" + answer3);
}

function restart() {
    location.reload();
}