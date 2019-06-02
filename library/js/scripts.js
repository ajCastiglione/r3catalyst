/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
 */
function updateViewportDimensions() {
  var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName("body")[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight || e.clientHeight || g.clientHeight;
  return { width: x, height: y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
 */
var waitForFinalEvent = (function() {
  var timers = {};
  return function(callback, ms, uniqueId) {
    if (!uniqueId) {
      uniqueId = "Don't call this twice without a uniqueId";
    }
    if (timers[uniqueId]) {
      clearTimeout(timers[uniqueId]);
    }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;

function aboutLimit($) {
  let member = $(".member");
  $.each(member, (idx, el) => {
    let container = $(el).children(".bio");
    let bio = $(el).find("p");
    let text = bio.html();

    // Remove all text from the current bio
    container.empty();
    // How many words should show in the exceprt
    let limit = 160;
    // Create array from text
    // let wordArr = text.split(" ");
    // Truncate the array based on the limit above
    let newText = text.substring(0, limit);
    // Create the new string
    // let newBio = newArr.join(" ");
    // Return the HTML for the short bios
    container.html(`<p>${newText}...</p>`);
  });
}

function showFullBio($) {
  let btn = $(".button");
  let close = $(".close");
  let outside = $(".member-single");
  let body = $("body", "html");
  let data;
  btn.on("click", e => {
    e.preventDefault();
    data = e.target.dataset.person;
    let person = $(".team").children(`#${data}`);
    person.css("display", "flex");
    body.css("overflow", "hidden");
    return data;
  });
  close.on("click", e => {
    e.preventDefault();
    let person = $(".team").children(`#${data}`);
    person.css("display", "none");
    body.css("overflow", "auto");
  });
  outside.on("click", e => {
    e.preventDefault();
    let person = $(".team").children(`#${data}`);
    person.css("display", "none");
    body.css("overflow", "auto");
  });
}

function wrapForm($) {
  let fields = $(".gfield");
  fields.not(":last").wrapAll('<div class="inputs"/>');
  fields.last().wrap('<div class="message"/>');
}

/*
 * Put all your regular jQuery in here.
 */
jQuery(document).ready(function($) {
  if ($("body").hasClass("page-id-13")) {
    aboutLimit($);
    showFullBio($);
  }
  if ($("body").hasClass("page-id-17")) {
    wrapForm($);
  }
}); /* end of as page load scripts */
