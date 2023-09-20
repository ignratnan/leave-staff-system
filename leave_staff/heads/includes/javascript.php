<script type="text/javascript">
	var loader = function(e) {
		let file = e.target.files;

		let show = "<span>Selected file : </span>" + file[0].name;
		let output = document.getElementById("selector");
		output.innerHTML = show;
		output.classList.add("active");
	};

	let fileInput = document.getElementById("file");
	fileInput.addEventListener("change", loader);
</script>
<script type="text/javascript">
	 function validateImage(id) {
	    var formData = new FormData();
	    var file = document.getElementById(id).files[0];
	    formData.append("Filedata", file);
	    var t = file.type.split('/').pop().toLowerCase();
	    if (t != "jpeg" && t != "jpg" && t != "png") {
	        alert('Please select a valid image file');
	        document.getElementById(id).value = '';
	        return false;
	    }
	    if (file.size > 1050000) {
	        alert('Max Upload size is 1MB only');
	        document.getElementById(id).value = '';
	        return false;
	    }

	    return true;
	}
</script>