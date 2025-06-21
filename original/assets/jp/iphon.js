function switchVideo(src) {
  
  const video = document.getElementById("campaignVideo");
  const buttons = document.querySelectorAll(".carousel-buttons button");

  video.pause();
  video.setAttribute("src", src);
  video.load();
  video.play();

  // Remove 'selected' class from all buttons
  buttons.forEach(btn => btn.classList.remove("selected"));

  // Add 'selected' class to the clicked button
  event.target.classList.add("selected");
}