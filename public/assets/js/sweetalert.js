"use strict";

document.addEventListener("DOMContentLoaded", function () {

    // delete confirmation
    document.querySelectorAll('.delete').forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    element.parentElement.submit();
                }
            });
        });
    });

    // banne confirmation

    document.querySelectorAll('.banne').forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to banne this user!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, banne it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    element.parentElement.submit();
                }
            });
        });
    });

    // reject or accept confirmation

    document.querySelectorAll('.reject').forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to reject this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, reject it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    element.parentElement.submit();
                }
            });
        });
    });

    document.querySelectorAll('.accept-publish').forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to accept this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, accept it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    element.parentElement.submit();
                }
            });
        });
    });

    // logout confirmation

});
