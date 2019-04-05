/* Test Closure Countdown */
var testClosureDate = new Date("Apr 23, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var timeBeforeClosure = testClosureDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(timeBeforeClosure / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeBeforeClosure % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeBeforeClosure % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeBeforeClosure % (1000 * 60)) / 1000);

    // Display the result in tag countdown
    document.querySelector(".test-closure .days").innerHTML = days;
    document.querySelector(".test-closure .hours").innerHTML = hours;
    document.querySelector(".test-closure .minutes").innerHTML = minutes;
    document.querySelector(".test-closure .seconds").innerHTML = seconds;

    // If the count down is finished, write some text 
    if (timeBeforeClosure < 0) {
        clearInterval(x);
        document.querySelector(".coutndown").innerHTML = "Test is now open";
    }
}, 1000);


/* Test Opening Countdown */
var testOpeningDate = new Date("Apr 15, 2019 12:03:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var timeBeforeOpening = testOpeningDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(timeBeforeOpening / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeBeforeOpening % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeBeforeOpening % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeBeforeOpening % (1000 * 60)) / 1000);

    // Display the result in tag countdown
    document.querySelector(".test-opening .days").innerHTML = days;
    document.querySelector(".test-opening .hours").innerHTML = hours;
    document.querySelector(".test-opening .minutes").innerHTML = minutes;
    document.querySelector(".test-opening .seconds").innerHTML = seconds;

    // If the count down is finished, write some text 
    if (timeBeforeOpening < 0) {
        clearInterval(x);
        document.querySelector(".coutndown").innerHTML = "Test is now open";
    }
}, 1000);

//Remove alert 
setTimeout(() => {
    document.querySelector('.alert').classList.add('fadeOut');
    document.querySelector('.alert').style.display = 'none';
}, 5000);

//Copy Link In Dashboard
function copyLink() {
    console.log('Copied');
    var copyLink = document.querySelectorAll(".user-link");
    copyLink.forEach(element => {
        element.select();
        document.execCommand("copy"); 
    });
  }
  