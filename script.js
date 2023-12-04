document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("appointmentForm").onsubmit = function() {
        var patientName = document.getElementById("patientName").value;
        var appointmentDate = document.getElementById("appointmentDate").value;

        if (patientName === "" || appointmentDate === "") {
            alert("All fields are required!");
            return false;
        }

        return true;
    };
});
