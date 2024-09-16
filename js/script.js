/* global likeImage, shareImage */

/* eslint-disable no-unused-vars */

// Function to handle "Like"
function likeImage() {
  alert("You liked this image!");
  // Logic for handling like count, etc.
}

// Function to handle "Share"
function shareImage() {
  if (navigator.clipboard) {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(function() {
      alert("Image URL copied to clipboard. Share it with your friends!");
    }).catch(function() {
      alert("Failed to copy. Please try again.");
    });
  } else {
    alert("Clipboard API not supported. Please copy the URL manually.");
  }
}

/* eslint-enable no-unused-vars */

// Attach the functions to the global window object
window.likeImage = likeImage;
window.shareImage = shareImage;

document.querySelector('.cta-learn-more-text').addEventListener('click', function () {
    document.querySelector('#vision-div').scrollIntoView({
        behavior: 'smooth'
    });
});
