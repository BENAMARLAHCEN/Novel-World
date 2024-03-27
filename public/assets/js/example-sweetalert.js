"use strict";

document.addEventListener("DOMContentLoaded", function () {
  // Basic Sweet Alerts
  document.querySelectorAll('.eg-swal-default').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire('A Simple sweet alert Content');
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-default-s2').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire('The Internet?', 'That thing is still around?');
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-success').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire("Good job!", "You clicked the button!", "success");
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-info').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire("Good job!", "You clicked the button!", "info");
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-warning').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire("Good job!", "You clicked the button!", "warning");
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-error').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire("Good job!", "You clicked the button!", "error");
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-question').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire("Good job!", "You clicked the button!", "question");
      e.preventDefault();
    });
  });

  // Advanced Sweet Alerts
  document.querySelectorAll('.eg-swal-av1').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
      });
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-av2').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'info',
        html: 'You can use <b>bold text</b>, ' + '<a href="//sweetalert2.github.io">links</a> ' + 'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
      });
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-av3').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!'
      }).then(function (result) {
        if (result.value) {
          Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
        }
      });
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-av4').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire({
        title: 'Sweet!',
        text: 'Modal with a custom image.',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image'
      });
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-av5').forEach(function (element) {
    element.addEventListener("click", function (e) {
      var timerInterval;
      Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <b></b> milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        onBeforeOpen: function onBeforeOpen() {
          Swal.showLoading();
          timerInterval = setInterval(function () {
            Swal.getContent().querySelector('b').textContent = Swal.getTimerLeft();
          }, 100);
        },
        onClose: function onClose() {
          clearInterval(timerInterval);
        }
      }).then(function (result) {
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer');
        }
      });
      e.preventDefault();
    });
  });

  document.querySelectorAll('.eg-swal-av6').forEach(function (element) {
    element.addEventListener("click", function (e) {
      Swal.fire({
        title: 'Submit your Github username',
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Look up',
        showLoaderOnConfirm: true,
        preConfirm: function preConfirm(login) {
          return fetch("//api.github.com/users/".concat(login)).then(function (response) {
            if (!response.ok) {
              throw new Error(response.statusText);
            }
            return response.json();
          })["catch"](function (error) {
            Swal.showValidationMessage("Request failed: ".concat(error));
          });
        },
        allowOutsideClick: function allowOutsideClick() {
          return !Swal.isLoading();
        }
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            title: "".concat(result.value.login, "'s avatar"),
            imageUrl: result.value.avatar_url,
            imageWidth: '120px'
          });
        }
      });
      e.preventDefault();
    });
  });
});
