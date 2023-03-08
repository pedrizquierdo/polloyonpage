window.onload = function() {
  var videoPopup = document.getElementById("video-popup");
  var video = document.getElementById("video");
  var closeBtn = document.getElementById("close-btn");

  // Show the video popup when the page loads
  videoPopup.style.display = "block";

  // Play the video when the page loads
  video.play();

  // Close the video popup when the close button is clicked
  closeBtn.addEventListener("click", function() {
    video.pause();
    videoPopup.style.display = "none";
  });
}