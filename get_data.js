// Using jQuery AJAX (you can use vanilla JavaScript as well)
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "get_course_numbers.php", // PHP script to fetch data
        dataType: "json",
        success: function (data) {
            // Populate the dropdown with data
            var dropdown = $("#dropdown");
            dropdown.empty();
            dropdown.append('<option value="">Select a value</option>');
            $.each(data, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.category).text(entry.category));
            });
        },
        error: function () {
            console.error("Failed to fetch data from the server.");
        }
    });
});
