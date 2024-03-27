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

});
