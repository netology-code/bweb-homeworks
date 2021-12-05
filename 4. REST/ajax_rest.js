$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      query: $("#ip").val(),
    };
	var url = "";
	var token = "";

    $.ajax({
      type: "GET",
      url: url + formData.query,
	  beforeSend: function(xhr) {
                 xhr.setRequestHeader("Authorization", "Token "+ token) 
            },
      data: '',
      dataType: "json",
      encode: true,
    }).done(function (result) {
      console.log(result);
	});

    event.preventDefault();
  });
});